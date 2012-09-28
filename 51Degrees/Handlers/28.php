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
function E28($target, $test, $ls) {
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
function _H28($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'BIRD_D736/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD F518/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD_D660/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 BIRD_D660/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD S918/1.00 Nucleus RTOS/V1.11.19 MTK6225/06B Release/06.20.2007 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD_D615/1.00 Nucleus RTOS/V1.11.19 MTK6227/05C_V21 Release/5.25.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD_D720/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD_D611/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD D718/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD V780/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD E818/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD K298/1.00 Nucleus RTOS/V1.11.19 MTK6223/08A Release/07.01.2008 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD /1.00 Nucleus RTOS/V1.11.19 MTK6235/08B Release/04.09.2009 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,15136,6, $ua);
  }
  $ua = 'BIRD D600/L05,1E/WAP2.0/MIDP-2.0/CLDC-1.1 Browser/UP.Browser/7.1.0.f.1.130 (GUI)';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,75797,6, $ua);
  }
  $ua = 'BIRD.D700  UP.Browser/5.0.1.1.102 (GUI)';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(21187,20173,47823,6, $ua);
  }
  $ua = 'BIRD S701_GPRS/1.0 OSE/V1.6.0 ULC/2.0 Release/04.21.2008 Browser/JB4.3  Novarra-Vision/8.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(314920,20173,15136,6, $ua);
  }
  $ua = 'BIRD S701_GPRS/1.0 OSE/V1.6.0 ULC/2.0 Release/04.21.2008 Browser/JB4.3';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(314920,20173,15136,6, $ua);
  }
  $ua = 'BIRD_D730/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 BIRD_D730/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(100483,20173,15136,6, $ua);
  }
  $ua = 'BIRD_D730/V1.0.0/2.0 Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(100483,20173,15136,6, $ua);
  }
  $ua = 'BIRD-V007';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416180,20173,15136,6, $ua);
  }
  $ua = 'BIRD-V007/SW1.1.0/WAP1.2.1 Profile/MIDP-1.0 Configuration/CLDC-1.0/Handset WAP';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416180,20173,15136,6, $ua);
  }
  $ua = 'BIRD.F501/1.00 Nucleus RTOS/V1.11.19 MTK6227/05C_V24 Release/11.21.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424855,20173,15136,6, $ua);
  }
  $ua = 'BIRD V788/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424783,20173,15136,6, $ua);
  }
  $ua = 'BIRD.A120';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(415748,20173,15136,6, $ua);
  }
  $ua = 'BIRD.A120 AU.Browser/1.2.1';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(415748,20173,15136,6, $ua);
  }
  $ua = 'BIRD.A150';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416252,20173,15136,6, $ua);
  }
  $ua = 'BIRD.A150 wxd.Mms/0311.20';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416252,20173,15136,6, $ua);
  }
  $ua = 'BIRD.S580/3.03/WAP1.2.1';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(415820,20173,15136,6, $ua);
  }
  $ua = 'BIRD.SC14';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(415964,20173,15136,6, $ua);
  }
  $ua = 'BIRD.SC24 MO130m-128x160/1.1 UP.Browser/6.1.0.6.1.c.4 (GUI) MMP/1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416036,20173,187005,6, $ua);
  }
  $ua = 'BIRD.G118';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416324,20173,15136,6, $ua);
  }
  $ua = 'BIRD.G118 MO130m-128x160/1.1 UP.Browser/6.1.0.6.1.c.4 (GUI) MMP/1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(416324,20173,187005,6, $ua);
  }
  $ua = 'BIRD V750/1.00 Nucleus RTOS/V1.11.19 MTK6227/06A Release/12.28.2006 Browser/Teleca Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E28($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(424423,20173,15136,6, $ua);
  }
  return $dl;
}
