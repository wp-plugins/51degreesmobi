<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */



F51DSendDetails();

function F51DSendDetails()
{
  if(extension_loaded('php_sockets') || extension_loaded('sockets'))
  {
    $server_ip = 'udp.devices.51degrees.mobi';$server_port = 80;
    $message = '<?xml version="1.0" encoding="utf-16"?><Device>
    <DateSent>'.gmdate('c').'</DateSent><Version>2.1.6.7</Version><Product>51degrees.mobi - Foundation - PHP</Product>';
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) { $ip = $_SERVER['HTTP_CLIENT_IP']; }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { $ip = $_SERVER['HTTP_X_FORWARDED_FOR']; }else { $ip = $_SERVER['REMOTE_ADDR']; }
    $message .= '<ClientIP>'.$ip.'</ClientIP>';

      $headers = F51DGetHeaders();
      foreach ($headers as $servervar => $val) {
      if(strtolower($servervar) == "referer" || strtolower($servervar) == "cookie")
      {
      $message .= '<Header Name="'.$servervar.'"></Header>';
    }
    else
    {
    $message .= '<Header Name="'.$servervar.'"><![CDATA['.$val.']]></Header>';
    }
    }
    $message .= '
  </Device>';
@$socket = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
if($socket)
{
@socket_sendto($socket, $message, strlen($message), 0, $server_ip, $server_port);
}
}
}

function F51DGetHeaders()
{
if(function_exists('getallheaders'))
{
return getallheaders();
}
else
{
foreach ($_SERVER as $name => $value)
{
if (substr($name, 0, 5) == 'HTTP_')
{
$headers[str_replace(' ', '-', F51DUcwordsHyphen(strtolower(str_replace('_', ' ', substr($name, 5)))))] = $value;
}
}
return $headers;
}
}

function F51DUcwordsHyphen($str){
return str_replace('- ','-',ucwords(str_replace('-','- ',$str)));
}

?>