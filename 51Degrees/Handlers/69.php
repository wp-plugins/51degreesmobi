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
function E69($target, $test, $ls) {
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
function _H69($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'portalmmm/2.0 S500i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421373,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 LG342i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,4620,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 LG342i(c10;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,4620,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 LG342i(c30;TD)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,4620,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S400i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421157,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421157,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c100,TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421157,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c10,TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421157,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S400i(c10;TC)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421157,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(235414,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c20;TD)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(235414,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c100;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(235414,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 K550im(c100;TC)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(235414,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420581,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420581,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420581,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z650i(c300;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420581,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S410i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421301,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421301,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c10;TC)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421301,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c10;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421301,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S410i(c30;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421301,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420653,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420653,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i(c30;TD)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420653,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 Z320i(c10;TJ)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420653,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S401i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421229,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S342i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420509,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S342i(c30;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420509,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S342i(c100;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420509,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S501i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421445,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S501i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421445,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420725,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i (c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420725,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420725,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG342i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420869,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG342i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420869,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 my401Ci';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(409571,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 my401Ci(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(409571,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S720i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(409929,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S720i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(409929,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S730i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(410001,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 S730i(c20;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(410001,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG341i (c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420797,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG346i';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421085,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG346i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421085,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG345i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(409787,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG321i (c10;TB) Profile/DoCoMoProfile-1.5oe Configuration/CLDC-1.0 UP.Browser/7.0.0.1.102 (GUI)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420725,276668,61499,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG343i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(420941,21180,15136,6, $ua);
  }
  $ua = 'portalmmm/2.0 SG344i(c10;TB)';
  $ns = E69($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(421013,21180,15136,6, $ua);
  }
  return $dl;
}
