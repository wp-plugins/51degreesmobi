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
function E56($target, $test, $ls) {
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
function _H56($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'NEC-E232/1.0 UP.Browser/6.2.3.2.g.1.106 (GUI) MMP/2.0';
  $ns = E56($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(355450,20547,18306,6, $ua);
  }
  $ua = 'NEC-E232/1.0 UP.Browser/6.2.2.6.e.1.101 (GUI) MMP/1.0';
  $ns = E56($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(355450,20547,18306,6, $ua);
  }
  $ua = 'NEC-E232/1.0 UP.Browser/6.2.3.2.g.1.108 (GUI) MMP/2.0';
  $ns = E56($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(355450,20547,18306,6, $ua);
  }
  return $dl;
}
