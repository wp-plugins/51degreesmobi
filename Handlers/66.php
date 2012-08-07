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
function E66($target, $test, $ls) {
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
function _H66($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Panasonic-MX7/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-A100';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-G60';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic G600i';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-X60';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-X77/R01 Profile';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-X200P/RP1 Profile/MIDP-1.0 Configuration/CLDC-1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-X400P/RP1 Profile/MIDP-1.0 Configuration/CLDC-1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-GAD6*';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-GAD75';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-GAD87';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-GAD87i';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-GAD96';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-X70';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-MX6/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS3/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14078,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS3/VA47 Browser/Obigo-Browser/3.0 MMS/Obigo-MMS/2.0 Java/Jblend/1.0 Sync/Panasonic/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14078,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS3/(2005.05.11)SW1.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14078,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS3/#Vodafone/1.0/Panasonic-VS3';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14078,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-G60/1.0 UP.Browser/6.1.0.6 MMP/1.0 UP.Browser/6.1.0.6 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-G60/1.0 UP.Browser/6.1.0.7 MMP/1.0 UP.Browser/6.1.0.7 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-G70/1.0 UP.Browser/6.1.0.6.d.2.100 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-X300/1.0 UP.Browser/6.1.0.7.4 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-X300/1.0 UP.Browser/6.1.0.7.8 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-VS6/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15506,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS6';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15506,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-X800/1.0 SymbianOS/7.0 Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,5776,3756,18092, $ua);
  }
  $ua = 'Panasonic-X701/1.0 SymbianOS/7.0 Series60/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,5776,3756,18092, $ua);
  }
  $ua = 'Panasonic-VS2/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12576,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS2';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12576,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS7/1.0/RP1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15499,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-VS7';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15499,17017,17470,18092, $ua);
  }
  $ua = 'Panasonic-G50/1.0 UP.Browser/6.1.0.6.d.2.100 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15595,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-SC3/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.7.8 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15355,17017,4901,18092, $ua);
  }
  $ua = 'Panasonic-A200/1.0 UP.Browser/6.2.2.7 (GUI)MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,3625,18092, $ua);
  }
  $ua = 'Panasonic-X500/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.7 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12567,17017,3625,18092, $ua);
  }
  $ua = 'Panasonic-A210/1.0 UP.Browser/6.1.0.7.8 (GUI) MMP/1.0';
  $ns = E66($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15267,17017,4901,18092, $ua);
  }
  return $dl;
}
