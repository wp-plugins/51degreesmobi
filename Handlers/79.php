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
function E79($target, $test, $ls) {
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
function _H79($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'SHARP-STX2/MC.40; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.19039; U; en-US) Opera 9.50';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(18088,6476,4732,18092, $ua);
  }
  $ua = 'SHARP-STX2/MC.40 POLARIS/6.15 Profile/MIDP-2.0 Configuration/CLDC-1.1 Novarra-Vision/8.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14274,6476,4902,18092, $ua);
  }
  $ua = 'SHARP-STX2/MC.40 POLARIS/6.15 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14274,6476,4902,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.2.107 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20/1.1 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.c.1.100 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20/1.1c Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.c.1.100 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20/1.0c Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.2.107 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20/1.1 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.c.1.103 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20N/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.163 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-21/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.2.107 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-21/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.163 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TM-100/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TM-150/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.2.101 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TM-200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-T15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-L15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.111 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-A15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-E30/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.106 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX23/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.c.1.100 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX32/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.105 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ1/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.103 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ100S/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.105 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-F200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.110 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,3625,18092, $ua);
  }
  $ua = 'SHARP WX-T71';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TM-150';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TM-200';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX1';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX12';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX13';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-L15';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-A15';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX23/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX32i';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ1';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ100T';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-i98';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-V750';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-Z800';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX30/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.104 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX30/1.0 Profile/MISP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.104 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX30i/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.104 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-31/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.106 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX25/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.106 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13311,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX25/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.109 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13311,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX10/0.0 UP.Browser/6.1.0.1.148 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17130,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX10/0.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.2.129 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17130,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX10/1.1 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.6.1.101 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17130,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX10i/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.6.1.106 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17130,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX10i/1.1 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.6.1.d.2 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17130,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX17/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15018,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.110 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17116,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17116,17017,3625,18092, $ua);
  }
  $ua = 'SHARP/1.1/SH9020C/SHC001 Mozilla/5.00 (compatible) Browser/NF/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13970,17017,3976,18092, $ua);
  }
  $ua = 'SharpWXT91/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.104 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0  Novarra-Vision/8.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17557,17017,4222,18092, $ua);
  }
  $ua = 'SharpWXT91/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.104 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17557,17017,4222,18092, $ua);
  }
  $ua = 'SharpWXT91/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.101 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17557,17017,4222,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX1/0.0 UP.Browser/6.1.b.330 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX1/0.0 UP.Browser/6.1.0.3.118 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX1/1.0 UP.Browser/6.1.0.5.102 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,4901,18092, $ua);
  }
  $ua = 'SHARP-TQ-V750/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.6.1.d.1 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,4901,18092, $ua);
  }
  $ua = 'SHARP/1.0/SH9010C/SHC001 Mozilla/4.08 (compatible) Browser/NF/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14147,17017,3976,18092, $ua);
  }
  $ua = 'SharpWXT71/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.104 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13575,17017,4222,18092, $ua);
  }
  $ua = 'SharpWXT71/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.104 (GUI) Profile/MIDP-2.0 UP.Browser/7.0.2.3.119 (GUI) MMP/2.0 Push/PO';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13575,17017,4222,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX29/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.h.1.100 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16972,17017,3625,18092, $ua);
  }
  $ua = 'SHARP SH6017D / Obigo Browser Q03C';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14004,17017,3807,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX30i';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-31';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-31i';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17113,17017,17470,18092, $ua);
  }
  $ua = 'SharpWXT81/SHS001/1.0 Browser/UP.Browser/7.0.2.1.f.1.112 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12341,17017,4222,18092, $ua);
  }
  $ua = 'SHARP-TQ-V802SH';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17073,17017,17470,18092, $ua);
  }
  $ua = 'SHARP/1.1/SH1810C/SHC001 Mozilla/5.00 (compatible) Browser/NF/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15069,17017,3976,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX27/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.163 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15305,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX27/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.h.2 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15305,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX20i';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-21';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17124,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ200/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.110 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17082,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ200S/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.110 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17082,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GZ200S';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17082,17017,17470,18092, $ua);
  }
  $ua = 'SHARP SH7110C / Obigo Browser 2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14155,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX-T300/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.f.1.103 (GUI) MMP/2.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15332,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX22/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.2.107 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17120,17017,3625,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX22S/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.c.1.100 (GUI) MMP/1.0';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17120,17017,3625,18092, $ua);
  }
  $ua = 'SharpT71/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.104 (GUI) Profile/MIDP-2.0 UP.Browser/7.0.2.3.119 (GUI) MMP/2.0 Push/PO';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16993,17017,4222,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX10/1.0.5';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17130,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX15';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17116,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX27';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15305,17017,17470,18092, $ua);
  }
  $ua = 'SHARP-TQ-GX33';
  $ns = E79($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(16939,17017,17470,18092, $ua);
  }
  return $dl;
}
