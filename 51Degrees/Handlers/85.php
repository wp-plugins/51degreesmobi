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
function E85($target, $test, $ls) {
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
function _H85($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'SHARP-STX2/MC.40; Mozilla/5.0 (Profile/MIDP-2.0 Configuration/CLDC-1.1; Opera Mini/att/4.2.19039; U; en-US) Opera 9.50';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(28561,150518,141706,913, $ua, '18088-6476-4732-18092');
  }
  $ua = 'SharpReader/0.9.7.0 (.NET CLR 2.0.50727.5466; WinNT 6.1.7601 Service Pack 1)';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273254,95563,272298,913, $ua, '18254-7133-18245-18092');
  }
  $ua = 'SHARP-STX2/MC.40 POLARIS/6.15 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(353893,150518,147764,913, $ua, '14274-6476-4902-18092');
  }
  $ua = 'SharpReader/0.9.7.0 (.NET CLR 2.0.50727.6400; WinNT 6.2.9200.0)';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(273254,285367,272298,913, $ua, '18254-16110-18245-18092');
  }
  $ua = 'SHARP-TQ-GX17/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(193883,193955,12619,913, $ua, '15018-19944-3625-18092');
  }
  $ua = 'SHARP-TQ-GX30/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.104 (GUI) MMP/1.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(379013,193955,12619,913, $ua, '17113-19944-3625-18092');
  }
  $ua = 'SHARP-TQ-GX30i/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.6.c.1.104 (GUI) MMP/1.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(379013,193955,12619,913, $ua, '17113-19944-3625-18092');
  }
  $ua = 'SHARP-TQ-GX25/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.d.1.109 (GUI) MMP/2.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(352309,193955,12619,913, $ua, '13311-19944-3625-18092');
  }
  $ua = 'SHARP-TQ-GX15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.110 (GUI) MMP/2.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312947,193955,12619,913, $ua, '17116-19944-3625-18092');
  }
  $ua = 'SHARP-TQ-GX15/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.2.d.1.112 (GUI) MMP/2.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(312947,193955,12619,913, $ua, '17116-19944-3625-18092');
  }
  $ua = 'SHARP SH6017D / Obigo Browser Q03C';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(346758,27598,98811,913, $ua, '14004-17017-3807-18092');
  }
  $ua = 'SHARP-TQ-GX29/1.0 Profile/MIDP-2.0 Configuration/CLDC-1.0 UP.Browser/6.2.3.3.h.1.100 (GUI) MMP/2.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(353533,193955,12619,913, $ua, '16972-19944-3625-18092');
  }
  $ua = 'SHARP/1.1/SH9020C/SHC001 Mozilla/5.00 (compatible) Browser/NF/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(345462,27598,15775,913, $ua, '13970-17017-3976-18092');
  }
  $ua = 'SHARP/1.0/SH9010C/SHC001 Mozilla/4.08 (compatible) Browser/NF/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(349861,27598,15775,913, $ua, '14147-17017-3976-18092');
  }
  $ua = 'SHARP/1.1/SH1810C/SHC001 Mozilla/5.00 (compatible) Browser/NF/3.4 Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(199018,27598,15775,913, $ua, '15069-17017-3976-18092');
  }
  $ua = 'SHARP-TQ-GX10i/1.1 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.1.0.6.1.d.2 (GUI) MMP/1.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(418676,193955,205920,913, $ua, '17130-19944-4901-18092');
  }
  $ua = 'SHARP-TQ-GX27/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.4.163 (GUI) MMP/1.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(214132,193955,12619,913, $ua, '15305-19944-3625-18092');
  }
  $ua = 'SHARP SH7110C / Obigo Browser 2.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(350293,27598,54471,913, $ua, '14155-17017-17470-18092');
  }
  $ua = 'SharpWXT91/SHS001/1.0 Browser/UP.Browser/7.0.2.1a.f.1.101 (GUI) Profile/MIDP-2.0 Configuration/CLDC-1.1 Ext-J-Profile/JSCL-1.2.2 Ext-V-Profile/VSCL-2.0.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(372168,27598,180969,913, $ua, '17557-17017-4222-18092');
  }
  $ua = 'SHARP-TQ-GX20/1.0 Profile/MIDP-1.0 Configuration/CLDC-1.0 UP.Browser/6.2.2.2.107 (GUI) MMP/1.0';
  $ns = E85($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(249504,193955,12619,913, $ua, '17124-19944-3625-18092');
  }
  return $dl;
}
