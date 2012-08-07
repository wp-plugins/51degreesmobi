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
function E9($target, $test, $ls) {
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
  fiftyone_degrees_calculate_segment_score($target[3], $test[3], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[4], $test[4], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[5], $test[5], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[6], $test[6], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[7], $test[7], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[8], $test[8], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[9], $test[9], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[10], $test[10], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[11], $test[11], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[12], $test[12], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[13], $test[13], $ls, 1, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[14], $test[14], $ls, 1, $score);
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
function _H9($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=;)([^;\\)]+)(?=Build/)#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=\\w\\w(_|-)\\w\\w;)[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=;\\sAndroid)[\\d\\s][^;\\)]+#', $useragent),
    3 => fiftyone_degrees_preg_match_all('#(?<=UCWEB)\\d+\\.\\d+|(?<=UCWEB/)\\d+\\.\\d+#', $useragent),
    4 => fiftyone_degrees_preg_match_all('#(?<=UC Browser)\\d+\\.\\d+#', $useragent),
    5 => fiftyone_degrees_preg_match_all('#(?<=UP\\.Browser)[\\d\\.]+#', $useragent),
    6 => fiftyone_degrees_preg_match_all('#(?<=Opera/)\\d+\\.\\d+|(?<=Opera )\\d+\\.\\d+#', $useragent),
    7 => fiftyone_degrees_preg_match_all('#(?<=Opera Mini/)\\d+\\.\\d+#', $useragent),
    8 => fiftyone_degrees_preg_match_all('#(?<=Opera Mobi/)\\d+\\.\\d+#', $useragent),
    9 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent),
    10 => fiftyone_degrees_preg_match_all('#(?<=Ninesky-android-mobile/)\\d+\\.\\d+#', $useragent),
    11 => fiftyone_degrees_preg_match_all('#(?<=CrMo/)\\d+#', $useragent),
    12 => fiftyone_degrees_preg_match_all('#(?<=Chrome/)\\d+#', $useragent),
    13 => fiftyone_degrees_preg_match_all('#(?<=AppleWebKit/)[\\d\\.\\+]+#', $useragent),
    14 => fiftyone_degrees_preg_match_all('#(?<=Mobile Safari/)[\\d\\.]+#', $useragent));
  $ns = E9($segments, array(0 => array(0 => ' Droid'), 1 => array(0 => ' DroidBuild/FRK76'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; DroidBuild/FRK76) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' RACERII '), 1 => array(0 => ' RACERII Build/FRG83G'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15364,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; RACERII Build/FRG83G) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' GT-I9000 '), 1 => array(0 => ' GT-I9000 Build/FROYO'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(14877,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-gb; GT-I9000 Build/FROYO) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/FRK76'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'com.google.android.youtube/2.3.4(Linux; U; Android 2.2.3; en_US; Droid Build/FRK76) gzip');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/FRK76'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; Droid Build/FRK76) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Droid '), 1 => NULL, 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'Dalvik/1.2.0 (Linux; U; Android 2.2.3; Droid Build/FRK76)');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => 'Droid '), 1 => array(0 => 'Droid Build/FRK76'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us;Droid Build/FRK76) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/FRK76'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; Droid Build/FRK76) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 MobileSafari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/FRK76'), 2 => array(0 => '2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android2.2.3; en-us; Droid Build/FRK76) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Droid '), 1 => array(0 => ' Droid Build/FRK76'), 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13257,5096,3508,18092, 'Mozilla/5.0 (Linux; U;Android 2.2.3; en-us; Droid Build/FRK76) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' SPH-M910 '), 1 => array(0 => ' SPH-M910 Build/FROYO'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(14334,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; SPH-M910 Build/FROYO) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' SPH-M910 '), 1 => NULL, 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(14334,5096,3508,18092, 'Dalvik/1.2.0 (Linux; U; Android 2.2.3; SPH-M910 Build/FROYO)');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' T-Mobile myTouch 3G '), 1 => array(0 => ' T-Mobile myTouch 3G Build/FRK76C'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13233,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; T-Mobile myTouch 3G Build/FRK76C) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' T-Mobile myTouch 3G '), 1 => NULL, 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(13233,5096,3508,18092, 'Dalvik/1.2.0 (Linux; U; Android 2.2.3; T-Mobile myTouch 3G Build/FRK76C)');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' Sprint APA7373KT '), 1 => array(0 => ' Sprint APA7373KT Build/FRF91'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(15995,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; zh-tw; Sprint APA7373KT Build/FRF91) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => NULL, 1 => NULL, 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL, 6 => array(0 => '9.80'), 7 => NULL, 8 => NULL, 9 => array(0 => '12.00'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17968,5096,18256,18092, 'Opera/9.80 (Android 2.2.3; Linux; Opera Mobi/ADR-X; U; en) Presto/2.10.254 Version/12.00');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => NULL, 1 => NULL, 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL, 6 => array(0 => '9.80'), 7 => NULL, 8 => NULL, 9 => array(0 => '11.50'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(17968,5096,18070,18092, 'Opera/9.80 (Android 2.2.3; Linux; Opera Mobi/ADR-X; U; en) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E9($segments, array(0 => array(0 => ' X10i '), 1 => array(0 => ' X10i Build/FRG83'), 2 => array(0 => ' 2.2.3'), 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => array(0 => '4.0'), 10 => NULL, 11 => NULL, 12 => NULL, 13 => array(0 => '533.1'), 14 => array(0 => '533.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(11950,5096,3508,18092, 'Mozilla/5.0 (Linux; U; Android 2.2.3; en-us; X10i Build/FRG83) AppleWebKit/533.1 (KHTML, like Gecko) Version/4.0 Mobile Safari/533.1');
    $ls = $ns;
  }
  return $dl;
}
