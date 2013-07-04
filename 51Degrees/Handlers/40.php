<?php
/**
 * @file
 * Auto Generated Code - DO NOT EDIT
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.*
 */

/**
 * See LICENSE.TXT for terms of use and copyright.
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
function E40($target, $test, $ls) {
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
function _H40($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=BlackBerry)[^;]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+\\.\\d+#', $useragent));
  $ns = E40($segments, array(0 => array(0 => ' 9800'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(110467,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9800; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.600 Mobile Safari/534.8+', '14523-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9780'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(155379,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9780; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.448 Mobile Safari/534.8+', '14929-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9300'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(118834,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9300; en) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.668 Mobile Safari/534.8+', '15722-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9900'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(235045,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.284 Mobile Safari/534.11+', '15259-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9700'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(77554,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9700; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.448 Mobile Safari/534.8+', '11730-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9900'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(235045,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.576 Mobile Safari/534.11+', '15259-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9360'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(250692,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9360; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.319 Mobile Safari/534.11+', '15250-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(211224,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+', '15232-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(211224,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.694 Mobile Safari/534.11+', '15232-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9360'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(250692,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9360; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.336 Mobile Safari/534.11+', '15250-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9320'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(799581,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9320; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.398 Mobile Safari/534.11+', '18669-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9790'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(353130,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9790; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.528 Mobile Safari/534.11+', '13062-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9930'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(240375,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9930; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.163 Mobile Safari/534.11+', '15236-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9650', 1 => ' 9650'), 1 => array(0 => '6.0.0', 1 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(108399,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9650; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.524 Mobile Safari/534.8+, Mozilla/5.0 (BlackBerry; U; BlackBerry 9650; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.524 Mobile Safari/53', '14888-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9650'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(108399,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9650; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.719 Mobile Safari/534.8+', '14888-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9860'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(236133,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+', '13144-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9330', 1 => ' 9330'), 1 => array(0 => '6.0.0', 1 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157397,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9330; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.415 Mobile Safari/534.1+, Mozilla/5.0 (BlackBerry; U; BlackBerry 9330; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.415 Mobile Safari/53', '15234-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9330'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(157397,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9330; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.719 Mobile Safari/534.8+', '15234-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9860'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(236133,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.342 Mobile Safari/534.11+', '13144-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9790'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(353130,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9790; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.714 Mobile Safari/534.11+', '13062-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9220'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(732045,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9220; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.337 Mobile Safari/534.11+', '18285-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9380'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(311788,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9380; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.482 Mobile Safari/534.11+', '12825-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9850'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(225538,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.163 Mobile Safari/534.11+', '15263-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9670', 1 => ' 9670'), 1 => array(0 => '6.0.0', 1 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(176412,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9670; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.407 Mobile Safari/534.1+, Mozilla/5.0 (BlackBerry; U; BlackBerry 9670; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.407 Mobile Safari/53', '15745-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9670'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(176412,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9670; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.706 Mobile Safari/534.8+', '15745-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9380'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(311788,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9380; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.336 Mobile Safari/534.11+', '12825-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9930'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(240375,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9930; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.254 Mobile Safari/534.11+', '15236-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9350'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(338473,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9350; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.267 Mobile Safari/534.11+', '12628-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9850'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(225538,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+', '15263-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9310'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(842188,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9310; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.477 Mobile Safari/534.11+', '18668-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9350'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(338473,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9350; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.261 Mobile Safari/534.11+', '12628-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9105'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(128614,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9105; en-GB) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.668 Mobile Safari/534.8+', '13341-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9100'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(141277,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9100; es) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.534 Mobile Safari/534.8+', '13783-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9370'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(259583,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9370; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.755 Mobile Safari/534.11+', '12779-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9370'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(259583,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9370; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.374 Mobile Safari/534.11+', '12779-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9981'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(415816,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9981; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.342 Mobile Safari/534.11+', '15254-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9981'), 1 => array(0 => '7.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(415816,306709,305867,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9981; en-GB) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.0.0.579 Mobile Safari/534.11+', '15254-6374-4418-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9315'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(1005370,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9315; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.838 Mobile Safari/534.11+', '19749-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9620'), 1 => array(0 => '7.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(310915,315805,314960,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9620; es) AppleWebKit/534.11+ (KHTML, like Gecko) Version/7.1.0.807 Mobile Safari/534.11+', '18115-7106-15829-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9788'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(257608,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9788; zh-CN) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.673 Mobile Safari/534.8+', '12705-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(211224,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.50 Mobile Safari/534.11+', '15232-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9860'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(236133,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9860; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.60 Mobile Safari/534.11+', '13144-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9900'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(235045,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9900; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.73 Mobile Safari/534.11+', '15259-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9570'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(200972,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9570; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.231 Mobile Safari/534.1+', '13665-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 8520'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(112548,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 8520; en-US) AppleWebKit/534.1+ (KHTML, like Gecko) Version/6.0.0.141 Mobile Safari/534.1+', '15216-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9810'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(211224,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9810; en-GB) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0 Mobile Safari/534.8+', '15232-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9850'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(225538,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9850; en-US) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.1.0.31 Mobile Safari/534.8+', '15263-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 8980'), 1 => array(0 => '6.0.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(228478,110539,109623,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 8980; en-GB) AppleWebKit/534.8+ (KHTML, like Gecko) Version/6.0.0.401 Mobile Safari/534.8+', '12718-5156-3519-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9350'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(338473,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9350; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.74 Mobile Safari/534.11+', '12628-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9930'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(240375,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9930; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.46 Mobile Safari/534.11+', '15236-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9360'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(250692,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9360; en) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0.52 Mobile Safari/534.11+', '15250-6661-4453-18092');
    $ls = $ns;
  }
  $ns = E40($segments, array(0 => array(0 => ' 9370'), 1 => array(0 => '6.1.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(259583,225610,225616,913, 'Mozilla/5.0 (BlackBerry; U; BlackBerry 9370; en-US) AppleWebKit/534.11+ (KHTML, like Gecko) Version/6.1.0 Mobile Safari/534.11+', '12779-6661-4453-18092');
    $ls = $ns;
  }
  return $dl;
}
