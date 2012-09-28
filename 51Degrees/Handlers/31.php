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
function E31($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 100000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10, $score);
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
function _H31($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=BlackBerry)[^;]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+\\.\\d+#', $useragent));
  $ns = E31($segments, array(0 => array(0 => ' 9800'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(103301,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.600 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9780'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(147260,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9780; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.448 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9300'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(112506,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9300; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.448 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9700'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(74212,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.448 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9900'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(223801,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(201069,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9360'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(236422,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9360; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.319 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9900'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(223801,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.284 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9650', 1 => ' 9650'), 1 => array(0 => '6.0.0', 1 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(102077,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9650; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.524 Mobile Safari/534.8+, Mozilla/5.0 (BlackBerry; U; BlackBerry 9650; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.524 Mobile Safari/53');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9650'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(102077,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9650; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.524 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9330', 1 => ' 9330'), 1 => array(0 => '6.0.0', 1 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(149206,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9330; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.415 Mobile Safari/534.1+, Mozilla/5.0 (BlackBerry; U; BlackBerry 9330; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.415 Mobile Safari/53');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9330'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(149206,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9330; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.524 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9860'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(224745,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9790'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(329217,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9790; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.528 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9670', 1 => ' 9670'), 1 => array(0 => '6.0.0', 1 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(166550,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9670; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.407 Mobile Safari/534.1+, Mozilla/5.0 (BlackBerry; U; BlackBerry 9670; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.407 Mobile Safari/53');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9670'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(166550,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9670; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.706 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(201069,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.267 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9930'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(228771,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9930; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.163 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9930'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(228771,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9930; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.254 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9360'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(236422,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9360; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.336 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9380'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(290497,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9380; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.482 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9850'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(215532,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9850'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(215532,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.163 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9860'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(224745,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.267 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9105'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(122190,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9105; en-GB) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.668 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9320'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9320; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.398 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9310'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9310; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.477 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9350'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(316217,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9350; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9100'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(133311,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9100; es) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.534 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9350'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(316217,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9350; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.267 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9790'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(329217,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9790; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.523 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9220'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(540003,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9220; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.337 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9380'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(290497,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9380; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.336 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9370'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(243945,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9370; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.374 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9981'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(386593,284657,284663,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9981; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.579 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9981'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(386593,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9981; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.342 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9370'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(243945,293525,293531,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9370; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.580 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(201069,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.50 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9788'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(241970,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9788; zh-CN) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.673 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9860'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(224745,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.60 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9900'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(223801,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.74 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9570'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(190462,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9570; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.250 Mobile Safari/534.1+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9350'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(316217,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9350; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.1.0.32 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9850'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(215532,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.73 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 8980'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(217531,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 8980; en) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.401 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 8520'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(106227,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 8520; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.141 Mobile Safari/534.1+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(201069,103373,103379,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0 Mobile Safari/534.8+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9930'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(228771,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9930; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.46 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9360'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(236422,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9360; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.52 Mobile Safari/534.11+');
    $ls = $ns;
  }
  $ns = E31($segments, array(0 => array(0 => ' 9370'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(243945,215526,214591,6, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9370; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0 Mobile Safari/534.11+');
    $ls = $ns;
  }
  return $dl;
}
