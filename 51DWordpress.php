<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */


/*
	Plugin Name: 51Degrees Wordpress
	Plugin URI: http://51degrees.mobi/wordpress
	Description: Uses the 51Degrees.mobi.php solution to find out what device the end user is viewing your site on. You can access the variable using $_51D. See the documentation for full information on how to use.
	Version: 2.1.6.7
	Author: James Rosewell, Tom Holmes
	Author URI: http://51Degrees.mobi
	License: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0. If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/. This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
*/

include_once('51Degrees.mobi.php');
if(get_option('show_51DMeta')){ include_once('51DMetadata.php'); }
if(get_option('enable_51DUDP')){ include_once('51Degrees.mobi.usage.php'); }

add_action('admin_head', 'f51d_update_javascript');

function f51d_update_javascript() {
?>
<script type="text/javascript" >
  function F51DStartUpdate()
  {
  jQuery(document).ready(function($) {
  jQuery('.f51d_updating_text').html("Updating now, please wait...");

  var data = {
  action: 'my_action'
  };

  jQuery.post(ajaxurl, data, function(response) {
  alert('Got this from the server: ' + response);
  jQuery('.f51d_updating_text').html("");
  });

  });
  }
</script>
<?php
}

add_action('wp_ajax_my_action', 'my_action_callback');

function my_action_callback() {
  @set_time_limit(500);
  $time = microtime(); $time = explode(' ', $time); $time = $time[1] + $time[0]; $start = $time;
  $dir = dirname(__FILE__);
  $bodyPost = ""; $phpCurrent = "phpCurrent=";
  $premiumLicenseKey = F51DGetLicenses($dir);
  $keysValid = true;
  
  foreach ($premiumLicenseKey as $key) {
      if(!preg_match("#^[A-Z\d]+$#", $key))
      {
          $keysValid = false;
      }
  }
  
  $premiumLicenseKey = implode('|', $premiumLicenseKey);
  
  if($keysValid)
  {
      if($premiumLicenseKey !== "")
      {
          F51DRemoveOldFiles($dir);
          $url = 'https://51degrees.mobi/devicedata/getdelta.ashx?LicenseKeys='.$premiumLicenseKey;
          F51DGetPHPFileArrays($dir, $phpCurrent);
          $updateFile = F51DDownload($url, $phpCurrent, $dir);
          if(substr($updateFile, 0, 8) == "[!FAILED")
          {
              $errorMessage = explode('|', $updateFile);
              echo 'There has been a problem with the update. '.$errorMessage[1];
          }
          else if($updateFile != "")
          {
              F51DDoUpdate($phpCurrent, $updateFile, $url, $dir);

              echo "Updates have been applied, thank you for your patience!";
          }
          else
          {
              echo "No updates available. Please try again later.";
          }
      }
      else
      {
          echo "Please check that your license file(s) are included in the 51Degrees directory, the script has detected that there are no licenses.";
      }
  }
  else
  {
      echo "Please check your license(s), they appear to be invalid";
  }
  $time = microtime(); $time = explode(' ', $time); $time = $time[1] + $time[0]; $finish = $time; $total_time = round(($finish - $start), 4);
}

function F51DGetLicenses($dir)
{
    $licenses = array();
    foreach(glob($dir.'/*.lic') as $file) {
        $licenses[] = file_get_contents($file);
    }
    return $licenses;
}

function F51DGetPhpFileArrays($dir, &$phpCurrent)
{
    $updatehashesFile = $dir.'/UpdateHash.txt';
    $updatelengthsFile = $dir.'/UpdateLengths.txt';
    $currentHash = "";
    if(file_exists($updatehashesFile) && file_exists($updatelengthsFile))
    {
        $currentHash = file_get_contents($updatehashesFile);
    }

    if($currentHash == "")
    {
        F51DWriteUpdateHashFile($dir, $currentHash);
    }

    $phpCurrent .= $currentHash;
    return;
}

function F51DWriteUpdateHashFile($dir, &$currentHash)
{
    $dirlengths = ""; $filename = $dir.'/UpdateHash.txt';
    F51DPhpFileArraysProcessor($dir, $currentHash, $dirlengths, false);
    $fh = fopen($filename, 'w');
    fwrite($fh, $currentHash);
    fclose($fh);
    $dirlengths = F51DShortenLengthsVar($dirlengths);
    $fh = @fopen($dir.'/UpdateLengths.txt', 'w+');
    fwrite($fh, $dirlengths);
    fclose($fh);
    if(!file_exists($filename) || !file_exists($dir.'/UpdateLengths.txt'))
    {
        die('You do not have permissions set to update these files. Please change your permissions and try again.');
    }
}

function F51DPhpFileArraysProcessor($dir, &$currentHash, &$dirlengths, $isSubdir)
{
    foreach(glob($dir.'/*') as $file) {
        if(is_dir($file))
        {
            F51DPhpFileArraysProcessor($file, $currentHash, $dirlengths, true);
        }
        else
        {
            $fileWithDir = substr($file, 13);
            if($isSubdir === true || 
                ($fileWithDir == "51Degrees.mobi.php" || $fileWithDir == "51Degrees.mobi.usage.php" || $fileWithDir == "51DMetadata.php" || $fileWithDir == "License.txt"))
            {
                $thisHash = $fileWithDir.md5_file($file);
                $dirlengths .= (strlen($thisHash) - 32).'-';
                $currentHash .= $thisHash;
            }
        }
    }
}

function F51DShortenLengthsVar($dirlengths)
{
    $ctr = 0; $vals = array(); $prev = 0;
    foreach (explode('-', $dirlengths) as $len) {
        if($prev != 0 && $len != $prev)
        {
            $vals[] = $prev.'*'.$ctr;
            $ctr = 1;
            $prev = $len;
        }
        else if($prev != 0)
        {
            $ctr++;
        }
        else
        {
            $prev = $len;
            $ctr++;
        }
    }
    return implode('|', $vals);
}

function F51DDownload($url, $data, $dir, $optional_headers = null)
{
    $params = array('http' => array('method' => 'POST', 'content' =>  $data, 'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                    "Content-Length: " . strlen ( $data ) . "\r\n".
                    "Hash-Length: " . file_get_contents($dir.'/UpdateLengths.txt') . "\r\n"));
    if($optional_headers != null) {
        $params['http']['header'] = $optional_headers;
    }
    $ctx = stream_context_create($params);
    try {
        ini_set ('user_agent', $_SERVER['HTTP_USER_AGENT']);
        $fp = @fopen($url, 'rb', false, $ctx);
        $response = @stream_get_contents($fp);
    } catch (Exception $e) {
      echo 'There was a problem trying to run the update. Exception: '.$e->getMessage();
    }
    return $response;
}

function F51DDoUpdate($phpCurrent, &$updateFile, $url, $dir)
{
    F51DDoubleCheck($phpCurrent, $updateFile, $url, $dir);
    $linevars = explode('!]', $updateFile);
    array_pop($linevars);
    $deleteFiles = array();
    foreach($linevars as $value)
    {
        $vals = explode('|', $value);
        if(trim($vals[0]) != "[!DELETE")
        {
            $text = array();
            for ($i=2; $i < count($vals); $i++) { 
                $text[] = $vals[$i];
            }
            $res = F51DCreateUpdateFile($dir.'/'.$vals[1], implode('|', $text));
            if($res != "")
            {
                F51DRollbackUpdate($dir);
                echo 'Problem occured while updating - '.$res;
            }
        }
        else
        {
            $deleteFiles[] = $vals[1];
        }
    }
    try {
        F51DDeleteMarked($deleteFiles);
    } catch (Exception $e) {
        echo 'Problem occured while updating - '.$e->getMessage();
    }
    F51DRemoveOldFiles($dir);
    $currentHash = "";
    F51DWriteUpdateHashFile($dir, $currentHash);
}

function F51DDoubleCheck($phpCurrent, &$updateFile, $url, $dir)
{
    $checking = F51DDownload($url, $phpCurrent, $dir);
    if($checking != $updateFile)
    {
        $updateFile = $checking;
        F51DDoubleCheck($phpCurrent, $updateFile, $url, $dir);
    }
}

function F51DCreateUpdateFile($fileDirectory, $fileContents)
{
    try {
        $directory = explode('\\', $fileDirectory);
        $checkingDir = "";
        for ($i=0; $i < count($directory) - 1; $i++) { 
            $checkingDir .= '/'.$directory[$i];
            if(!is_dir($checkingDir))
            {
                mkdir($checkingDir);
            }
        }
        if(file_exists($fileDirectory))
        {
            $fh = @fopen($fileDirectory.'upd', 'w+', false) or die("Problem creating file: your permissions will not allow writing.");
            fwrite($fh, $fileContents);
            fclose($fh);
            if(file_exists($fileDirectory))
            {
                rename($fileDirectory, $fileDirectory.'old');
            }
            rename($fileDirectory.'upd', $fileDirectory);
        }
        else
        {
            $fh = @fopen($fileDirectory, 'w+', false) or die("Problem creating file: your permissions will not allow writing.");
            fwrite($fh, $fileContents);
            fclose($fh);
        }
        return "";
    } catch (Exception $e) {
        return $e->getMessage();
    }
    
}

function F51DDeleteMarked($deleteFiles)
{
    foreach ($deleteFiles as $toDelete) {
        if(file_exists(dirname(__FILE__).$toDelete))
        {
            unlink(dirname(__FILE__).$toDelete);
        }
    }
}

function F51DRollbackUpdate($dir)
{
    foreach(glob($dir.'/*') as $file) {
        if(is_dir($file))
        {
            F51DRollbackUpdate($file);
        }
        else
        {
            if(substr($file, strlen($file) - 3, strlen($file)) == "old")
            {
                try {
                    rename($file, substr($file, 0, strlen($file) - 3));
                }
                catch (Exception $e) { }
            }
        }
    }
}

function F51DRemoveOldFiles($dir)
{
    foreach(glob($dir.'/*') as $file) {
        if(is_dir($file))
        {
            F51DRemoveOldFiles($file);
        }
        else
        {
            if(substr($file, strlen($file) - 3, strlen($file)) == "old")
            {
                try {
                    unlink($file);
                }
                catch (Exception $e) { }
            }
        }
    }
}

function set51DegreesOptions() {
	add_option('show_51DMeta', 'false');
	add_option('enable_51DUDP', 'false');
}

function unset51DegreesOptions() {
	delete_option('show_51DMeta');
	delete_option('enable_51DUDP');
}

register_activation_hook(__FILE__,'set51DegreesOptions');
register_deactivation_hook(__FILE__,'unset51DegreesOptions');

function admin_51Degrees_options() {
	?>
<div class="wrap">
  <h2>51Degrees.mobi Options</h2>
  <?php

	if($_REQUEST['submit']) {
		update_51Degrees_options();
	}
	print_51Degrees_form();

	?>
</div>
<?php
}

function update_51Degrees_options() {
	try {
		update_option("show_51DMeta", checkboxModifier($_REQUEST['show_51DMeta']));
		update_option("enable_51DUDP", checkboxModifier($_REQUEST['enable_51DUDP']));

	?>
<div id="message" class="updated fade">
  <p>Options saved.</p>
</div>

<?php } catch (Exception $e) { ?>

<div id="message" class="updated fade">
  <p>
    Failed to save options. Error: <?php echo $e->get_message(); ?>
  </p>
</div>

<?php
	}
}

function checkboxModifier($value) {
	if($value == 'on') {
		return true;
	}
	else {
		return false;
	}
}

function print_51Degrees_form() {
	if(get_option('show_51DMeta')){ $show_51DMeta_checked = 'checked="yes"'; }
	if(get_option('enable_51DUDP')){ $enable_51DUDP_checked = 'checked="yes"'; }
	?>
<form method="post">
  <input type="checkbox" name="show_51DMeta" <?php echo $show_51DMeta_checked; ?> /> Enable 51Degrees.mobi metadata functionality<br />
  <input type="checkbox" name="enable_51DUDP" <?php echo $enable_51DUDP_checked; ?> /> Enable 51Degrees.mobi UDP device sending functionality<br />
  <input type="submit" name="submit" value="Sumbit" /><br />
  <p>
    <div class="f51d_updating_text"></div>
    <br />
    <input type="button" value="Update to Latest" onclick="F51DStartUpdate()" />
  </p>
</form>
<form method="post">

</form>
<?php
}

function modify_51D_menu() {
	add_options_page('51Degrees.mobi','51Degrees.mobi','manage_options', __FILE__,'admin_51Degrees_options');
}

add_action('admin_menu', 'modify_51D_menu');

?>