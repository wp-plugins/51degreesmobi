<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

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
function E42($target, $test, $ls) {
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
function _H42($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'HuaweiM865/M865C153B826 CORE/6.506.4.1 OpenCORE/2.02 (Linux;Android 2.3.3)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(292877,105376,105382,6, $ua);
  }
  $ua = 'Huawei-Videocon_V7400/V7400V100R001INDC180B257 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,0,85,6, $ua);
  }
  $ua = 'Huawei-M860/M860V100R001C153B251SP03 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(164167,0,85,6, $ua);
  }
  $ua = 'Huawei-HUAWEI-M860/M860V100R001C177B261 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(164167,0,85,6, $ua);
  }
  $ua = 'Huawei-HUAWEI-M860/M860V100R001C177B258SP01 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(164167,0,85,6, $ua);
  }
  $ua = 'HuaweiU8650/C00B828SP03 CORE/6.506.4.1 OpenCORE/2.02 (Linux;Android 2.3.3)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(296394,105376,105382,6, $ua);
  }
  $ua = 'Huawei-Vodafone 845/U8120V100R001IRLC02B220SP02 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(142026,0,85,6, $ua);
  }
  $ua = 'Huawei-Vodafone 845/U8120V100R001HUNC02B221SP02 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(142026,0,85,6, $ua);
  }
  $ua = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.5) Mozilla/5.0 (HW-HUAWEI_C8300/C8300V100R001C00B102;U;Windows Mobile/6.5;320*480;CTC/2.0) IE/6.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(36555,6649,6655,6, $ua);
  }
  $ua = 'HUAWEI-M735/001.00 Opera/9.70';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(345545,20173,49191,6, $ua);
  }
  $ua = 'HUAWEI-M635/001.00 WAP/OBIGO/Q05A';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(387744,20173,15136,6, $ua);
  }
  $ua = 'Huawei-RBM2/U8230V100R001C157B826 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(139376,0,85,6, $ua);
  }
  $ua = 'Huawei-Turkcell T10/U8110V100R001C121B256SP04 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(143227,0,85,6, $ua);
  }
  $ua = 'Huawei-Turkcell T10/U8110V100R001C121B256SP02 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(143227,0,85,6, $ua);
  }
  $ua = 'HUAWEI-M750/001.00 ACS-NetFront/3.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(365530,20173,46382,6, $ua);
  }
  $ua = 'Huawei-Smile/U8300V100R001THAC208B258 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(172168,0,85,6, $ua);
  }
  $ua = 'HUAWEI-M228/001.00 ACCESS-NetFront/3.2(Mobile) Mozilla/5.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(279561,20173,46382,6, $ua);
  }
  $ua = 'HUAWEI-M228/001.00 ACS-NetFront/3.2 Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(279561,20173,46382,6, $ua);
  }
  $ua = 'HUAWEI-M228/001.00 ACS-NetFront/3.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(279561,20173,46382,6, $ua);
  }
  $ua = 'Huawei-U2800/U2800ACBXB119 Browser/Obigo-Browser/Q05A';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(381441,20173,108243,6, $ua);
  }
  $ua = 'Huawei-U2800/U2800ACBXB119 Browser/Obigo-Browser/Q05A Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(381441,20173,108243,6, $ua);
  }
  $ua = 'Huawei/1.0/G6600/Browser/obigo-browser/q03c, Huawei/1.0/G6600/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(360347,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/G6600/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(360347,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259633,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2, Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259633,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3610/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2 Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259633,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/G7010/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259273,20173,112938,6, $ua);
  }
  $ua = 'Huawei/G7010/1.0/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259273,20173,112938,6, $ua);
  }
  $ua = 'Huawei/G7010/1.0/Browser/obigo-browser/q03c Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259273,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/G7010/Browser/obigo-browser/q03c Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259273,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2, Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(234334,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG6620/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(234334,20173,112938,6, $ua);
  }
  $ua = 'Huawei-G6620/1.0/0/SP01 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(234334,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/G6603/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(217747,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/G6603/Browser/obigo-browser/q03c Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(217747,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3511/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259201,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3511/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2 Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(259201,20173,112938,6, $ua);
  }
  $ua = 'Huawei-V8401/V8401V100R001C219B256 Player/OpenCORE-Player/2.02 (Linux;Android 2.1-update1)';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(159559,0,85,6, $ua);
  }
  $ua = 'HUAWEI-M328/001.00 ACS-NetFront/3.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(264080,20173,46382,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3510/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(327411,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG3510/WAP2.0/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2 Novarra-Vision/8.0';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(327411,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/HUAWEI_G6005/Obigo Browser/Q03C Browser/Q03C MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(364379,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/G6605/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(365890,20173,112938,6, $ua);
  }
  $ua = 'HUAWEI-M318/001.00 ACS-NetFront/3.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(343601,20173,46382,6, $ua);
  }
  $ua = 'Huawei/1.0/G6150/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(325466,20173,112938,6, $ua);
  }
  $ua = 'Huawei-U526/1.0 BREW/3.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(238942,101999,15136,6, $ua);
  }
  $ua = 'Huawei/1.0/G5730/Browser/obigo-browser/q03c';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(250480,20173,112938,6, $ua);
  }
  $ua = 'Huawei/1.0/U1000/B000 Browser/Obigo-Browser';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(306275,20173,15136,6, $ua);
  }
  $ua = 'HUAWEIU8520/1.0 Linux/2.6.35 Android/2.2.2 Release/5.26.2011 Browser/WebKit533.1';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(548937,96796,920,6, $ua);
  }
  $ua = 'Huawei/1.0/T520/B000 Browser/obigo-browser/q04a';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(358907,20173,15136,6, $ua);
  }
  $ua = 'Huawei/1.0/0HuaweiG6610/SW03 Browser/Obigo-Browser/Q03C MMS/Obigo-MMS/1.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(317038,20173,112938,6, $ua);
  }
  $ua = 'HUAWEI-C6100/001.00 ACS-Netfront/3.2';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(233614,20173,46382,6, $ua);
  }
  $ua = 'Mozilla/5.0 (HUAWEI/S6510V100R001C1X;U;REX/1.0;Opera Mini/4.2;BREW/3.1.5;Profile/MIDP-2.0 Configuration/CLDC-1.1;320*240;CTC/2.0) NetFront/3.5';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(291865,101999,44943,6, $ua);
  }
  $ua = 'Huawei/1.0/H11HW/B000 Browser/Obigo-Browser/Q04A';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(358691,20173,82133,6, $ua);
  }
  $ua = 'Huawei/1.0/T566/B000 Browser/obigo-browser/q04a';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(245025,20173,15136,6, $ua);
  }
  $ua = 'Huawei-U626/1.0 BREW/2.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,358397,15136,6, $ua);
  }
  $ua = 'HUAWEI G6610';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(317038,20173,15136,6, $ua);
  }
  $ua = 'Huawei-U528/1.0 BREW/3.1 Browser/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E42($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,101999,15136,6, $ua);
  }
  return $dl;
}
