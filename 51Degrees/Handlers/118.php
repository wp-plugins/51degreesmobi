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
function E118(&$target, $test, &$ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 10000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 10000, $score);
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
function _H118($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Microsoft Outlook )[\\d\\.]+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Outlook 20\\d\\d)[\\d\\.]+#', $useragent));
  $ns = E118($segments, array(0 => array(0 => '14.0.4760'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.4760; Pro; ms-office; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4734'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.4734; Pro; ms-office; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.5128'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.5128; Pro; ms-office; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6023'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.6023; Pro; ms-office; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6106'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.6106; Pro; ms-office; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6112'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.6112; Pro; ms-office; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6123'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.6123; Pro)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4536'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.4536; Pro; MSOffice 14)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6129'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.6129; Pro)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.7015'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.7015; Pro)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.7106'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,486537,913, 'Microsoft Office/14.0 (Windows NT 6.1; Microsoft Outlook 14.0.7106; Pro)', '15364-7133-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4760'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.4760; Pro; ms-office; MSOffice 14)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.5128'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.5128; Pro; ms-office; MSOffice 14)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6106'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.6106; Pro; ms-office; MSOffice 14)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4734'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.4734; Pro; ms-office; MSOffice 14)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6023'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.6023; Pro)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6112'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.6112; Pro; ms-office; MSOffice 14)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6123'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.6123; Pro)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6129'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.6129; Pro)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.7015'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.7015; Pro)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.7106'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,49474,486537,913, 'Microsoft Office/14.0 (Windows NT 5.1; Microsoft Outlook 14.0.7106; Pro)', '15364-5690-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4128'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4128; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4420'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4420; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4433'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4433; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4454'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4454; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4481'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4481; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4505'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4505; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4517'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.2; Microsoft Outlook 15.0.4517; Pro)', '15364-16110-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4128'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4128; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4420'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4420; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4454'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4454; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4481'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4481; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4433'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4433; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4505'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4505; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4517'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4517; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '15.0.4535'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,95563,1000993,913, 'Microsoft Office/15.0 (Windows NT 6.1; Microsoft Outlook 15.0.4535; Pro)', '15364-7133-18618-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4760'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.4760; Pro; ms-office; MSOffice 14)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6123'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.6123; Pro)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6112'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.6112; Pro)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6023'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.6023; Pro)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6129'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.6129; Pro)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4734'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.4734; Pro; ms-office; MSOffice 14)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.5128'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.5128; Pro; ms-office; MSOffice 14)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.7015'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.7015; Pro)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.7106'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,285367,486537,913, 'Microsoft Office/14.0 (Windows NT 6.2; Microsoft Outlook 14.0.7106; Pro)', '15364-16110-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4760'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.4760; Pro; ms-office; MSOffice 14)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.5128'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.5128; Pro; ms-office; MSOffice 14)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.4734'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.4734; Pro; ms-office; MSOffice 14)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6106'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.6106; Pro; ms-office; MSOffice 14)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6112'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.6112; Pro)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6123'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.6123; Pro)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  $ns = E118($segments, array(0 => array(0 => '14.0.6129'), 1 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44218,50333,486537,913, 'Microsoft Office/14.0 (Windows NT 6.0; Microsoft Outlook 14.0.6129; Pro)', '15364-17285-18568-18092');
    $ls = $ns;
  }
  return $dl;
}
