<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
 */

/**
 * Calculates the edit distance between the two strings.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The edit distance between the two strings.
 */
function E52($target, $test, $ls) {
  return fiftyone_degrees_edit_distance($target, $test, $ls);
}

/**
 * Returns the details of the devices that are closest to the useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H52($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'HUAWEI Y500-T00_TD/1.0 Android 4.0.3 Release/10.01.2012 Browser/WAP2.0 appleWebkit/534.30';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,576960,576120,913, $ua, '15364-18066-18062-18092');
  }
  $ua = 'HUAWEI Y320-T00_TD/1.0 Android 4.0.3 Release/10.01.2012 Browser/WAP2.0 appleWebkit/534.30';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,576960,576120,913, $ua, '15364-18066-18062-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/11.13.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/11.01.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/12.15.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/11.28.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/12.25.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/01.16.2013 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/10.20.2012 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HUAWEI-HUAWEI-Y-220T/1.0 Linux/2.6.35.7 Android/2.3.5 Release/03.20.2013 Browser/AppleWebKit533.1 (KHTML, like Gecko) Mozilla/5.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,90522,90528,913, $ua, '15364-5629-15760-18092');
  }
  $ua = 'HuaweiM865/M865C153B826 CORE/6.506.4.1 OpenCORE/2.02 (Linux;Android 2.3.3)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(290629,90522,90528,913, $ua, '12847-5629-15760-18092');
  }
  $ua = 'HuaweiM865C/C378B876 CORE/6.506.4.1 OpenCORE/2.02 (Linux;Android 2.3.6)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(290629,90522,90528,913, $ua, '12847-5629-15760-18092');
  }
  $ua = 'Huawei-M860/M860V100R001C153B251SP03 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(153815,835,0,913, $ua, '16331-5477-4861-18092');
  }
  $ua = 'Huawei-HUAWEI-M860/M860V100R001C177B261 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(153815,835,0,913, $ua, '16331-5477-4861-18092');
  }
  $ua = 'label=ypmobapp;anv=YPmobile4.0.1;os=Android 2.3.6;dev=hwu8665;devm=Huawei-U8665;man=HUAWEI;brw=Android;shwd=320x480;shwa=320x455;cs=yes;is=yes;as=yes;vs=yes;jss=yes;ls=DAM;';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1095772,90522,90528,913, $ua, '18642-5629-15760-18092');
  }
  $ua = 'HuaweiT8808D_TD/1.0 Android/4.0 Release/02.01.2012 Browser/WAP2.0 appleWebkit/534.30';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,79982,576120,913, $ua, '15364-17979-18062-18092');
  }
  $ua = 'UCWEB/2.0(Java; U; MIDP-2.0; en-us; huawei) U2/1.0.0 UCBrowser/8.7.1.234 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(28561,27598,1033046,913, $ua, '18088-17017-18529-18092');
  }
  $ua = 'HUAWEI-M635/001.00 WAP/OBIGO/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(401414,27598,97064,913, $ua, '15255-17017-3534-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; Huawei; H883G; HuaweiH883G)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1429131,841900,841050,913, $ua, '23283-18148-18263-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; en-US) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; ro-RO) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; es-SA) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; sr-SR) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609/G6609V100R001C221B201SP01   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; pt-PT) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; fr-FR) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; de-DE) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; bg-BG) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G6609   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; it-IT) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,143957,913, $ua, '15364-22857-18373-18092');
  }
  $ua = 'HUAWEI-M735/001.00 Opera/9.70';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(348558,27598,40387,913, $ua, '17906-17017-4626-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; Ascend W1)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1230812,841900,841050,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; HUAWEI Ascend W1 A4BA5B9A-2CD4-430D-B216-EA57BAF03A15)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1230812,841900,841050,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; W1-U00)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1230812,841900,841050,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; Huawei; W1-U34; Huawei W1-U34)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1230812,841900,841050,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; W1-C00)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1230812,841900,841050,913, $ua, '19761-18148-18263-18092');
  }
  $ua = 'HUAWEI-M636/001.00 WAP/OBIGO/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1087840,85975,97064,913, $ua, '22798-5208-3534-18092');
  }
  $ua = 'HUAWEI-M636/001.00 Browser/Obigo-Browser/Q05A MMS/UNIBOX/V1.2 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1087840,85975,97064,913, $ua, '22798-5208-3534-18092');
  }
  $ua = 'Mozilla/5.0 (;;; en-us; Huawei-U8651S Build/U8651SV100R001USAC85B843) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1163756,79982,120007,913, $ua, '19798-17979-4201-18092');
  }
  $ua = 'HUAWEI-M570/001.00 WAP/OBIGO/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1154615,27598,97064,913, $ua, '22801-17017-3534-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; en-US) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; es-SA) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; es) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; vi-VN) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; it-IT) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; pt-PT) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300   Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; lt-LT) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI-G7300 Browser/Opera MMS/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; es-SA) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(993824,321377,143957,913, $ua, '21659-22857-18373-18092');
  }
  $ua = 'Mozilla/5.0 (HW-HUAWEI_U2801;U;REX/1.0;BREW/5.0.4.1;Profile/MIDP-2.0 Configuration/CLDC-1.1;128*160) Opera/9.70';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,146580,40387,913, $ua, '15364-6590-4626-18092');
  }
  $ua = 'Mozilla/5.0 (HW-HUAWEI_U3220;U;REX/1.0;BREW/5.0.4.1;Profile/MIDP-2.0 Configuration/CLDC-1.1;240*320) Opera/9.70';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,146580,40387,913, $ua, '15364-6590-4626-18092');
  }
  $ua = 'Mozilla/5.0 (HW-HUAWEI_U5200/;U;REX/1.0;BREW/5.0.4.1;Profile/MIDP-2.0 Configuration/CLDC-1.1;240*320) Opera/9.70';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,146580,40387,913, $ua, '15364-6590-4626-18092');
  }
  $ua = 'Mozilla/5.0 (HW-HUAWEI_U5300/;U;REX/1.0;BREW/5.0.4.1;Profile/MIDP-2.0 Configuration/CLDC-1.1;240*320) Opera/9.70';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,146580,40387,913, $ua, '15364-6590-4626-18092');
  }
  $ua = 'HUAWEI-M750/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(371952,27598,36213,913, $ua, '14329-17017-4924-18092');
  }
  $ua = 'HUAWEI_Y220T_TD/1.0 Android/2.3.5 SC8810_CMCC/W12.06.21 Release/06.22.2012 Browser/AppleWebkit533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(919696,90522,90528,913, $ua, '21223-5629-15760-18092');
  }
  $ua = 'HUAWEI_Y220-T10_TD/1.0 Android/2.3.5 SC8810_CMCC/W12.06.21 Release/02.01.2013 Browser/AppleWebkit533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(919696,90522,90528,913, $ua, '21223-5629-15760-18092');
  }
  $ua = 'HUAWEI-M228/001.00 ACCESS-NetFront/3.2(Mobile) Mozilla/5.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275682,27598,36213,913, $ua, '12378-17017-4924-18092');
  }
  $ua = 'HUAWEI-M228/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(275682,27598,36213,913, $ua, '12378-17017-4924-18092');
  }
  $ua = 'Mozilla/5.0 (HW-HUAWEI_U6150;U;REX/1.0;BREW/5.0.4.1;Profile/MIDP-2.0 Configuration/CLDC-1.1;320*240) Opera/9.70 (KHTML, like Gecko) Version/7.0 Mobile Opera/7.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(324063,146580,40387,913, $ua, '12962-6590-4626-18092');
  }
  $ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows Phone 8.0; Trident/6.0; IEMobile/10.0; ARM; Touch; HUAWEI; 4Afrika)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1430653,841900,841050,913, $ua, '23409-18148-18263-18092');
  }
  $ua = 'HUAWEI-G5520/1.0 MTK6252C/Nucleus 1.0 Release/05.21.2012 Browser/OBIGO-Q03C WAP-Browser 1.0  Profile/MIDP-2.0 Config/CLDC-1.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,321377,98811,913, $ua, '15364-22857-3807-18092');
  }
  $ua = 'Huawei/1.0/G6600/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(376781,27598,98811,913, $ua, '14470-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(255493,27598,98811,913, $ua, '15754-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2, Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(255493,27598,98811,913, $ua, '15754-17017-3807-18092');
  }
  $ua = 'Huawei-U2800/U2800ACBXB119 Browser/Obigo-Browser/Q05A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(396771,27598,97064,913, $ua, '15159-17017-3534-18092');
  }
  $ua = 'Huawei/1.0/G7010/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(255061,27598,98811,913, $ua, '15658-17017-3807-18092');
  }
  $ua = 'Huawei/G7010/1.0/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(255061,27598,98811,913, $ua, '15658-17017-3807-18092');
  }
  $ua = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Mozilla/5.0 (HW-HUAWEI_C8300/C8300V100R001C00B102;U;Windows Mobile/6.5;320*480;CTC/2.0) IE/6.0';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(28561,6631,7637,913, $ua, '18088-5448-17183-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2, Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(224173,27598,98811,913, $ua, '14143-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(224173,27598,98811,913, $ua, '14143-17017-3807-18092');
  }
  $ua = 'Huawei-G6620/1.0/0/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(224173,27598,98811,913, $ua, '14143-17017-3807-18092');
  }
  $ua = 'MQQBrowser/3.4/Adr (Linux; U; 4.1.1; zh-cn; HUAWEI G510-0010 Build/G510-0010V100R001C17B168;480*854)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1263506,610861,951413,913, $ua, '20192-18111-20785-18092');
  }
  $ua = 'MQQBrowser/3.4/Adr (Linux; U; 4.1.1; zh-cn; HUAWEI G510-0010 Build/G510-0010V100R001C17B173;480*854)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1263506,610861,951413,913, $ua, '20192-18111-20785-18092');
  }
  $ua = 'HUAWEI_G6800 (MRE\\2.3.00(25600) resolution\\X chipset\\MT6255 touch\\1 tpannel\\1 camera\\0 gsensor\\0 keyboard\\qwerty) MAUI/MAUI.11B.W12.12.MP.V2 Release/31.12.2010 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; sr-SR) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1336710,321377,143957,913, $ua, '23587-22857-18373-18092');
  }
  $ua = 'HUAWEI_G6800 (MRE\\2.3.00(25600) resolution\\X chipset\\MT6255 touch\\1 tpannel\\1 camera\\0 gsensor\\0 keyboard\\qwerty) MAUI/MAUI.11B.W12.12.MP.V2 Release/31.12.2010 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; hr-HR) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1336710,321377,143957,913, $ua, '23587-22857-18373-18092');
  }
  $ua = 'HUAWEI_G6800 (MRE\\2.3.00(25600) resolution\\X chipset\\MT6255 touch\\1 tpannel\\1 camera\\0 gsensor\\0 keyboard\\qwerty) MAUI/MAUI.11B.W12.12.MP.V2 Release/31.12.2010 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; ro-RO) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1336710,321377,143957,913, $ua, '23587-22857-18373-18092');
  }
  $ua = 'HUAWEI_G6800 (MRE\\2.3.00(25600) resolution\\X chipset\\MT6255 touch\\1 tpannel\\1 camera\\0 gsensor\\0 keyboard\\qwerty) MAUI/MAUI.11B.W12.12.MP.V2 Release/31.12.2010 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; es-ES) Presto/2.5.28 Version/10.10';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1336710,321377,143957,913, $ua, '23587-22857-18373-18092');
  }
  $ua = 'Huawei/1.0/HUAWEI_G6005/Obigo Browser/Q03C Browser/Q03C MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(370512,27598,98811,913, $ua, '12732-17017-3807-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8825D Build/U8825DV100R001C17B951;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1059040,124734,802301,913, $ua, '20094-18110-20781-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8825D Build/U8825DV100R001C17B935;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1059040,124734,802301,913, $ua, '20094-18110-20781-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8825D Build/U8825DV100R001C17B956;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1059040,124734,802301,913, $ua, '20094-18110-20781-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8825D Build/U8825DV100R001C17B933;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1059040,124734,802301,913, $ua, '20094-18110-20781-18092');
  }
  $ua = 'Huawei/1.0/G6603/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(204912,27598,98811,913, $ua, '15145-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3511/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(254701,27598,98811,913, $ua, '15743-17017-3807-18092');
  }
  $ua = 'MQQBrowser/25 (Linux; U; 4.0.3; zh-cn; HUAWEI C8812 Build/C8812V100R001C92B926;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(885047,124734,397779,913, $ua, '19998-18110-20776-18092');
  }
  $ua = 'MQQBrowser/25 (Linux; U; 4.0.3; zh-cn; HUAWEI C8812 Build/C8812V100R001C92B921;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(885047,124734,397779,913, $ua, '19998-18110-20776-18092');
  }
  $ua = 'Huawei/1.0/G6150/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(327846,27598,98811,913, $ua, '16365-17017-3807-18092');
  }
  $ua = 'JUC (Linux; U; 2.3.6; zh-cn; HUAWEI_Y210-2010; 320*480) UCWEB7.9.0.94/139/33572';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1275415,124734,303588,913, $ua, '21545-18110-17338-18092');
  }
  $ua = 'JUC (Linux; U; 2.3.6; zh-cn; HUAWEI_Y210S; 320*480) UCWEB7.9.0.94/139/33572';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1275415,124734,303588,913, $ua, '21545-18110-17338-18092');
  }
  $ua = 'MQQBrowser/3.4/Adr (Linux; U; 4.1.1; zh-cn; HUAWEI Y300-0000 Build/Y300-0000V100R001C17B172;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1310612,610861,951413,913, $ua, '21858-18111-20785-18092');
  }
  $ua = 'UCWEB/2.0 (Linux; U; Adr 2.3.6; en-US; HUAWEI_Y210-0200) U2/1.0.0 UCBrowser/8.2.0.242 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1275415,90522,645789,913, $ua, '21545-5629-18326-18092');
  }
  $ua = 'UCWEB/2.0 (Linux; U; Adr 2.3.6; en-US; HUAWEI_Y210-0100) U2/1.0.0 UCBrowser/8.2.0.242 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1275415,90522,645789,913, $ua, '21545-5629-18326-18092');
  }
  $ua = 'MQQBrowser/26 (Linux; U; 2.3.6; zh-cn; HUAWEI C8650+ Build/C8650+V100R001C92B875;320*480)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(331232,124734,399025,913, $ua, '13077-18110-20777-18092');
  }
  $ua = 'MQQBrowser/26 (Linux; U; 2.3.6; zh-cn; HUAWEI C8650+ Build/C8650+V100R001C92B866SP01;320*480)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(331232,124734,399025,913, $ua, '13077-18110-20777-18092');
  }
  $ua = 'HUAWEIU8520/1.0 Linux/2.6.35 Android/2.2.2 Release/5.26.2011 Browser/WebKit533.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(792359,79982,926,913, $ua, '16290-17979-3508-18092');
  }
  $ua = 'JUC (Linux; U; 4.0.3; zh-cn; HUAWEI_C8812; 480*800) UCWEB7.9.4.145/139/800';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(885047,124734,303588,913, $ua, '19998-18110-17338-18092');
  }
  $ua = 'HUAWEI-M328/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259237,27598,36213,913, $ua, '13592-17017-4924-18092');
  }
  $ua = 'JUC (Linux; U; 4.1.1; zh-cn; HUAWEI_C8813; 480*854) UCWEB7.9.0.94/139/800';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1279599,610861,303588,913, $ua, '21351-18111-17338-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG3510/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(329430,27598,98811,913, $ua, '13039-17017-3807-18092');
  }
  $ua = 'UCWEB/2.0 (Linux; U; Adr 4.1.1; en-US; HUAWEI_Y300-0100) U2/1.0.0 UCBrowser/8.2.0.242 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1332062,610861,645789,913, $ua, '21857-18111-18326-18092');
  }
  $ua = 'Huawei/1.0/G6605/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(372672,27598,98811,913, $ua, '17907-17017-3807-18092');
  }
  $ua = 'JUC (Linux; U; 4.0.3; zh-cn; HUAWEI C8812; 480*800) UCWEB8.3.1.151/145/33265';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(885047,124734,712167,913, $ua, '19998-18110-18516-18092');
  }
  $ua = 'JUC (Linux; U; 4.0.4; zh-cn; HUAWEI_U8825D; 480*800) UCWEB7.9.0.94/139/444';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1059040,124734,303588,913, $ua, '20094-18110-17338-18092');
  }
  $ua = 'MQQBrowser/3.5/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U9508 Build/U9508V100R001CHNC00B018;720*1280)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1212316,124734,968094,913, $ua, '19863-18110-20786-18092');
  }
  $ua = 'MQQBrowser/2.8/Adr (Linux; U; 2.3.6; zh-cn; HUAWEI U8661 Build/U8661V100R001C17B827;320*480)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(904825,124734,620202,913, $ua, '21347-18110-20779-18092');
  }
  $ua = 'UCWEB/2.0 (Linux; U; Adr 4.0.4; en-US; HUAWEI_U8950-1) U2/1.0.0 UCBrowser/8.2.0.242 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1176275,576960,645789,913, $ua, '18460-18066-18326-18092');
  }
  $ua = 'MQQBrowser/3.0/Adr (Linux; U; 4.0.4; zh-cn; HUAWEI U8950D Build/U8950DV100R001C17B939;540*960)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1176275,124734,802301,913, $ua, '18460-18110-20781-18092');
  }
  $ua = 'UCWEB/2.0 (Linux; U; Adr 4.0.4; en-US; HUAWEI_U8825D) U2/1.0.0 UCBrowser/8.2.0.242 U2/1.0.0 Mobile';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(1059040,576960,645789,913, $ua, '20094-18066-18326-18092');
  }
  $ua = 'MQQBrowser/26 (Linux; U; 2.3.6; zh-cn; HUAWEI C8810 Build/C8810V100R001C92B862;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(919696,124734,399025,913, $ua, '21223-18110-20777-18092');
  }
  $ua = 'MQQBrowser/3.7/Adr (Linux; U; 4.0.3; zh-cn; HUAWEI C8812 Build/C8812V100R001C92B926;480*800)';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(885047,124734,1101641,913, $ua, '19998-18110-20788-18092');
  }
  $ua = 'HUAWEI-C6100/001.00 ACS-Netfront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(223381,27598,36213,913, $ua, '15401-17017-4924-18092');
  }
  $ua = 'Huawei/1.0/0HuaweiG6610/SW03 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(318466,27598,98811,913, $ua, '12640-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/G5730/Browser/obigo-browser/q03c';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(243642,27598,98811,913, $ua, '15617-17017-3807-18092');
  }
  $ua = 'Huawei/1.0/U1000/B000 Browser/Obigo-Browser';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(304986,27598,54471,913, $ua, '16451-17017-17470-18092');
  }
  $ua = 'Huawei/1.0/T520/B000 Browser/obigo-browser/q04a';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(365147,27598,54471,913, $ua, '12612-17017-17470-18092');
  }
  $ua = 'Huawei-U526/1.0 BREW/3.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(228565,85975,54471,913, $ua, '15486-5208-17470-18092');
  }
  $ua = 'HUAWEI-M318/001.00 ACS-NetFront/3.2';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(346254,27598,36213,913, $ua, '13992-17017-4924-18092');
  }
  $ua = 'Mozilla/5.0 (HUAWEI/S6510V100R001C1X;U;REX/1.0;Opera Mini/4.2;BREW/3.1.5;Profile/MIDP-2.0 Configuration/CLDC-1.1;320*240;CTC/2.0) NetFront/3.5';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(289597,85975,141706,913, $ua, '12846-5208-4732-18092');
  }
  $ua = 'Huawei/1.0/T566/B000 Browser/obigo-browser/q04a';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(238330,27598,54471,913, $ua, '17909-17017-17470-18092');
  }
  $ua = 'HUAWEI G6610';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(318466,27598,54471,913, $ua, '12640-17017-17470-18092');
  }
  $ua = 'Huawei/1.0/H11HW/B000 Browser/Obigo-Browser/Q04A';
  $ns = E52($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(364787,27598,69743,913, $ua, '12606-17017-4203-18092');
  }
  return $dl;
}
