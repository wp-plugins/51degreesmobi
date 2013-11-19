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
function E133($target, $test, $ls) {
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
function _H133($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(|; \\w+)#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#SlimBrowser/\\d\\.\\d#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#(?<=;)([^;\\)]+)(?=Build/)#', $useragent));
  $ns = E133($segments, array(0 => array(0 => 'Windows NT 6.1'), 1 => array(0 => 'SlimBrowser/6.0'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,117309,904971,913, 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0) SlimBrowser/6.01.069', '15364-7133-22775-18092');
    $ls = $ns;
  }
  $ns = E133($segments, array(0 => array(0 => 'Windows NT 6.0'), 1 => array(0 => 'SlimBrowser/6.0'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,66762,904971,913, 'Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0) SlimBrowser/6.01.069', '15364-17285-22775-18092');
    $ls = $ns;
  }
  $ns = E133($segments, array(0 => array(0 => 'Windows NT 6.2'), 1 => array(0 => 'SlimBrowser/6.0'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,309102,904971,913, 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; WOW64; Trident/6.0; SlimBrowser/6.01.101)', '15364-16110-22775-18092');
    $ls = $ns;
  }
  $ns = E133($segments, array(0 => array(0 => 'Windows NT 5.1'), 1 => array(0 => 'SlimBrowser/6.0'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(53173,53254,904971,913, 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; SlimBrowser/6.01.091)', '15364-5690-22775-18092');
    $ls = $ns;
  }
  return $dl;
}
