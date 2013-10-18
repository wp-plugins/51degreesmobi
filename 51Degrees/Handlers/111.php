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
function E111($target, $test, $ls) {
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
function _H111($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'FeedDemon/3.1 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,27598,54471,913, $ua, '15364-17017-17470-18092');
  }
  $ua = 'FeedDemon/2.7 (http://www.newsgator.com/; Microsoft Windows)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,27598,54471,913, $ua, '15364-17017-17470-18092');
  }
  $ua = 'FeedDemon/3.1 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,49474,54471,913, $ua, '15364-5690-17470-18092');
  }
  $ua = 'FeedDemon/2.7 (http://www.newsgator.com/; Microsoft Windows XP)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,49474,54471,913, $ua, '15364-5690-17470-18092');
  }
  $ua = 'FeedDemon/4.0 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,49474,54471,913, $ua, '15364-5690-17470-18092');
  }
  $ua = 'FeedDemon/3.0 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,49474,54471,913, $ua, '15364-5690-17470-18092');
  }
  $ua = 'FeedDemon/4.1 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,49474,54471,913, $ua, '15364-5690-17470-18092');
  }
  $ua = 'FeedDemon/4.5 (http://www.feeddemon.com/; Microsoft Windows XP)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,49474,54471,913, $ua, '15364-5690-17470-18092');
  }
  $ua = 'FeedDemon/4.0 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,268705,54471,913, $ua, '15364-17350-17470-18092');
  }
  $ua = 'FeedDemon/3.0 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,268705,54471,913, $ua, '15364-17350-17470-18092');
  }
  $ua = 'FeedDemon/4.1 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,268705,54471,913, $ua, '15364-17350-17470-18092');
  }
  $ua = 'FeedDemon/4.5 (http://www.feeddemon.com/; Microsoft Windows)';
  $ns = E111($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(44218,268705,54471,913, $ua, '15364-17350-17470-18092');
  }
  return $dl;
}
