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
function E63($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[2], $test[2], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
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
function _H63($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Opera Mini/att/)\\d(/|\\.)\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#^[^;]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=Opera Mini/)\\d(/|\\.)\\d#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<= /d/d/dX/d/d/d).+#', $useragent));
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/v4.2.1141/20.2707; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => array(0 => '4.2'), 1 => array(0 => 'Z221'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Z221; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.22250; U; en-US) Opera 9.50');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4/2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '4.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/4.2.13337/504; U; ru) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => array(0 => '4.2'), 1 => array(0 => 'Z331'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Z331; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.22250; U; en-US) Opera 9.50');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '4.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/4.2.21071/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (VRE'), 2 => array(0 => '4.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Opera/9.80 (VRE; Opera Mini/4.2/28.2359; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,44943,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.2.20464/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'aaaOpera/9.50 (J2ME/MIDP'), 2 => array(0 => '4.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,191110,6, 'aaaOpera/9.50 (J2ME/MIDP; Opera Mini/4.1.11355/542; U; en) UP.Browser/7.0.2.3.119 (GUI) MMP/2.0 Push/PO');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '4.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,191110,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/4.1.13961/546; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '4.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,191110,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/4.1.11320/608; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,191110,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.1.15082/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '4.4'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,440993,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/4.4.14881/960; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '4.4'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,440993,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/4.4.28962/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.4'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,440993,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.4.29476/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/10.61 (J2ME/MIDP'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,188373,6, 'Opera/10.61 (J2ME/MIDP; Opera Mini/5.1.21219/19.999; en-US; rv:1.9.3a5) WebKit/534.5 Presto/2.6.30');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,188373,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/5.1.2160/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (MTK'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,188373,6, 'Opera/9.80 (MTK; Opera Mini/5.1.3119/28.2359; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,188373,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.1.24009/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,453208,6, 'Opera/9.80 (Series 60; Opera Mini/6.5.27354/27.1573; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '6.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,453208,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/6.5.28416/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '6.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,453208,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/6.5.26955/27.1741; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '7.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,555776,6, 'Opera/9.80 (Series 60; Opera Mini/7.0.31380/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '7.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,555776,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/7.0.30567/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '4.3'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,386737,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/4.3.13221/504; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.3'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,386737,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.3.25172/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,388329,6, 'Opera/9.80 (Series 60; Opera Mini/6.1.26266/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,388329,6, 'Opera/9.80 (Series 60; Opera Mini/66.6/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6/2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,388329,6, 'Opera/9.80 (Series 60; Opera Mini/6/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '8.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,388329,6, 'Opera/9.80 (Series 60; Opera Mini/8.16.5571/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => array(0 => '1.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,388329,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini/1.1.2666/1724; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => array(0 => '9.8'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,388329,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini/9.8.4509/1724; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '5.8'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,388329,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.862/26.1153; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '6.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,388329,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/6.1.25378/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '6/2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,388329,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/6/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '6.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,388329,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/6.1.27786/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,184845,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/5.0.21463/20.2707; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,184845,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini/5.0.10423/1724; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,184845,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/5.0.15650/446; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,184845,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.0.22371/28.1857; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '6.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,389265,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/6.24093/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '5.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,57100,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/5.21463/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '5.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,57100,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.22371/26.1670; U; es) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Windows Mobile'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(119225,15130,188373,6, 'Opera/9.80 (Windows Mobile; Opera Mini/5.1.21594/28.2359; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'lg-kf750-v10a browser/obigo-q05a/3.12 mms/lg-mms-v1.0/1.2 java/asvm/1.1 profile/midp-2.1 configuration/cldc-1.1'), 2 => array(0 => '4.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,426150,6, 'lg-kf750-v10a browser/obigo-q05a/3.12 mms/lg-mms-v1.0/1.2 java/asvm/1.1 profile/midp-2.1 configuration/cldc-1.1; Opera/9.50 (J2ME/MIDP; Opera Mini/4.0.10269/hifi/tmobile/uk; en; U)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '4.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,426150,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/4.0.10013/724; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '4.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,426150,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/4.0.10822/546; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,426150,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.0.10031/28.2443; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '6.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,557053,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/6.0.24093/28.2504; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,389265,6, 'Opera/9.80 (Series 60; Opera Mini/6.24455/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => array(0 => '3.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,35619,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini/3.1.10423/1724; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(532671,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.1/27.2213; U; en) Presto/2.8.119 400X240 LG VN271');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,188373,6, 'Opera/9.80 (Series 60; Opera Mini/5.1.22783/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,557053,6, 'Opera/9.80 (Series 60; Opera Mini/6.0.24455/27.1993; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,113873,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,113873,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,113873,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '7.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,534278,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/7.29530/26.1532; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '7.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,534278,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/7.29915/27.1940; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '7.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,534278,6, 'Opera/9.80 (Series 60; Opera Mini/7.29974/27.1940; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => array(0 => '2.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,439121,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini/2.0.4509/1724; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '2.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,316865,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/2.1; http:/19.864; U; en) Presto/2.5.25');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '2.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,316865,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/2.1141/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (MTK'), 2 => array(0 => '2.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,316865,6, 'Opera/9.80 (MTK; Opera Mini/2.1198/28.2173; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(509376,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.1/27.2213; U; en) Presto/2.8.119 240X400 Pantech CDM8992');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '6.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,251920,557053,6, 'Opera/9.80 (BREW; Opera Mini/6.0.0/27.2213; U; en) Presto/2.8.119 240X320 Casio C781');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '6.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,251920,388329,6, 'Opera/9.80 (BREW; Opera Mini/6.143/27.1940; U; id) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.1.189/26.1319; U; en) Presto/2.8.119 400X240 LG VN271');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5/2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,251920,184845,6, 'Opera/9.80 (BREW; Opera Mini/5/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,251920,184845,6, 'Opera/9.80 (BREW; Opera Mini/5.0/28.1914; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '5.3'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,501794,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.3521/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Bada'), 2 => array(0 => '6.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,553990,453208,6, 'Opera/9.80 (Bada; Opera Mini/6.5/28.2359; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(516976,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.1/27.2213; U; en) Presto/2.8.119 320X240 Pantech TXT8045');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/iPhone'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(100555,86948,184845,6, 'Opera/9.80 (J2ME/iPhone;Opera Mini/5.0.X/886; U; ja)Presto/2.4.15');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.8'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,504625,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.8462/27.1530; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/8.01 (J2ME/MIDP'), 2 => array(0 => '3.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,440057,6, 'Opera/8.01 (J2ME/MIDP; Opera Mini/3.0.6306/1724; en; U; ssr)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.9'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,507505,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.9751/27.1662; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.50 (J2ME/MIDP'), 2 => array(0 => '2.9'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,515648,6, 'Opera/9.50 (J2ME/MIDP; Opera Mini/2.99/27.1659; U; en)');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.1/27.2213; U; en) Presto/2.8.119 320X240 ZTE F-450');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(371000,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.10/27.1591; U; en) Presto/2.8.119 320X240 LG VX9200');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '9.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,443887,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/9.5.Turbo Silver/416; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '9.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,443887,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.5/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,44721,184845,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/5.0 (Windows; U; Windows NT 5.1; en) AppleWebKit/886; U; en) Presto/2.4.15');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6.7'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,562433,6, 'Opera/9.80 (Series 60; Opera Mini/6.7.29868/27.1667; U; zh) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '9.8'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,539211,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.80/27.1324; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.0'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(371000,251920,184845,6, 'Opera/9.80 (BREW; Opera Mini/5.0/27.2213; U; en) Presto/2.8.119 320X240 LG VX9200');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '9.8'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,503689,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.80/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '7.3'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,535214,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/7.30040/27.1940; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(178664,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.1.173/26.1474; U; en) Presto/2.8.119 400X240 LG VN270');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '4.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,441929,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/4.5.13337/504; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '4.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,441929,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/4.5.29721/27.1667; U; zh) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '4.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,251920,44943,6, 'Opera/9.80 (BREW; Opera Mini/4.2.99/27.1324; U; id) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (J2ME/MIDP'), 2 => array(0 => '9.8'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,153533,503689,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.348; U; en) Presto/2.5.25 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '6.6'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,545671,6, 'Opera/9.80 (Series 60; Opera Mini/6.6.29184/27.1486; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => NULL, 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,113873,6, 'Opera/9.80 (Series 60; Opera Mini; U; en) Presto/2.8.119 Version/11.10');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.1'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(107379,251920,188373,6, 'Opera/9.80 (BREW; Opera Mini/5.16/26.1319; U; en) Presto/2.8.119 800X480 LG VX11000');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (BREW'), 2 => array(0 => '5.4'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(132159,251920,549326,6, 'Opera/9.80 (BREW; Opera Mini/5.43/26.1521; U; en) Presto/2.8.119 320X240 LG VN250');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '5.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,57100,6, 'Opera/9.80 (Series 60; Opera Mini/5.2.22784/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.80 (Series 60'), 2 => array(0 => '9.5'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(153453,438034,443887,6, 'Opera/9.80 (Series 60; Opera Mini/9.5.27310/26.1305; U; en) Presto/2.8.119 Version/10.54');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '9.2'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,442951,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/9.2.Turbo/554; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  $ns = E63($segments, array(0 => NULL, 1 => array(0 => 'Opera/9.60 (J2ME/MIDP'), 2 => array(0 => '9.9'), 3 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,21180,444823,6, 'Opera/9.60 (J2ME/MIDP; Opera Mini/9.9.Turbo/960; U; en) Presto/2.2.0');
    $ls = $ns;
  }
  return $dl;
}
