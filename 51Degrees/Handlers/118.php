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
function E118($target, $test, $ls) {
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
function _H118($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'Mozilla/4.5 [en] (Win98; I)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.72 [en] (Win98)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.73 [en] (Win98; U)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.76 [en] (Win98)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.76 [en] (Win98; U)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.75 [en] (Win98; U)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/3.0 [en] (compatible; Win98; U)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.61 [en] (Win98; I)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.5 [en]C-CCK-MCD {RuralNet} (Win98; I)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = 'Mozilla/4.7 [en] (Win98; I)';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(53173,246432,16074,913, $ua, '15364-6704-17470-18092');
  }
  $ua = '"Mozilla/4.08 [en] (Win98; U ;Nav)" [Spaces are not mistakes]Help->About: "Version 4.08 [en]-98306"';
  $ns = E118($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(161500,246432,208843,913, $ua, '18587-6704-18589-18092');
  }
  return $dl;
}
