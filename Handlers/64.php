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
 * Calculates the matching score between the two strings for this handler.
 *
 * &$target string
 *   The string we're trying to find the closest value to.
 * $test string
 *   The string that we're testing against.
 * $ls integer
 *   The lowest score we've found so far.
 * return integer
 *   The score between the two strings.
 */
function E64($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 1000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 1000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  return $score;
}

/**
 * Returns the details of the devices that are closest to the
 * useragent string provided.
 *
 * $useragent string
 *   The useragent we're trying to find.
 * return array
 *   An array of device details for the closest devices.
 */
function _H64($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=\\()[^;]+#', $useragent));
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18095,18094,4536,18092, 'Opera/9.80 (S60; SymbOS; Opera Mobi/498; U; en-GB) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'Windows Mobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18182,5448,4536,18092, 'Opera/9.80 (Windows Mobile; WCE; Opera Mobi/WMD-50433; U; en) Presto/2.4.13 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18095,18094,18373,18092, 'Opera/9.80 (S60; SymbOS; Opera Mobi/1209; U; en-GB) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'WindowsMobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18088,5448,4626,18092, 'Opera/9.7 (WindowsMobile; PPC; Opera Mobi/35267; U; en; Presto/2.1.1)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.00'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,17269,18092, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/9; U; en-GB) Presto/2.7.81 Version/11.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.00'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18095,18094,18256,18092, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; en-US) Presto/2.10.254 Version/12.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.00'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18095,18094,17269,18092, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; es-ES) Presto/2.7.81 Version/11.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.10'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18095,18094,17374,18092, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; sv) Presto/2.8.149 Version/11.10');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18373,18092, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/4; U; en-GB) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,18373,18092, 'Opera/9.80 (Linux i686; Opera Mobi/7457; U; en) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Windows Mobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18182,5448,4626,18092, 'Opera/9.7 (Windows Mobile; PPC; Opera Mobi/35166; U; en) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'MTK')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17017,4536,18092, 'Opera/9.80 (MTK; Nucleus; Opera Mobi/2167; U; en-US) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.50'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18095,18094,18070,18092, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; fa) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Microsoft Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13296,17017,3430,18092, 'SEX1i/R3AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15431; U; NL)  Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SH3G')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17634,5567,4536,18092, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3G; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-TS3R')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(14787,5567,3430,18092, 'Mozilla/5.0 Opera/9.5 (KDDI-TS3R; BREW; Opera Mobi; U; ja) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SN3Q')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17582,5567,4536,18092, 'Mozilla/5.0 Opera/9.5 (KDDI-SN3Q; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-SH3D')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17567,5567,3430,18092, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3D; BREW; Opera Mobi; U; ja) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Opera) Vodafone/1.0/HPiPAQDataMessenger/1.00.00 Browser/Opera/9.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.5 (Microsoft Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(11826,17017,3430,18092, '(Opera) Vodafone/1.0/HPiPAQDataMessenger/1.00.00 Browser/Opera/9.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15142; U; en)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Microsoft Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,6476,3430,18092, 'Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/1907; U; en)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,4536,18092, 'Opera/9.80 (Linux armv7l; U; Maemo; Opera Mobi/3; en-GB) Presto/2.5.26 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'MTK')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(12813,17017,4536,18092, ' ZTE-E880/1.0 Nucleus/1.13 Opera Mobile/10 Profile/MIDP-2.1 Configuration/CLDC-1.1  Opera/9.80 (MTK; Nucleus; U; vi-VN) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'WindowsMobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5448,4626,18092, 'Opera/9.7 (WindowsMobile;PPC; Opera Mobi/35267; U; en; Presto/2.1.1)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-TS3O')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17703,5567,3430,18092, 'Mozilla/5.0 Opera/9.5 (KDDI-TS3O; BREW; Opera Mobi; U; en) Presto/2.2.1');
    $ls = $ns;
  }
  return $dl;
}
