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
function E23($target, $test, $ls) {
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
function _H23($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'AUDIOVOX-PM8910KIT';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15341,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-SMT5600/Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17673,5448,4578,18092, $ua);
  }
  $ua = 'AUDIOVOX-SMT5600/1.2 Mozilla/4.0 (compatible; MSIE 4.01; Windows CE; Smartphone; 176x220)';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17673,5448,4578,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM-8915 UP.Browser/6.2.2.6.h.1.102 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17678,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-9155GPX';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17684,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-9155GPX/07.13 UP.Browser/4.1.26c3';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17684,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8450';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17681,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8450SP';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17681,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8910 UP.Browser/6.2.3.1 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17682,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8910 UP.Browser/6.2.3.2 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17682,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8912SP/T115SP0T13 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17680,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8912SP/T115SP0T22 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17680,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-SMT5600';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17673,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8450SP/T060SP2T36 UP.Browser/6.2.2.1 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17681,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8450SP/T060SP2T37 UP.Browser/6.2.2.1 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17681,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM-8930 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17677,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8945';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17676,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-PM8920KIT/T120SP0T17 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17679,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-PM8920KIT/T120SP0T12 UP.Browser/6.2.2.6.h.1.100 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17679,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8910';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17682,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM-8930';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17677,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8940';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17683,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8940 UP.Browser/6.2.3.2 (GUI) MMP/2.0';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17683,17017,3625,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM9155SP';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17674,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-PM8920KIT';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17679,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM8912SP';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17680,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM9100';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17675,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM9500';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17672,17017,17470,18092, $ua);
  }
  $ua = 'AUDIOVOX-CDM9500/111.030 UP.Browser/5.0.4.1 (GUI)';
  $ns = E23($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17672,17017,4948,18092, $ua);
  }
  return $dl;
}
