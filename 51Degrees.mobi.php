<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */



$_51D = F51D();

function F51D($headers = null)
{
  if(!session_id() || !$_SESSION['51D'])
  {
    $time = microtime();$time = explode(' ', $time);$time = $time[1] + $time[0];$start = $time;
    $_51D = array("IsMobile" => "","ScreenPixelsWidth" => "","ScreenPixelsHeight" => "","LayoutEngine" => "","CssColumn" => "","CssTransitions" => "","AnimationTiming" => "","BlobBuilder" => "","CssBackground" => "","CssBorderImage" => "","CssCanvas" => "","CssColor" => "","CssFlexbox" => "","CssFont" => "","CssImages" => "","CssMediaQueries" => "","CssMinMax" => "","CssOverflow" => "","CssPosition" => "","CssText" => "","CssTransforms" => "","CssUI" => "","DataSet" => "","DataUrl" => "","DeviceOrientation" => "","FileReader" => "","FileSaver" => "","FileWriter" => "","FormData" => "","Fullscreen" => "","GeoLocation" => "","History" => "","Html-Media-Capture" => "","Html5" => "","Iframe" => "","IndexedDB" => "","Json" => "","PostMessage" => "","Progress" => "","Prompts" => "","Selector" => "","Svg" => "","TouchEvents" => "","Track" => "","Video" => "","Viewport" => "","WebWorkers" => "","Xhr2" => "","Masking" => "","Canvas" => "","Adapters" => ""); $devices = array(); $final = null; $baseLocation = substr(__FILE__, 0, strlen(__FILE__) - 18);
    include_once("Handlers/Calculations/EditDistance.php");
    include_once("Handlers/Calculations/RegexSegment.php");
    if(!is_array($headers))
    {
      if(is_string($headers))
      {
        $thisuseragent = $headers;
      }
      else
      {
        $thisuseragent = F51DGetUserAgent();
      }
    }
    else
    {
      $thisuseragent = $headers['UserAgent'];
    }
    
  
    include_once("Handlers/DetectHandler.php");
    $handlers = F51DetectHandlers($thisuseragent);
  
    foreach ($handlers as $handlerGoTo => $confidence) {
      include_once("Handlers/".$handlerGoTo.".php");
      $device = call_user_func("_H".$handlerGoTo, $thisuseragent);
      if($device != null){$devices[] = $device;}
    }
  
    if(isset($devices[0]))
    {
      $finalDevices = array();
      foreach ($devices as $device) {
        foreach ($device as $fin) {
        $finalDevices[] = $fin;
        }
      }
      if(count($finalDevices) == 1)
      {
        $final = $finalDevices[0];
      }
      else
      {
        include_once("Handlers/Calculations/FinalMatcher.php");
        $final = F51DFinalMatcher($thisuseragent, $finalDevices);
      }
    }
    if(isset($final))
    {
      $xmlDoc = new DOMDocument();
      for($i = 0; $i < 4; $i++)
      {
        $xmlDoc->load($baseLocation."Profiles/".$final[$i].".xml");
        $x = $xmlDoc->documentElement;
        foreach($x->childNodes as $item)
        {
          if($item->nodeName != "#text")
          {
            if(is_array($_51D[$item->nodeName]))
            {
              $_51D[$item->nodeName] = explode('|', $item->nodeValue);
            }
            else
            {
              $_51D[$item->nodeName] = $item->nodeValue;
            }
          }
        }
      }
      $time = microtime(); $time = explode(' ', $time); $time = $time[1] + $time[0]; $finish = $time;
      $total_time = round(($finish - $start), 4);
      $_51D['DetectionTime'] = $total_time * 1000;
      $_51D['DeviceID'] = $final[0].'-'.$final[1].'-'.$final[2].'-'.$final[3];
      $_51D['ThisUserAgent'] = $final[4];
    }
    if(session_id())
    {
      $_SESSION['51D'] = $_51D;
    }
  }else{$_51D = $_SESSION['51D'];if($_51D['DetectionTime'] != 0.00){$_51D['DetectionTime']=0.00;$_SESSION['51D']=$_51D;}}
  return $_51D;
}
function F51DGetUserAgent()
{
  if(function_exists('getallheaders'))
  {
    $headers = getallheaders();
    $headerUA = "User-Agent";
    $transcoderUA = array("x-Device-User-Agent", "X-Device-User-Agent", "X-OperaMini-Phone-UA");
    if(isset($headers[$headerUA]))
    {
      return trim($headers[$headerUA]);
    }
    else
    {
      foreach($transcoderUA as $transUA)
      {
        if(isset($headers[$transUA]))
        {
        return trim($headers[$transUA]);
        }
      }
    }
    return "";
  }
  else
  {
    if(isset($_SERVER['HTTP_X_DEVICE_USER_AGENT']))
      {
        return $_SERVER['HTTP_X_DEVICE_USER_AGENT'];
      }
      if(isset($_SERVER['HTTP_X_OPERAMINI_PHONE_UA']))
      {
        return $_SERVER['HTTP_X_OPERAMINI_PHONE_UA'];
      }
      return $_SERVER['HTTP_USER_AGENT'];
  }
}

?>
