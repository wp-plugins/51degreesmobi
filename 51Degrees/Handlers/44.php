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
function E44($target, $test, $ls) {
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
function _H44($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'KWC-S2300/ABU1001 UP.Browser/7.2.7.2.552 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABR1003 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300-C/ACF1002 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABR1001 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABQ1000 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABQ1103 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABQ1103 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABQ1000 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300-C/ACF1002 UP.Browser/7.2.7.2.549 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABU1001 UP.Browser/7.2.7.2.552 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABR1001 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABR1003 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-S2300/ABR1004 UP.Browser/7.2.7.2.551 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(196681,196675,22609,6, $ua);
  }
  $ua = 'KWC-Rio/ACI1005 UP.Browser/7.2.7.2.563 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(285637,196675,22609,6, $ua);
  }
  $ua = 'KWC-Rio/ACI1003 UP.Browser/7.2.7.2.563 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(285637,196675,22609,6, $ua);
  }
  $ua = 'KWC-Rio/ACJ1005 UP.Browser/7.2.7.2.562 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(285637,196675,22609,6, $ua);
  }
  $ua = 'KWC-Rio/ABY1009 UP.Browser/7.2.7.2.562 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(285637,196675,22609,6, $ua);
  }
  $ua = 'KWC-Rio/ABY1009 UP.Browser/7.2.7.2.562 (GUI) MMP/2.0 Novarra-Vision/8.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(285637,196675,22609,6, $ua);
  }
  $ua = 'KWC-Rio/ACK10006 UP.Browser/7.2.7.2.563 (GUI) MMP/2.0';
  $ns = E44($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(285637,196675,22609,6, $ua);
  }
  return $dl;
}
