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
function E64($target, $test, $ls) {
  $score = 0;
  fiftyone_degrees_calculate_segment_score($target[0], $test[0], $ls, 1000, $score);
  if ($score == PHP_INT_MAX) {
    return PHP_INT_MAX;
  }
  fiftyone_degrees_calculate_segment_score($target[1], $test[1], $ls, 1000, $score);
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
function _H64($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Version/)\\d+\\.\\d+#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=\\()[^;]+#', $useragent));
  $ns = E64($segments, array(0 => array(0 => '11.50'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,551738,6, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/14; U; en-GB) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.50'), 1 => array(0 => 'Linux armv6l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,551738,6, 'Opera/9.80 (Linux armv6l; Maemo; Opera Mobi/14; U; en) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,163320,6, 'Opera/9.80 (S60; SymbOS; Opera Mobi/498; U; en-GB) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'Windows Mobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(128030,16329,163320,6, 'Opera/9.80 (Windows Mobile; WCE; Opera Mobi/WMD-50433; U; en) Presto/2.4.13 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,167488,6, 'Opera/9.80 (S60; SymbOS; Opera Mobi/1209; U; en-GB) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.10'), 1 => array(0 => 'MTK')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,20547,167488,6, 'ASTRO36_TD/v3 MAUI/10A1032MP_ASTRO_W1052 Release/31.12.2010 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; id-ID) Presto/2.5.28 Version/10.10');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.00'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,591506,6, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; ru) Presto/2.10.254 Version/12.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.50'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,551738,6, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; en-US) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.00'), 1 => array(0 => 'Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,16329,591506,6, 'Opera/9.80 (Windows; Opera Mobi/35779; U; en) Presto/2.10.254 Version/12.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Microsoft Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,16329,19330,6, 'Opera/9.51 Beta (Microsoft Windows; PPC; Opera Mobi/1718; U; en)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'WindowsMobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36506,16329,51153,6, 'Opera/9.7 (WindowsMobile; PPC; Opera Mobi/35267; U; en; Presto/2.1.1)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.10'), 1 => array(0 => 'MTK')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,23545,167488,6, 'Mot-WX308/v3 BTSTLE_G_0A.22.04RPS Release/10.11.2011 Browser/Opera Profile/MIDP-2.0 Configuration/CLDC-1.1 Sync/SyncClient1.1 Opera/9.80 (MTK; Nucleus; Opera Mobi/4000; U; en-US) Presto/2.5.28 Version/10.10');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.00'), 1 => array(0 => 'Linux')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,591506,6, 'Opera/9.80 (Linux; Opera Mobi/8; MeeGo; U; en-GB) Presto/2.10.254 Version/12.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.10'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,658831,6, 'Opera/9.80 (Linux armv7l; Opera Mobi/1; MeeGo) Presto/2.11.355 Version/12.10');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.10'), 1 => array(0 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,658831,6, 'Opera/9.80 (Linux i686; Opera Mobi/46154; MeeGo) Presto/2.11.355 Version/12.10');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.00'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,428548,6, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; es-ES) Presto/2.7.81 Version/11.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.10'), 1 => array(0 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,432665,6, 'Opera/9.80 (S60; SymbOS; Opera Mobi/SYB-X; U; sv) Presto/2.8.149 Version/11.10');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'Macintosh')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(61820,146452,163320,6, 'Opera/9.80 (Macintosh; Intel Mac OS X; Opera Mobi/27; U; en) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.00'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,428548,6, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/9; U; en-GB) Presto/2.7.81 Version/11.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Opera Mobi/498)')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,20547,361045,6, 'Opera/9.80 (Opera Mobi/498)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'MTK')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,20547,163320,6, 'Opera/9.80 (MTK; Nucleus; Opera Mobi/2167; U; en-US) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,167488,6, 'Opera/9.80 (Linux armv7l; Maemo; Opera Mobi/4; U; en-GB) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,167488,6, 'Opera/9.80 (Linux i686; Opera Mobi/7457; U; en) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,46332,361045,6, 'Opera/9.80 (Windows NT 5.1; U; Opera Mobi; de; CEB-42)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.54'), 1 => array(0 => 'J2ME/MIDP', 1 => 'S60')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(168424,168524,567212,6, 'Opera/9.80 (J2ME/MIDP; Opera Mini/9.80 (S60; SymbOS; Opera Mobi/23.348; U; en) Presto/2.5.25 Version/10.54');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Windows Mobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(128030,16329,51153,6, 'Opera/9.7 (Windows Mobile; PPC; Opera Mobi/35166; U; en) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.50'), 1 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,46332,551738,6, 'Opera/9.80 (Windows NT 5.1; Opera Mobi/23731; U; en) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Microsoft Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(178300,16329,19330,6, 'SEX1i/R3AA Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15431; U; NL)  Profile/MIDP-2.0 Configuration/CLDC-1.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SN3S')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(634282,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SN3S; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-KC46')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,282432,163320,6, 'Mozilla/5.0 Opera/9.80 (KDDI-KC46; BREW; Opera Mobi; U; ja) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-CA3I')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(645759,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-CA3I; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SN3T')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(645937,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SN3T; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'Windows NT 6.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,67164,163320,6, 'Opera/9.80 (Windows NT 6.0; Opera Mobi/49; U; en) Presto/2.4.18 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '12.00'), 1 => array(0 => 'Mac OS X')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(61820,146452,591506,6, 'Opera/9.80 (Mac OS X; Opera Mobi/35779; U; en) Presto/2.10.254 Version/12.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-TS3S')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(629512,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-TS3S; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-CA3F')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(633361,282432,19330,6, 'Mozilla/5.0 Opera/9.5 (KDDI-CA3F; BREW; Opera Mobi; U; ja) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-CA3H')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(645670,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-CA3H; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SN3Q')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(615718,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SN3Q; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.50'), 1 => array(0 => 'Macintosh')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(61820,146452,551738,6, 'Opera/9.80 (Macintosh; Intel Mac OS X; Opera Mobi/23731; U; en) Presto/2.9.201 Version/11.50');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SH3K')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(635594,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3K; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-TS3V')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(657902,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-TS3V; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-SH3F')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(645848,282432,19330,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3F; BREW; Opera Mobi; U; ja) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SN3P')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(645581,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SN3P; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SH3J')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(660697,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3J; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SN3R')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(656792,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SN3R; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-TS3R')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(615422,282432,19330,6, 'Mozilla/5.0 Opera/9.5 (KDDI-TS3R; BREW; Opera Mobi; U; ja) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'KDDI-SH3G')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(615511,282432,163320,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3G; BREW; Opera Mobi; U; ja) Presto/2.4.15 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'Opera) Vodafone/1.0/HPiPAQDataMessenger/1.00.00 Browser/Opera/9.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.5 (Microsoft Windows')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(44396,16329,19330,6, '(Opera) Vodafone/1.0/HPiPAQDataMessenger/1.00.00 Browser/Opera/9.5 Profile/MIDP-2.0 Configuration/CLDC-1.1 Opera/9.5 (Microsoft Windows; PPC; Opera Mobi/15142; U; en)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '11.00'), 1 => array(0 => 'Macintosh')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(61820,146452,428548,6, 'Opera/9.80 (Macintosh; Intel Mac OS X; Opera Mobi/14316; U; en) Presto/2.7.81 Version/11.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-SH3D')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(615600,282432,19330,6, 'Mozilla/5.0 Opera/9.5 (KDDI-SH3D; BREW; Opera Mobi; U; ja) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Windows NT 6.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,67164,167488,6, 'Opera/9.80 (Windows NT 6.0; Opera Mobi/7457; U; en) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.00'), 1 => array(0 => 'Linux armv7l')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,145607,163320,6, 'Opera/9.80 (Linux armv7l; U; Maemo; Opera Mobi/3; en-GB) Presto/2.5.26 Version/10.00');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Windows Mobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(128030,16329,167488,6, 'Opera/9.80 (Windows Mobile; WCE; Opera Mobi/7457; U; en) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'WindowsMobile')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,16329,51153,6, 'Opera/9.7 (WindowsMobile;PPC; Opera Mobi/35267; U; en; Presto/2.1.1)');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => NULL, 1 => array(0 => 'KDDI-TS3O')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(489827,282432,19330,6, 'Mozilla/5.0 Opera/9.5 (KDDI-TS3O; BREW; Opera Mobi; U; en) Presto/2.2.1');
    $ls = $ns;
  }
  $ns = E64($segments, array(0 => array(0 => '10.1'), 1 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(20443,118535,167488,6, 'Opera/9.80 (Windows NT 6.1; Opera Mobi/7457; U; fr) Presto/2.5.28 Version/10.1');
    $ls = $ns;
  }
  return $dl;
}
