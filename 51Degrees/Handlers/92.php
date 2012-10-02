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
function E92($target, $test, $ls) {
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
function _H92($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'ZTE-E520/1.0 SMIT-Browser/2.0.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(174051,174045,174123,6, $ua);
  }
  $ua = 'ZTE-E520/1.0 SMIT-Browser/2.0.0 Novarra-Vision/8.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(174051,174045,174123,6, $ua);
  }
  $ua = 'ZTE-TU812_TD/1.0 Linux/2.6.32 Android/2.2 Release/07.25.2011 Browser/AppleWebKit533.1';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,96796,926,6, $ua);
  }
  $ua = 'ZTE-TU802_TD/1.0 Linux/2.6.32 Android/2.2 Release/1.1.2011 Browser/AppleWebKit530.17 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,96796,926,6, $ua);
  }
  $ua = 'ZTE-TU880_TD/1.0 Linux/2.6.32 Android/2.2 Release/5.25.2011 Browser/AppleWebKit533.1';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(328856,96796,926,6, $ua);
  }
  $ua = 'ZTE-T95 NetFront/3.5 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 firmware/T95 T03 Novarra-Vision/8.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(331883,114953,17077,6, $ua);
  }
  $ua = 'ZTE-T95 NetFront/3.5 QTV5.1 Profile/MIDP-2.1 Configuration/CLDC-1.1 firmware/T95 T03';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(331883,114953,17077,6, $ua);
  }
  $ua = 'ZTE-T870 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T870 T06';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(313048,114953,17077,6, $ua);
  }
  $ua = 'ZTE-T54 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T54 T04';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(362003,114953,17077,6, $ua);
  }
  $ua = 'ZTE-T54 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T54 T04 Novarra-Vision/8.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(362003,114953,17077,6, $ua);
  }
  $ua = 'ZTE-T930 NetFront/3.5 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 firmware/T930 T06';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312544,114953,17077,6, $ua);
  }
  $ua = 'ZTE Bluebelt/v2/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312112,5707,13257,6, $ua);
  }
  $ua = 'ZTE Bluebelt/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312112,5707,13257,6, $ua);
  }
  $ua = 'ZTE-C78/1.0 SMIT-Browser/2.0.0 Novarra-Vision/8.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(217315,174045,174123,6, $ua);
  }
  $ua = 'ZTE-C78/1.0 SMIT-Browser/2.0.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(217315,174045,174123,6, $ua);
  }
  $ua = 'ZTE-T165i/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(202077,21180,21268,6, $ua);
  }
  $ua = 'ZTE-T165i/1.0 ACS-NF/3.4 QTV5.1 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(202077,21180,21268,6, $ua);
  }
  $ua = 'ZTE-C79/1.0 SMIT-Browser/2.0.0';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(225681,174045,174123,6, $ua);
  }
  $ua = 'ZTE Bluebelt II/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312112,5707,5713,6, $ua);
  }
  $ua = 'ZTE silverbelt/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312256,5707,5713,6, $ua);
  }
  $ua = 'ZTE-W N61/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 7.11)';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(333980,5707,13257,6, $ua);
  }
  $ua = 'ZTE-W X60/1.0.0/WAP2.0 Profile/MIDP-2.0 Configuration/CLDC-1.1 (compatible; MSIE 6.0; Windows CE; IEMobile 8.12; MSIEMobile 6.0)';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(290713,5707,5713,6, $ua);
  }
  $ua = 'ZTE-T165i/1.0 ACS-NF/3.2 QTV5.02 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E92($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(202077,21180,46382,6, $ua);
  }
  return $dl;
}
