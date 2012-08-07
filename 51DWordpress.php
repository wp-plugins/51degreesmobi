<<<<<<< .mine
<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0.
 *
 * If a copy of the MPL was not distributed with this file, You can obtain one
 * at http://mozilla.org/MPL/2.0/.
 *
 * This Source Code Form is "Incompatible With Secondary Licenses", as defined
 * by the Mozilla Public License, v. 2.0.
 */
/*
	Plugin Name: 51Degrees.mobi Mobile Device Detector
	Plugin URI: http://51degrees.mobi/Support/Documentation/PHP/Wordpress.aspx
	Description: Uses the 51Degrees.mobi.php solution to find out what device the end user is viewing your site on. You can access the variable using $_51D. See the documentation for full information on how to use.
	Version: 2.1.10.3
	Author: 51Degrees.mobi
	Author URI: http://51Degrees.mobi
	License: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0. If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/. This Source Code Form is "Incompatible With Secondary Licenses", as defined by the Mozilla Public License, v. 2.0.
*/

include_once('51Degrees.mobi.php');
include_once('51Degrees.mobi.metadata.php');

if (get_option('51d_enable_udp')) {
	include_once('51Degrees.mobi.usage.php');
}

function _51d_print_javascript() {
	?>
<script type="text/javascript" >

  function toggleRow(ev)
  {
  var valuesSelect = document.getElementById(ev.srcElement.id.replace('check_', '51d_cond_'));
  if(valuesSelect != null)
  {
  if(ev.srcElement.checked)
  {
  valuesSelect.removeAttribute("disabled");
  }
  else
  {
  valuesSelect.disabled = "disabled";
  }
  }
  else
  console.log('no values object with that name.');
  }

  function radioOnClick() {
  var tr = document.getElementById('theme_radio');
  if(tr.checked == true)
  {
  document.getElementById('theme_list').removeAttribute('disabled');
  document.getElementById('redirect_text').setAttribute('disabled', 'disabled');
  }
  else if(document.getElementById('redirect_radio').checked == true)
  {
  document.getElementById('theme_list').setAttribute('disabled', 'disabled');
  document.getElementById('redirect_text').removeAttribute('disabled');
  }
  }

  function toggleAdvanced() {
  var adv_prop = document.getElementById('advanced_properties');
  var adv_toggle = document.getElementById('adv_toggle');
  if(adv_prop.style.display != 'none')
  {
  adv_prop.style.display = 'none';
  adv_toggle.innerHTML = '+';
  }
  else
  {
  adv_prop.style.display = 'block';
  adv_toggle.innerHTML = '-';
  }
  }

  function getDataUpdate() {

  // disabling button
  var updateButton = document.getElementById("51d_update_button");
  updateButton.setAttribute("disabled", "disabled");
  updateButton.style.background = "#9D9D9D";
  updateButton.style.borderColor = "#9D9D9D";
  updateButton.innerHTML = "Updating...";

  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
  if(ajax.readyState == 4 && ajax.status == 200)
  {
  // enabling button
  updateButton.removeAttribute("disabled");
  updateButton.removeAttribute("style");
  updateButton.innerHTML = "Update";
  //console.log(ajax.responseXML);

  var message = ajax.responseText.match('<div id="message">.+</div>')[0];
  var finalMessage = message.replace(new RegExp('<div id="message">', 'gi'), '').replace(new RegExp('</div>', 'gi'), '');
  alert(finalMessage);
  document.getElementById("update_status").innerHTML = "Done.";
  }
  }
  ajax.overrideMimeType('text/html');
  ajax.open('GET', '<?php echo add_query_arg( "51D_UpdateData", "True"); ?>', true);
  ajax.send();
  }

  function checkRedirectText() {
  console.log(document.getElementById("theme_list").value);
  console.log(document.getElementById("redirect_text").style.display);
  if(document.getElementById("theme_list").value == "_redirect")
  document.getElementById("redirect_text").style.display = "inline";
  else
  document.getElementById("redirect_text").style.display = "none";
  }
</script>
<?php
}

function _51d_set_options() {
	add_option('51d_enable_udp', false);
}

function _51d_unset_options() {
	delete_option('51d_enable_udp');
	delete_option('51DFilterStore');
}

register_activation_hook(__FILE__,'_51d_set_options');
register_deactivation_hook(__FILE__,'_51d_unset_options');

function _51d_submit_settings()
{
	update_option('51d_enable_udp', isset($_POST['51d_enable_udp']));
	header('location:'. $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);die("blah");
}

function _51d_submit_filter()
{
	$updatedFilter = array();

	if(isset($_POST['_51D_Theme']))
	{
		if($_POST['_51D_Theme'] == '_redirect')
		{
			$updatedFilter['action'] = 'redirect';
			$updatedFilter['url'] = $_POST['_51D_RedirectionUrl'];
			unset($_POST['_51D_RedirectionUrl']);
		}
		else
		{
			$updatedFilter['action'] = 'theme';
			$updatedFilter['theme'] = get_theme($_POST['_51D_Theme']);
		}
		unset($_POST['_51D_Theme']);
	}

	$conditions = array();
	foreach($_POST as $key => $value)
	{
		if(substr($key, 0, 10) == "_51d_cond_")
			$conditions[str_replace("_51d_cond_", "", $key)] = $value;
	}

	$updatedFilter['conditions'] = $conditions;

	$filters = get_option('51DFilterStore');
	if($filters == false)
		$filters = array();

	if($_POST['_51D_FilterName'] != $_POST['_51D_SubmitFilter']) // renaming filter
	{
		$newFilters = array();
		foreach($filters as $key => $filter)
		{
			if($key == $_POST['_51D_SubmitFilter'])
				$newFilters[$_POST['_51D_FilterName']] = $filter;
			else
				$newFilters[$key] = $filter;
		}
		$filters = $newFilters;
	}
	else
		$filters[$_POST['_51D_FilterName']] = $updatedFilter;
	update_option('51DFilterStore', $filters);
	header('Location: '.add_query_arg( 'filter', $_POST['_51D_FilterName'] ));
}

function _51d_loadFilters($currentTheme, $tag) {
	$theme = _51d_checkFilters();
	if(empty($theme))
		return $currentTheme;
	return $theme[$tag];
}

function _51d_checkFilters() {
	if(isset($_SESSION['_51d_themeName']))
		return $_SESSION['_51d_themeName'];

	if(!isset($GLOBALS['_51d_themeName']))
	{
		// get 51d data from global scope
		global $_51d;
		//checking device filters
		$filters = get_option('51DFilterStore');
		if($filters != false)
		{
			foreach($filters as $filter)
			{
				if(isset($filter['conditions']))
				{
					$validConditions = true;
					// check all conditions
					foreach($filter['conditions'] as $key => $condition)
					{
						if($condition == 'True' && $_51d[$key] != $condition)
						{
							$validConditions = false;
							break;
						}
					}
					if($validConditions == true && isset($filter['action']))
					{
						echo '<!-- Filter action'.$filter['action'].' -->';
						if($filter['action'] == 'theme')
						{
							//change theme
							$theme = get_theme($filter['theme']['Title']);

							if(!empty($theme))
							{
								$GLOBALS['_51d_themeName'] = $theme;
								$_SESSION['_51d_theme_name'] = $theme;
								return $theme;
							}
						}
						else if($filter['action'] == 'redirect' && isset($filter['url']))
						{
							header('Location: '.$filter['url']);
							exit;
						}
						break;
					}
				}
			}
		} // no filters, stored, carry on

		$GLOBALS['_51d_themeName'] = false;
		$_SESSION['_51d_theme_name'] = false;
		return false;
	}
	else
		return $GLOBALS['_51d_themeName'];
}

function _51d_print_admin_panel() {
	_51d_print_javascript();


	?>
<div class="wrap">
  <h2>51Degrees.mobi Device Detection</h2>
  <form id="_51DFilterMenu" class="update-nav-menu" method="post">
    <?php
	_51d_print_filters();
	echo '</form>';
	echo '<br/>';
	_51d_print_settings();
	echo '<br />';
	_51d_print_license_section();
	?>

  </div>
<?php
}

/**
	Creates a new filter, saves with the other filters and returns its name.
*/
function _51d_create_filter() {
	$filters = get_option('51DFilterStore');
	if($filters == false)
		$filters = array();

	$newFilter = array();
	$filterCount = count($filters);
	do
	{
		$filterCount++;
		$name = 'Filter '.$filterCount; // making sure that a filter with a new name is generated.
	} while(isset($filters[$name]));
	$newFilter['url'] = false;
	$filters[$name] = $newFilter;
	update_option('51DFilterStore', $filters);
	return $name;
}

function _51d_update_settings() {
	try {
		update_option("enable_51DUDP", $_REQUEST['enable_51DUDP'] == true);

		?>
<div id="message" class="updated fade">
  <p>Options saved.</p>
</div>

<?php
	} catch (Exception $e) {
		?>

<div id="message" class="updated fade">
  <p>
    Failed to save options. Error: <?php echo $e->get_message();
		?>
  </p>
</div>

<?php
	}
}

function _51d_print_basic_properties($filter) { ?>
<div id="_51DDeviceConditions" style="border:1px solid; background-color:#ffffff; padding: 3px;">
  <?php
	global $_51d_meta_data;

	if (isset($filter['conditions']))
		$conditions = $filter['conditions'];
	else
		$conditions = array();

	// add a key and value here to add a property to the default field.
	$properties = array(
    "Mobile" => "IsMobile",
    "Small Screen Phone" => "IsSmallScreen",
    "SmartPhone" => "IsSmartPhone",
    "Tablet" => "IsTablet",
    "Console" => "IsConsole",
    "EReader" => "IsEReader");

	$propertyDescriptions = array(
    "IsMobile" => "Indicates that the device's primary data connection is wireless and is designed to operate mostly from battery power (ie a mobile phone, smart phone or tablet etc)",
    "IsSmallScreen" => "Is a mobile device with a screen size smaller than 2 1/2 inches.",
    "IsSmartPhone" => "Is a mobile device with a screen size larger then 2 1/2 inches running a modern smart phone operating system including Android, iOS, BlackBerry or Windows Phone.",
		"IsTablet" => "The manufacturer of the device sells the device primarily as a tablet.",
		"IsConsole" => "Indicates if the device is neither a phone or a computer/tablet (ie a games console or television).",
		"IsEReader" => "Indicates if the device is an e-reader.");

	// this array will contain default properties that are not in the current data set
	$absentProp = array();

	foreach($properties as $name => $property)
	{
		if(isset($_51d_meta_data[$property]))
		{
			echo '<input type="checkbox" value="True" name="_51d_cond_'.$property.'"';
			if(isset($conditions[$property]) && $conditions[$property] == true)
				echo 'checked="checked"';
			echo '/> '.$name.'<p class="description">'.$propertyDescriptions[$property].'</p>';
		}
		else
			$absentProp[$name] = $property;
	}

	if(count($absentProp) > 0)
	{
		?>
  <br />
  <div id="disabled_properties" style="background-color: #F3F781;border-color: #000000;border-width:0.1em;border-style:solid; padding: 1em;">
    <p style="font-size:1.2em; font-weight:bold; color: red;">
      <a href="http://51degrees.mobi/Purchase/Wordpress.aspx" title="Upgrade to enable additional features." target="_blank">Enable these Options</a>
    </p>

    <?php

		foreach($absentProp as $name => $property)
		{
			echo '<input type="checkbox" disabled="disabled" /> '.$name;
			echo '<p class="description">'.$propertyDescriptions[$property].'</p>';
		}
	}
}

function _51d_print_license_section()
{
	?>
    <div id="licensing" style="margin-left: 12px">
      <form id="_51d_licensing" style="display:inline" method="post">
        <h3>Device Data Licence Key</h3>
        <br />
        <?php
	$lic_filename = dirname(__file__)."\license.lic";

	if(file_exists($lic_filename))
		$license = file_get_contents($lic_filename);
	?>
        License key: <input style="width:70%" name="_51d_license_text" type="text"
	value=""<?php if(isset($license)) echo $license; else echo "Enter a license key here."; ?>" onclick="return confirm('This will overwrite any previously saved key.'" />
        <br />
        <button name="_51d_submit_license" class="button-primary" type="submit">Save</button>
      </form>
      <button id="51d_update_button" name="_51d_get_update" type="button" class="button-primary" onclick="getDataUpdate()">Update</button>
      <br />
      <div id="update_status" />
    </div>
    <?php
}

function _51d_print_filter_tab($index, $filters) {
	global $keys;
	$key = $keys[$index];
	$filter = $filters[$key];

	?>

    <div id="_51DFilterTab" class="menu-edit" style="border-color: #DFDFDF;
	-webkit-border-radius: 3px; border-radius: 3px; border-width: 1px; border-style: solid;">

      <div id="nav-menu-header">

        <table style="width:100%; height:100%; border-spacing: 0;">
          <th style="width:20%"/>
          <th style="width:80%"/>
          <tr>
            <td>
            </td>
            <td>
              <h3 style="font-size:1.5em">Device Type</h3>
            </td>
          </tr>
          <tr>
            <td>
              When a device is:
            </td>
            <td>
              <h3>Basic Properties</h3>
              <?php _51d_print_basic_properties($filter); ?>
            </td>
          </tr>
          <tr>
            <td>
              Or has all of the selected features:
            </td>
            <td>
              <h3>
                Advanced Properties <a id="adv_toggle" onclick="toggleAdvanced()">+</a>
              </h3>
              <div id="advanced_properties" style="display:none">

                <div id="advanced_properties_table" style="height:400px; border-color: #000000; border: 1px solid; overflow-y:scroll; background-color:#ffffff;">
                  <!-- makes the property values appear more presentable -->
                  <style type="text/css">
                    .maxWidth{ width: 100%; }
                  </style>

                  <table style="width: 99%; border-spacing: 0px">
                    <th style="background-color:#dddddd;">Enabled</th>
                    <th style="width: 50%; background-color:#dddddd;">Property</th>
                    <th style="width: 50%; background-color:#dddddd;">Value</th>
                    <?php
	global $_51d_meta_data;
	if(isset($_51d_meta_data))
	{
		$toggle = false;
		foreach($_51d_meta_data as $dataKey => $data)
		{
			if($toggle)
				echo '<tr style="background-color:#dddddd;">';
			else
				echo '<tr style="background-color:#ffffff;">';
			$toggle = !$toggle;
			echo '<td><input id="check_'.$dataKey.'" type="checkbox" onclick="toggleRow(event)"/></td>';
			echo '<td title="'.$data['Description'].'">'.$dataKey.'</td>';
			echo '<td>';
			echo '<select id="51d_cond_'.$dataKey.'" class="maxWidth" disabled="disabled">';
			foreach ($data['Values'] as $valueKey => $value)
			{
				echo '<option value="'.$valueKey.'">'.$valueKey.'</option>';
			}
			echo '</select>';
			echo '</td>';
			echo '</tr>';
		}
	}
	else
		echo '<td>No properties found. Your 51Degrees.mobi installation maybe missing some files.</td>';

	?>
                  </table>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <h3 style="font-size:1.5em">Action</h3>
            </td>
          </tr>
          <tr>
            <td>
              Then change theme to
            </td>
            <td>

              <select id="theme_list" name="_51D_Theme" style="width:40%" onclick="checkRedirectText()">
                <?php

		$themes = get_themes();
		foreach($themes as $theme) {
			echo '<option';
			if(isset($filter['theme']['Name']) && $filter['theme']['Name'] == $theme['Name'])
				echo ' selected="selected"';
			echo ' value="'.$theme['Name'].'">';
			echo $theme['Name'];
			echo '</option>';
		}
		echo '<option value="_redirect"';
		if(isset($filter['action']) && $filter['action'] == 'redirect')
				echo ' selected="selected"';
		echo '>[Redirect to url]</option>';

	?>
              </select>

              <input id="redirect_text" type="text" name="_51D_RedirectionUrl" style="width:40%;display:none" <?php if(isset($filter['url'])) echo ' value="'.$filter['url'].'"'; ?> />
              <script text="javascript">checkRedirectText();</script>
              <p style="font-size:1.2em; font-weight:bold; color: red;">
                <a href="http://51degrees.mobi/Purchase/Wordpress/Themes.aspx" target="_blank" title="Find more mobile aware themes">Get more Themes</a>
              </p>
            </td>
          </tr>
          <tr>
            <td>
            </td>
          </tr>
        </table>
        <button name="_51D_SubmitFilter" class="button-primary" type="submit" value="<?php echo $key; ?>">Submit
        </button>
        <a href=""
          <?php echo add_query_arg('DeleteFilter', $key); ?>" onclick="return confirm('Are you sure you want to delete this filter?')">Delete
        </a>
        <?php
		if($index == 0)
			echo 'Increase Priority';
		else
			echo '<a href="'.add_query_arg('ShiftFilter', $keys[$index - 1]) .'">Increase Priority</a>';
		echo ' ';
		if($index == count($keys) - 1)
			echo 'Decrease Priority';
		else if($index == count($keys) - 2)
			echo '<a href="'.add_query_arg('ShiftFilter', '_LAST') .'">Decrease Priority</a>';
		else if($index < count($keys))
			echo '<a href="'.add_query_arg('ShiftFilter', $keys[$index + 2]) .'">Decrease Priority</a>';
	?>

      </div>
    </div>
    <?php
}

function _51d_print_filters() {
	echo '<div id="_51DFilterTabs">';

	$filters = get_option('51DFilterStore');
	if ($filters == false || count($filters) == 0)
		echo 'There are no filters. <a href="'.add_query_arg('_51D_NewFilter', 'true').'">Create one.</a>';
	else {
		$keys = array_keys($filters);
		$GLOBALS['keys'] = &$keys;
		if(isset($_GET["filter"]) && isset($filters[$_GET["filter"]]))
			$selectedTab = $_GET["filter"];
		else
			$selectedTab = $keys[0];
	?>
    <div class="nav-tabs-nav" style="margin-top: 0px; margin-right: 20px; margin-bottom: 0px; margin-left: 20px;">
      <div style="nav-tabs-wrapper" style="padding: 0px; margin-right: -268px; margin-left: 0px; ">

        <script type="text/javascript">
          function dragOver(ev) {
          //ev.preventDefault();
          console.log(ev);
          ev.toElement.style.width = "100px";
          }

          function dragStart(ev) {
          console.log(ev);
          ev.toElement.style.display = "hidden";
          }

        </script>
        <?php

		foreach($keys as $index => $key)
		{
			if($selectedTab == $key)
			{
				echo '<span draggable="true" class="nav-tab nav-tab-active"><input style="height:18px; width:80px" type="text" name="_51D_FilterName" value="'.$key.'"/></span>';
				$keyIndex = $index;
			}
			else
			{
				echo '<a href="'.add_query_arg('filter', $key).'" draggable="true" ondragstart="dragStart(event)" class="nav-tab">'.$key.'</a>';
			}
			echo '<div class="tab_spacers" style="width:5px; display:inline-block" ondragover="dragOver(event)"></div>';
		}
		echo '<a href="'.add_query_arg('_51D_NewFilter', 'true').'" class="nav-tab menu-add-new">';
		echo '<abbr title="Add Filter">+</abbr>';
		echo '</a>';

		echo '</div>';
		echo '</div>';//end of tabs
		_51d_print_filter_tab($keyIndex, $filters);
	}

	echo '</div>';
}

function _51d_print_settings() {
global $wp_version;
	if(get_option('enable_51DUDP'))
		$udp_enabled = 'checked="checked"';
	?>

        <div id="_51DGlobalSettings" style="margin-left: 12px" >
          <h3>Global Settings</h3>
          <p>These settings control 51Degrees.mobi Detection on all pages in the site.</p>
          <form id="_51DGlobalSettingsMenu" method="post">

            <p>
              <input type="checkbox" name="51d_enable_udp" <?php echo $udp_enabled; ?> />
              Share usage data with 51Degrees.mobi. <a href="http://51degrees.mobi/Support/FAQs/UsageData.aspx">Learn More</a>
            </p>
            <p>
              <button name="_51D_SubmitGlobalSettings" class="button-primary" type="submit" value=""
                <?php echo $key; ?>">Submit
              </button>
            </p>
          </form>
        </div>
        <?php
}

function _51d_add_admin_menu() {
	$options_page = add_options_page('51Degrees.mobi','51Degrees.mobi','manage_options', __FILE__,'_51d_print_admin_panel');

	add_action('load-'.$options_page, '_51d_admin_menu_preprocess');
}

function _51d_admin_menu_preprocess() {
	if(isset($_GET['51D_UpdateData']) && $_GET['51D_UpdateData'] == 'True')
	{
		require('51DUpdate.php');
		exit;
	}

=======
<?php
/**
 * This Source Code Form is subject to the terms of the Mozilla Public License,
 * v. 2.0.
 *
 * If a copy of the MPL was not distributed with this file, You can obtain one
 * at http://mozilla.org/MPL/2.0/.
 *
 * This Source Code Form is "Incompatible With Secondary Licenses", as defined
 * by the Mozilla Public License, v. 2.0.
 */
/*
	Plugin Name: 51Degrees.mobi Mobile Device Detector
	Plugin URI: http://51degrees.mobi/Support/Documentation/PHP/Wordpress.aspx
	Description: Uses the 51Degrees.mobi.php solution to find out what device the end user is viewing your site on. You can access the variable using $_51D. See the documentation for full information on how to use.
	Version: 2.1.10.3
	Author: 51Degrees.mobi
	Author URI: http://51Degrees.mobi
	License: This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0. If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/. This Source Code Form is "Incompatible With Secondary Licenses", as defined by the Mozilla Public License, v. 2.0.
*/

include_once('51Degrees.mobi.php');
include_once('51Degrees.mobi.metadata.php');

if (get_option('51d_enable_udp')) {
	include_once('51Degrees.mobi.usage.php');
}

function _51d_print_javascript() {
	?>
<script type="text/javascript" >

  function toggleRow(ev)
  {
  var valuesSelect = document.getElementById(ev.srcElement.id.replace('check_', '51d_cond_'));
  if(valuesSelect != null)
  {
  if(ev.srcElement.checked)
  {
  valuesSelect.removeAttribute("disabled");
  }
  else
  {
  valuesSelect.disabled = "disabled";
  }
  }
  else
  console.log('no values object with that name.');
  }

  function radioOnClick() {
  var tr = document.getElementById('theme_radio');
  if(tr.checked == true)
  {
  document.getElementById('theme_list').removeAttribute('disabled');
  document.getElementById('redirect_text').setAttribute('disabled', 'disabled');
  }
  else if(document.getElementById('redirect_radio').checked == true)
  {
  document.getElementById('theme_list').setAttribute('disabled', 'disabled');
  document.getElementById('redirect_text').removeAttribute('disabled');
  }
  }

  function toggleAdvanced() {
  var adv_prop = document.getElementById('advanced_properties');
  var adv_toggle = document.getElementById('adv_toggle');
  if(adv_prop.style.display != 'none')
  {
  adv_prop.style.display = 'none';
  adv_toggle.innerHTML = '+';
  }
  else
  {
  adv_prop.style.display = 'block';
  adv_toggle.innerHTML = '-';
  }
  }

  function getDataUpdate() {

  // disabling button
  var updateButton = document.getElementById("51d_update_button");
  updateButton.setAttribute("disabled", "disabled");
  updateButton.style.background = "#9D9D9D";
  updateButton.style.borderColor = "#9D9D9D";
  updateButton.innerHTML = "Updating...";

  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
  if(ajax.readyState == 4 && ajax.status == 200)
  {
  // enabling button
  updateButton.removeAttribute("disabled");
  updateButton.removeAttribute("style");
  updateButton.innerHTML = "Update";
  //console.log(ajax.responseXML);

  var message = ajax.responseText.match('<div id="message">.+</div>')[0];
  var finalMessage = message.replace(new RegExp('<div id="message">', 'gi'), '').replace(new RegExp('</div>', 'gi'), '');
  alert(finalMessage);
  document.getElementById("update_status").innerHTML = "Done.";
  }
  }
  ajax.overrideMimeType('text/html');
  ajax.open('GET', '<?php echo add_query_arg( "51D_UpdateData", "True"); ?>', true);
  ajax.send();
  }

  function checkRedirectText() {
  console.log(document.getElementById("theme_list").value);
  console.log(document.getElementById("redirect_text").style.display);
  if(document.getElementById("theme_list").value == "_redirect")
  document.getElementById("redirect_text").style.display = "inline";
  else
  document.getElementById("redirect_text").style.display = "none";
  }
</script>
<?php
}

function _51d_set_options() {
	add_option('51d_enable_udp', false);
}

function _51d_unset_options() {
	delete_option('51d_enable_udp');
	delete_option('51DFilterStore');
}

register_activation_hook(__FILE__,'_51d_set_options');
register_deactivation_hook(__FILE__,'_51d_unset_options');

function _51d_submit_settings()
{
	update_option('51d_enable_udp', isset($_POST['51d_enable_udp']));
	header('location:'. $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);die("blah");
}

function _51d_submit_filter()
{
	$updatedFilter = array();

	if(isset($_POST['_51D_Theme']))
	{
		if($_POST['_51D_Theme'] == '_redirect')
		{
			$updatedFilter['action'] = 'redirect';
			$updatedFilter['url'] = $_POST['_51D_RedirectionUrl'];
			unset($_POST['_51D_RedirectionUrl']);
		}
		else
		{
			$updatedFilter['action'] = 'theme';
			$updatedFilter['theme'] = get_theme($_POST['_51D_Theme']);
		}
		unset($_POST['_51D_Theme']);
	}

	$conditions = array();
	foreach($_POST as $key => $value)
	{
		if(substr($key, 0, 10) == "_51d_cond_")
			$conditions[str_replace("_51d_cond_", "", $key)] = $value;
	}

	$updatedFilter['conditions'] = $conditions;

	$filters = get_option('51DFilterStore');
	if($filters == false)
		$filters = array();

	if($_POST['_51D_FilterName'] != $_POST['_51D_SubmitFilter']) // renaming filter
	{
		$newFilters = array();
		foreach($filters as $key => $filter)
		{
			if($key == $_POST['_51D_SubmitFilter'])
				$newFilters[$_POST['_51D_FilterName']] = $filter;
			else
				$newFilters[$key] = $filter;
		}
		$filters = $newFilters;
	}
	else
		$filters[$_POST['_51D_FilterName']] = $updatedFilter;
	update_option('51DFilterStore', $filters);
	header('Location: '.add_query_arg( 'filter', $_POST['_51D_FilterName'] ));
}

function _51d_loadFilters($currentTheme, $tag) {
	$theme = _51d_checkFilters();
	if(empty($theme))
		return $currentTheme;
	return $theme[$tag];
}

function _51d_checkFilters() {
	if(isset($_SESSION['_51d_themeName']))
		return $_SESSION['_51d_themeName'];

	if(!isset($GLOBALS['_51d_themeName']))
	{
		// get 51d data from global scope
		global $_51d;
		//checking device filters
		$filters = get_option('51DFilterStore');
		if($filters != false)
		{
			foreach($filters as $filter)
			{
				if(isset($filter['conditions']))
				{
					$validConditions = true;
					// check all conditions
					foreach($filter['conditions'] as $key => $condition)
					{
						if($condition == 'True' && $_51d[$key] != $condition)
						{
							$validConditions = false;
							break;
						}
					}
					if($validConditions == true && isset($filter['action']))
					{
						echo '<!-- Filter action'.$filter['action'].' -->';
						if($filter['action'] == 'theme')
						{
							//change theme
							$theme = get_theme($filter['theme']['Title']);

							if(!empty($theme))
							{
								$GLOBALS['_51d_themeName'] = $theme;
								$_SESSION['_51d_theme_name'] = $theme;
								return $theme;
							}
						}
						else if($filter['action'] == 'redirect' && isset($filter['url']))
						{
							header('Location: '.$filter['url']);
							exit;
						}
						break;
					}
				}
			}
		} // no filters, stored, carry on

		$GLOBALS['_51d_themeName'] = false;
		$_SESSION['_51d_theme_name'] = false;
		return false;
	}
	else
		return $GLOBALS['_51d_themeName'];
}

function _51d_print_admin_panel() {
	_51d_print_javascript();


	?>
<div class="wrap">
  <h2>51Degrees.mobi Device Detection</h2>
  <form id="_51DFilterMenu" class="update-nav-menu" method="post">
    <?php
	_51d_print_filters();
	echo '</form>';
	echo '<br/>';
	_51d_print_settings();
	echo '<br />';
	_51d_print_license_section();
	?>

  </div>
<?php
}

/**
	Creates a new filter, saves with the other filters and returns its name.
*/
function _51d_create_filter() {
	$filters = get_option('51DFilterStore');
	if($filters == false)
		$filters = array();

	$newFilter = array();
	$filterCount = count($filters);
	do
	{
		$filterCount++;
		$name = 'Filter '.$filterCount; // making sure that a filter with a new name is generated.
	} while(isset($filters[$name]));
	$newFilter['url'] = false;
	$filters[$name] = $newFilter;
	update_option('51DFilterStore', $filters);
	return $name;
}

function _51d_update_settings() {
	try {
		update_option("enable_51DUDP", $_REQUEST['enable_51DUDP'] == true);

		?>
<div id="message" class="updated fade">
  <p>Options saved.</p>
</div>

<?php
	} catch (Exception $e) {
		?>

<div id="message" class="updated fade">
  <p>
    Failed to save options. Error: <?php echo $e->get_message();
		?>
  </p>
</div>

<?php
	}
}

function _51d_print_basic_properties($filter) { ?>
<div id="_51DDeviceConditions" style="border:1px solid; background-color:#ffffff; padding: 3px;">
  <?php
	global $_51d_meta_data;

	if (isset($filter['conditions']))
		$conditions = $filter['conditions'];
	else
		$conditions = array();

	// add a key and value here to add a property to the default field.
	$properties = array(
    "Mobile" => "IsMobile",
    "Small Screen Phone" => "IsSmallScreen",
    "SmartPhone" => "IsSmartPhone",
    "Tablet" => "IsTablet",
    "Console" => "IsConsole",
    "EReader" => "IsEReader");

	$propertyDescriptions = array(
    "IsMobile" => "Indicates that the device's primary data connection is wireless and is designed to operate mostly from battery power (ie a mobile phone, smart phone or tablet etc)",
    "IsSmallScreen" => "Is a mobile device with a screen size smaller than 2 1/2 inches.",
    "IsSmartPhone" => "Is a mobile device with a screen size larger then 2 1/2 inches running a modern smart phone operating system including Android, iOS, BlackBerry or Windows Phone.",
		"IsTablet" => "The manufacturer of the device sells the device primarily as a tablet.",
		"IsConsole" => "Indicates if the device is neither a phone or a computer/tablet (ie a games console or television).",
		"IsEReader" => "Indicates if the device is an e-reader.");

	// this array will contain default properties that are not in the current data set
	$absentProp = array();

	foreach($properties as $name => $property)
	{
		if(isset($_51d_meta_data[$property]))
		{
			echo '<input type="checkbox" value="True" name="_51d_cond_'.$property.'"';
			if(isset($conditions[$property]) && $conditions[$property] == true)
				echo 'checked="checked"';
			echo '/> '.$name.'<p class="description">'.$propertyDescriptions[$property].'</p>';
		}
		else
			$absentProp[$name] = $property;
	}

	if(count($absentProp) > 0)
	{
		?>
  <br />
  <div id="disabled_properties" style="background-color: #F3F781;border-color: #000000;border-width:0.1em;border-style:solid; padding: 1em;">
    <p style="font-size:1.2em; font-weight:bold; color: red;">
      <a href="http://51degrees.mobi/Purchase/Wordpress.aspx" title="Upgrade to enable additional features." target="_blank">Enable these Options</a>
    </p>

    <?php

		foreach($absentProp as $name => $property)
		{
			echo '<input type="checkbox" disabled="disabled" /> '.$name;
			echo '<p class="description">'.$propertyDescriptions[$property].'</p>';
		}
	}
}

function _51d_print_license_section()
{
	?>
    <div id="licensing" style="margin-left: 12px">
      <form id="_51d_licensing" style="display:inline" method="post">
        <h3>Device Data Licence Key</h3>
        <br />
        <?php
	$lic_filename = dirname(__file__)."\license.lic";

	if(file_exists($lic_filename))
		$license = file_get_contents($lic_filename);
	?>
        License key: <input style="width:70%" name="_51d_license_text" type="text"
	value=""<?php if(isset($license)) echo $license; else echo "Enter a license key here."; ?>" onclick="return confirm('This will overwrite any previously saved key.'" />
        <br />
        <button name="_51d_submit_license" class="button-primary" type="submit">Save</button>
      </form>
      <button id="51d_update_button" name="_51d_get_update" type="button" class="button-primary" onclick="getDataUpdate()">Update</button>
      <br />
      <div id="update_status" />
    </div>
    <?php
}

function _51d_print_filter_tab($index, $filters) {
	global $keys;
	$key = $keys[$index];
	$filter = $filters[$key];

	?>

    <div id="_51DFilterTab" class="menu-edit" style="border-color: #DFDFDF;
	-webkit-border-radius: 3px; border-radius: 3px; border-width: 1px; border-style: solid;">

      <div id="nav-menu-header">

        <table style="width:100%; height:100%; border-spacing: 0;">
          <th style="width:20%"/>
          <th style="width:80%"/>
          <tr>
            <td>
            </td>
            <td>
              <h3 style="font-size:1.5em">Device Type</h3>
            </td>
          </tr>
          <tr>
            <td>
              When a device is:
            </td>
            <td>
              <h3>Basic Properties</h3>
              <?php _51d_print_basic_properties($filter); ?>
            </td>
          </tr>
          <tr>
            <td>
              Or has all of the selected features:
            </td>
            <td>
              <h3>
                Advanced Properties <a id="adv_toggle" onclick="toggleAdvanced()">+</a>
              </h3>
              <div id="advanced_properties" style="display:none">

                <div id="advanced_properties_table" style="height:400px; border-color: #000000; border: 1px solid; overflow-y:scroll; background-color:#ffffff;">
                  <!-- makes the property values appear more presentable -->
                  <style type="text/css">
                    .maxWidth{ width: 100%; }
                  </style>

                  <table style="width: 99%; border-spacing: 0px">
                    <th style="background-color:#dddddd;">Enabled</th>
                    <th style="width: 50%; background-color:#dddddd;">Property</th>
                    <th style="width: 50%; background-color:#dddddd;">Value</th>
                    <?php
	global $_51d_meta_data;
	if(isset($_51d_meta_data))
	{
		$toggle = false;
		foreach($_51d_meta_data as $dataKey => $data)
		{
			if($toggle)
				echo '<tr style="background-color:#dddddd;">';
			else
				echo '<tr style="background-color:#ffffff;">';
			$toggle = !$toggle;
			echo '<td><input id="check_'.$dataKey.'" type="checkbox" onclick="toggleRow(event)"/></td>';
			echo '<td title="'.$data['Description'].'">'.$dataKey.'</td>';
			echo '<td>';
			echo '<select id="51d_cond_'.$dataKey.'" class="maxWidth" disabled="disabled">';
			foreach ($data['Values'] as $valueKey => $value)
			{
				echo '<option value="'.$valueKey.'">'.$valueKey.'</option>';
			}
			echo '</select>';
			echo '</td>';
			echo '</tr>';
		}
	}
	else
		echo '<td>No properties found. Your 51Degrees.mobi installation maybe missing some files.</td>';

	?>
                  </table>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td></td>
            <td>
              <h3 style="font-size:1.5em">Action</h3>
            </td>
          </tr>
          <tr>
            <td>
              Then change theme to
            </td>
            <td>

              <select id="theme_list" name="_51D_Theme" style="width:40%" onclick="checkRedirectText()">
                <?php

		$themes = get_themes();
		foreach($themes as $theme) {
			echo '<option';
			if(isset($filter['theme']['Name']) && $filter['theme']['Name'] == $theme['Name'])
				echo ' selected="selected"';
			echo ' value="'.$theme['Name'].'">';
			echo $theme['Name'];
			echo '</option>';
		}
		echo '<option value="_redirect"';
		if(isset($filter['action']) && $filter['action'] == 'redirect')
				echo ' selected="selected"';
		echo '>[Redirect to url]</option>';

	?>
              </select>

              <input id="redirect_text" type="text" name="_51D_RedirectionUrl" style="width:40%;display:none" <?php if(isset($filter['url'])) echo ' value="'.$filter['url'].'"'; ?> />
              <script text="javascript">checkRedirectText();</script>
              <p style="font-size:1.2em; font-weight:bold; color: red;">
                <a href="http://51degrees.mobi/Purchase/Wordpress/Themes.aspx" target="_blank" title="Find more mobile aware themes">Get more Themes</a>
              </p>
            </td>
          </tr>
          <tr>
            <td>
            </td>
          </tr>
        </table>
        <button name="_51D_SubmitFilter" class="button-primary" type="submit" value=""
          <?php echo $key; ?>">Submit
        </button>
        <a href=""
          <?php echo add_query_arg('DeleteFilter', $key); ?>" onclick="return confirm('Are you sure you want to delete this filter?')">Delete
        </a>
        <?php
		if($index == 0)
			echo 'Increase Priority';
		else
			echo '<a href="'.add_query_arg('ShiftFilter', $keys[$index - 1]) .'">Increase Priority</a>';
		echo ' ';
		if($index == count($keys) - 1)
			echo 'Decrease Priority';
		else if($index == count($keys) - 2)
			echo '<a href="'.add_query_arg('ShiftFilter', '_LAST') .'">Decrease Priority</a>';
		else if($index < count($keys))
			echo '<a href="'.add_query_arg('ShiftFilter', $keys[$index + 2]) .'">Decrease Priority</a>';
	?>

      </div>
    </div>
    <?php
}

function _51d_print_filters() {
	echo '<div id="_51DFilterTabs">';

	$filters = get_option('51DFilterStore');
	if ($filters == false || count($filters) == 0)
		echo 'There are no filters. <a href="'.add_query_arg('_51D_NewFilter', 'true').'">Create one.</a>';
	else {
		$keys = array_keys($filters);
		$GLOBALS['keys'] = &$keys;
		if(isset($_GET["filter"]) && isset($filters[$_GET["filter"]]))
			$selectedTab = $_GET["filter"];
		else
			$selectedTab = $keys[0];
	?>
    <div class="nav-tabs-nav" style="margin-top: 0px; margin-right: 20px; margin-bottom: 0px; margin-left: 20px;">
      <div style="nav-tabs-wrapper" style="padding: 0px; margin-right: -268px; margin-left: 0px; ">

        <script type="text/javascript">
          function dragOver(ev) {
          //ev.preventDefault();
          console.log(ev);
          ev.toElement.style.width = "100px";
          }

          function dragStart(ev) {
          console.log(ev);
          ev.toElement.style.display = "hidden";
          }

        </script>
        <?php

		foreach($keys as $index => $key)
		{
			if($selectedTab == $key)
			{
				echo '<span draggable="true" class="nav-tab nav-tab-active"><input style="height:18px; width:80px" type="text" name="_51D_FilterName" value="'.$key.'"/></span>';
				$keyIndex = $index;
			}
			else
			{
				echo '<a href="'.add_query_arg('filter', $key).'" draggable="true" ondragstart="dragStart(event)" class="nav-tab">'.$key.'</a>';
			}
			echo '<div class="tab_spacers" style="width:5px; display:inline-block" ondragover="dragOver(event)"></div>';
		}
		echo '<a href="'.add_query_arg('_51D_NewFilter', 'true').'" class="nav-tab menu-add-new">';
		echo '<abbr title="Add Filter">+</abbr>';
		echo '</a>';

		echo '</div>';
		echo '</div>';//end of tabs
		_51d_print_filter_tab($keyIndex, $filters);
	}

	echo '</div>';
}

function _51d_print_settings() {
global $wp_version;
	if(get_option('enable_51DUDP'))
		$udp_enabled = 'checked="checked"';
	?>

        <div id="_51DGlobalSettings" style="margin-left: 12px" >
          <h3>Global Settings</h3>
          <p>These settings control 51Degrees.mobi Detection on all pages in the site.</p>
          <form id="_51DGlobalSettingsMenu" method="post">

            <p>
              <input type="checkbox" name="51d_enable_udp" <?php echo $udp_enabled; ?> />
              Share usage data with 51Degrees.mobi. <a href="http://51degrees.mobi/Support/FAQs/UsageData.aspx">Learn More</a>
            </p>
            <p>
              <button name="_51D_SubmitGlobalSettings" class="button-primary" type="submit" value=""
                <?php echo $key; ?>">Submit
              </button>
            </p>
          </form>
        </div>
        <?php
}

function _51d_add_admin_menu() {
	$options_page = add_options_page('51Degrees.mobi','51Degrees.mobi','manage_options', __FILE__,'_51d_print_admin_panel');

	add_action('load-'.$options_page, '_51d_admin_menu_preprocess');
}

function _51d_admin_menu_preprocess() {
	if(isset($_GET['51D_UpdateData']) && $_GET['51D_UpdateData'] == 'True')
	{
		require('51DUpdate.php');
		exit;
	}

	//A new filter is to be created
	if(isset($_GET['_51D_NewFilter']))
	{
		$newFilter = _51d_create_filter();
		//redirect to new filter location
		$newUrl = remove_query_arg('filter');
		header( 'Location:'.str_replace('_51D_NewFilter=true', 'filter='.$newFilter, $newUrl)) ;
		exit;
	}

	if(isset($_POST["_51d_submit_license"]) && isset($_POST["_51d_license_text"]))
		file_put_contents(dirname(__FILE__)."/license.lic", $_POST["_51d_license_text"]);

	if(isset($_POST['_51D_SubmitFilter']))
	{
		_51D_Submit_Filter();
		exit;
	}

	if(isset($_POST['_51D_SubmitGlobalSettings']))
	{
		_51d_submit_settings();
		exit;
	}

	if(isset($_GET['ShiftFilter']) && isset($_GET['filter']))
	{
		$filters = get_option('51DFilterStore');

		// The key of the filter moved by the user
		$insertedFilterKey = $_GET['filter'];

		// The key of the filter that is being displaced by the insertedFilter
		$shiftedFilterKey = $_GET['ShiftFilter'];

		if($shiftedFilterKey != null && $insertedFilterKey != null)
		{
			$newFilters = array();
			foreach($filters as $key => $filter)
			{
				if($key == $insertedFilterKey)
					continue;
				if($key == $shiftedFilterKey)
					$newFilters[$insertedFilterKey] = $filters[$insertedFilterKey];
				$newFilters[$key] = $filters[$key];
			}
			if($shiftedFilterKey == '_LAST')
				$newFilters[$insertedFilterKey] = $filters[$insertedFilterKey];

			update_option('51DFilterStore', $newFilters);
			header('Location: '.remove_query_arg('ShiftFilter'));
		}
	}

	if(isset($_GET['DeleteFilter']))
	{
		$filters = get_option('51DFilterStore');
		if($filters != false)
		{
			if(isset($filters[$_GET['DeleteFilter']]))
			{
				unset($filters[$_GET['DeleteFilter']]);
				update_option('51DFilterStore', $filters);
			}
		}
		$newUrl = remove_query_arg('DeleteFilter');
		header('Location: '.remove_query_arg('filter', $newUrl));
		exit;
	}

	global $wp_version;
	$version = (float)substr($wp_version, 0, 3);

	if($version >= 3.3)
	{

		// The POSTS have been dealt with, add help to options screen
		$screen = get_current_screen();

		// Add as many tabs as necessary
		$screen->add_help_tab( array(
			'id'	=> 'property_help_overview',
			'title'	=> __('Overview'),
			'content'	=> '<p><strong>' . __('Detection') . '</strong> - ' .
                  __('This plugin contains a small database capable of determining the requesting device\'s properties ' .
                     'extremely quickly using the finger prints (technically called useragents) sent by web browsers.') . '</p>' .
                     '<p><strong>' . __('Optimisation') . '</strong> - ' .
                  __('Knowledge of the requesting device\'s capabilities enables the theme to be tailored to the device, or ' .
                     'the request redirected to another web site. For example; rules can be defined to treat small screen ' .
                     'mobile devices, smartphones and tablets differently from each other. Adverts could be optimised for the ' .
                     'smaller screens, or content limited to the essential parts of a page.') . '</p>'
		) );

		$screen->add_help_tab( array(
			'id'	=> 'property_help_rules',
			'title'	=> __('Rules'),
			'content'	=> '<p>' . __(
						'At the top of the settings page are the rules tabs. Select Create Rule to add the first rule. Clicking ' .
						'on the name will enable you to enter ' .
						'a custom name. By clicking on the + symbol, you are able to add a new tab with an additional rule. ' .
						'Rules are evaluated in order from left to right with the first one that matches the requesting device ' .
						'being used to control the response.'
						) . '</p>'
		) );

		$screen->add_help_tab( array(
			'id'	=> 'property_help_device_type',
			'title'	=> __('Device Type'),
			'content'	=> '<p>' . __(
						'Below the Rules tabs are tick boxes for basic properties that can be used to adjust which types of ' .
						'devices will be affected by the rule. Selecting one or more of these property tick boxes associates ' .
						'the rule to the device type. For example; to apply a rule to Tablet devices only you would select the ' .
						'Tablet tick box and none of the others.'
						) . '</p>' . '<p>' . __(
						'Within the Advanced Properties section it is possible to further customise the rule using more ' .
						'properties. For example; if you would like your rule to apply to devices with a screen resolution ' .
						'of 800x480 pixels then you would select the IsMobile, ScreenPixelsHeight and ScreenPixelsHeight ' .
						'tickboxes and set their Value boxes to True, 800 and 480 respectively.'
						) . '</p>'

		) );
		
		$screen->add_help_tab( array(
			'id'	=> 'property_help_action',
			'title'	=> __('Action'),
			'content'	=> '<p>' . __(
						'The basic and advanced properties section associates the rule to requesting device types. The action ' .
						'section is where you can control how the site responds to requests from matching devices. Two possible ' .
						'actions are available:'
						) .	'</p>' . '<ol>' . '<li>' .  __(
						'Change the theme to one more suited to the requesting devices capabilities. For example; on a small ' .
						'screen devices removes less important content, or displays mobile optimised adverts.'
						) . '</li>' . '<li>' . __(
						'Redirect the request to another web site more suited to the device.'
						) . '</li>' . '</ol>' . '<p>' . __(
						'A drop down list in the Action area contains a list of all the installed themes. One of these can be ' .
						'chosen for use with the rule. Alternatively the [Redirect to url] option can be selected and a text ' .
						'box will appear to the right of the drop down list. This is where a new Url can be placed to redirect ' .
						'all requests from devices matching the rule.'
						) . '</p>'
		) );
	
	}
}

function _51d_loadTemplateFilters($current) {
	return _51d_loadFilters($current, 'Template');
}

function _51d_loadStylesheetFilters($current) {
	return _51d_loadFilters($current, 'Stylesheet');
}


add_action('admin_menu', '_51d_add_admin_menu');
add_filter('template', '_51d_loadTemplateFilters');
add_filter('stylesheet', '_51d_loadStylesheetFilters');
>>>>>>> .r582887
	//A new filter is to be created
	if(isset($_GET['_51D_NewFilter']))
	{
		$newFilter = _51d_create_filter();
		//redirect to new filter location
		$newUrl = remove_query_arg('filter');
		header( 'Location:'.str_replace('_51D_NewFilter=true', 'filter='.$newFilter, $newUrl)) ;
		exit;
	}

	if(isset($_POST["_51d_submit_license"]) && isset($_POST["_51d_license_text"]))
		file_put_contents(dirname(__FILE__)."/license.lic", $_POST["_51d_license_text"]);

	if(isset($_POST['_51D_SubmitFilter']))
	{
		_51D_Submit_Filter();
		exit;
	}

	if(isset($_POST['_51D_SubmitGlobalSettings']))
	{
		_51d_submit_settings();
		exit;
	}

	if(isset($_GET['ShiftFilter']) && isset($_GET['filter']))
	{
		$filters = get_option('51DFilterStore');

		// The key of the filter moved by the user
		$insertedFilterKey = $_GET['filter'];

		// The key of the filter that is being displaced by the insertedFilter
		$shiftedFilterKey = $_GET['ShiftFilter'];

		if($shiftedFilterKey != null && $insertedFilterKey != null)
		{
			$newFilters = array();
			foreach($filters as $key => $filter)
			{
				if($key == $insertedFilterKey)
					continue;
				if($key == $shiftedFilterKey)
					$newFilters[$insertedFilterKey] = $filters[$insertedFilterKey];
				$newFilters[$key] = $filters[$key];
			}
			if($shiftedFilterKey == '_LAST')
				$newFilters[$insertedFilterKey] = $filters[$insertedFilterKey];

			update_option('51DFilterStore', $newFilters);
			header('Location: '.remove_query_arg('ShiftFilter'));
		}
	}

	if(isset($_GET['DeleteFilter']))
	{
		$filters = get_option('51DFilterStore');
		if($filters != false)
		{
			if(isset($filters[$_GET['DeleteFilter']]))
			{
				unset($filters[$_GET['DeleteFilter']]);
				update_option('51DFilterStore', $filters);
			}
		}
		$newUrl = remove_query_arg('DeleteFilter');
		header('Location: '.remove_query_arg('filter', $newUrl));
		exit;
	}

	global $wp_version;
	$version = (float)substr($wp_version, 0, 3);

	if($version >= 3.3)
	{

		// The POSTS have been dealt with, add help to options screen
		$screen = get_current_screen();

		// Add as many tabs as necessary
		$screen->add_help_tab( array(
			'id'	=> 'property_help_overview',
			'title'	=> __('Overview'),
			'content'	=> '<p><strong>' . __('Detection') . '</strong> - ' .
                  __('This plugin contains a small database capable of determining the requesting device\'s properties ' .
                     'extremely quickly using the finger prints (technically called useragents) sent by web browsers.') . '</p>' .
                     '<p><strong>' . __('Optimisation') . '</strong> - ' .
                  __('Knowledge of the requesting device\'s capabilities enables the theme to be tailored to the device, or ' .
                     'the request redirected to another web site. For example; rules can be defined to treat small screen ' .
                     'mobile devices, smartphones and tablets differently from each other. Adverts could be optimised for the ' .
                     'smaller screens, or content limited to the essential parts of a page.') . '</p>'
		) );

		$screen->add_help_tab( array(
			'id'	=> 'property_help_rules',
			'title'	=> __('Rules'),
			'content'	=> '<p>' . __(
						'At the top of the settings page are the rules tabs. Select Create Rule to add the first rule. Clicking ' .
						'on the name will enable you to enter ' .
						'a custom name. By clicking on the + symbol, you are able to add a new tab with an additional rule. ' .
						'Rules are evaluated in order from left to right with the first one that matches the requesting device ' .
						'being used to control the response.'
						) . '</p>'
		) );

		$screen->add_help_tab( array(
			'id'	=> 'property_help_device_type',
			'title'	=> __('Device Type'),
			'content'	=> '<p>' . __(
						'Below the Rules tabs are tick boxes for basic properties that can be used to adjust which types of ' .
						'devices will be affected by the rule. Selecting one or more of these property tick boxes associates ' .
						'the rule to the device type. For example; to apply a rule to Tablet devices only you would select the ' .
						'Tablet tick box and none of the others.'
						) . '</p>' . '<p>' . __(
						'Within the Advanced Properties section it is possible to further customise the rule using more ' .
						'properties. For example; if you would like your rule to apply to devices with a screen resolution ' .
						'of 800x480 pixels then you would select the IsMobile, ScreenPixelsHeight and ScreenPixelsHeight ' .
						'tickboxes and set their Value boxes to True, 800 and 480 respectively.'
						) . '</p>'

		) );

		$screen->add_help_tab( array(
			'id'	=> 'property_help_action',
			'title'	=> __('Action'),
			'content'	=> '<p>' . __(
						'The basic and advanced properties section associates the rule to requesting device types. The action ' .
						'section is where you can control how the site responds to requests from matching devices. Two possible ' .
						'actions are available:'
						) .	'</p>' . '<ol>' . '<li>' .  __(
						'Change the theme to one more suited to the requesting devices capabilities. For example; on a small ' .
						'screen devices removes less important content, or displays mobile optimised adverts.'
						) . '</li>' . '<li>' . __(
						'Redirect the request to another web site more suited to the device.'
						) . '</li>' . '</ol>' . '<p>' . __(
						'A drop down list in the Action area contains a list of all the installed themes. One of these can be ' .
						'chosen for use with the rule. Alternatively the [Redirect to url] option can be selected and a text ' .
						'box will appear to the right of the drop down list. This is where a new Url can be placed to redirect ' .
						'all requests from devices matching the rule.'
						) . '</p>'
		) );

	}
}

function _51d_loadTemplateFilters($current) {
	return _51d_loadFilters($current, 'Template');
}

function _51d_loadStylesheetFilters($current) {
	return _51d_loadFilters($current, 'Stylesheet');
}


add_action('admin_menu', '_51d_add_admin_menu');
add_filter('template', '_51d_loadTemplateFilters');
add_filter('stylesheet', '_51d_loadStylesheetFilters');
?>