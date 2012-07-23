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
function E93($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 10000, $score);
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
function _H93($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/)\\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11#', $useragent));
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(18254,7480,18245,18091, 'Mozilla/5.0 (X11; U; Linux i686; c) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 WatchMouse/$Revision: 23655 $');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,18120,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en) AppleWebKit (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,18110,17470,18092, 'Mozilla/5.0 (X11; U; Linux i686; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Boxee/1.0.1 bxapi/7.1');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.3 (KHTML, like Gecko)  QtWeb Internet Browser/3.7.3 http://www.QtWeb.net');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 5.1'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5690,17470,18092, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/534.52.7 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/531.21.11 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6; en-us) AppleWebKit/531.9 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_1; en-us) AppleWebKit/531.9 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_2; en-us) AppleWebKit/531.9 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; en-us) AppleWebKit/533.18.1 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; en-us) AppleWebKit/533.19.4 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_6')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-us) AppleWebKit/533.19.4 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_7')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-us) AppleWebKit/533.21.1 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; en-us) AppleWebKit/533.21.1 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_6) AppleWebKit/534.24 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0', 1 => '5.0'), 1 => array(0 => 'Macintosh', 1 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_4', 1 => 'Mac OS X 10_6_4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; en-us) AppleWebKit/533.17.8 (KHTML, like Gecko) Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; en) AppleWebKit/533.17.8 (KHTML, like Gecko) "wKiosk for Mac"');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0', 1 => '5.0'), 1 => array(0 => 'Macintosh', 1 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_7', 1 => 'Mac OS X 10_6_7')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; it-it) AppleWebKit/533.20.25 (KHTML, like Gecko) Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en) AppleWebKit/533.20.25 (KHTML, like Gecko) "wKiosk for Mac"');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0', 1 => '5.0'), 1 => array(0 => 'Macintosh', 1 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_6_3', 1 => 'Mac OS X 10_6_3')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/531.22.7 (KHTML, like Gecko) Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en) AppleWebKit/531.22.7 (KHTML, like Gecko) "wKiosk for Mac"');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,17470,18092, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533+ (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.1'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,17470,18092, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/534.52.7 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.1'), 2 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,7133,17470,18092, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/534+ (KHTML, like Gecko) BingPreview/1.0b');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_5_5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_5; en-us) AppleWebKit/525.18 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_5_7')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_7; en-us) AppleWebKit/525.28.3 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_5_2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_2; en-us) AppleWebKit/525.18 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_5_4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_4; en-us) AppleWebKit/525.18 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_5_6')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_6; en-us) AppleWebKit/525.27.1 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_5_8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; en-us) AppleWebKit/533.21.1 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17295,18108,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_5_8) AppleWebKit/534.50.2 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_7')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_7; en-us) AppleWebKit/534.20.8 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17297,18108,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.53.11 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.0'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,17470,18092, 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/534.50 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.0'), 2 => array(0 => 'Windows NT 6.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,17285,17470,18092, 'Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/534.52.7 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10_4_11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17294,18108,18092, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_4_11; en) AppleWebKit/533.19.4 (KHTML, like Gecko)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,17296,17470,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/534.50 (KHTML, like Gecko) Version/5.1 Instapaper/4.0 (+http://www.instapaper.com/)');
    $ls = $ns;
  }
  $ns = E93($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17595,18207,18108,18092, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8) AppleWebKit/536.2.3 (KHTML, like Gecko)');
    $ls = $ns;
  }
  return $dl;
}
