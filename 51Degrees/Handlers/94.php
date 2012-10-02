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
function E94($target, $test, $ls) {
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
function _H94($useragent) {

  $ls = PHP_INT_MAX;
  $dl = array();

  // Calculate the segments for the useragent.
  $segments = array(
    0 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/)\\d\\.\\d#', $useragent),
    1 => fiftyone_degrees_preg_match_all('#(?<=Mozilla/\\d\\.\\d \\()[^;\\)]+#', $useragent),
    2 => fiftyone_degrees_preg_match_all('#Windows NT \\d\\.\\d(?=;)|Mac OS X [^\\s]+(?=;)|Ubuntu|X11|Linux i686#', $useragent));
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X Mach-O')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,135431,276675,6, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X Mach-O; en-US; rv:1.7.2) Gecko/X Netscape/7.2');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,135431,276675,6, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X; en-US; rv:1.0.2) Gecko/X AOL/7.0');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,134842,15136,6, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.1) Gecko/X firefox/3.6.1');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,134842,15136,6, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9a8) Gecko/X GranParadiso/3.0a8');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,134842,15136,6, 'Mozilla/5.0 Galeon/1.0.2 (X11; Linux i686; U;) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,44721,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.7.2) Gecko/X Netscape/7.2 (ax)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,44721,15136,6, 'K-Meleon/0.6 (Windows; U; Windows NT 5.1; en-US; rv:0.9.5) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.2')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,44721,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US; rv:1.9.1.7) Gecko/201');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0', 1 => '4.8'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1', 1 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,44721,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.3) Gecko/X Mozilla/4.8 [en] (Windows NT 5.1; U)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.6')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,183350,276675,6, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.6; en-US; rv:1.9.1.3) Gecko Expeditor 6.2.2.X-2230 Gecko/X-2230');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.7')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,350663,276675,6, 'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10.7; en-US; rv:1.9.2.10) Gecko Expeditor 6.2.2.X-1115 Gecko/X-1115');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,110069,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.3) Gecko/X Namoroka/3.6.3');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows NT 6.1'), 2 => array(0 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,110069,15136,6, 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:7.0.1) Gecko/X Postbox/3.0.2');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.5')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,60195,276675,6, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.5; en-US; rv:1.9.1.19) Gecko/X SeaMonkey/2.0.14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.1', 1 => 'Windows NT 6.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,110069,476149,6, 'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/X Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,64445,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.4) Gecko/X Netscape/7.1 (ax)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,232594,15136,6, 'Mozilla/5.0 (Windows; U; Win98; en-US; rv:1.8.0.1) Gecko/X SeaMonkey/1.0');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 6.0')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,63585,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US; rv:1.9.1.19) Gecko/X SeaMonkey/2.0.14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,63585,15136,6, 'Mozilla/5.0 (Windows; U; Windows NT 6.0 x64; en-US; rv:1.9pre) Gecko/X Minefield/3.0.2pre');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.8')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,512990,276675,6, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:7.0.1) Gecko/X Postbox/3.0.5');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Macintosh'), 2 => array(0 => 'Mac OS X 10.4')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(59266,277610,276675,6, 'Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10.4; en-US; rv:1.9.1.19) Gecko/X SeaMonkey/2.0.14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,15130,15136,6, 'Mozilla/5.0 (Windows; U; Windows CE 5.2; rv:1.8.1.4pre) Gecko/20070327 Minimo/0.020');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => NULL), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(36555,15130,15136,6, 'Mozilla/5.0 (Windows; U; Windows CE 4.21; rv:1.8b4) Gecko/X Minimo/0.007');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,461277,15136,6, 'Mozilla/5.0 (X11; U; SunOS sun4u; en-US; rv:1.7) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => NULL, 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,464034,15136,6, 'Mozilla/5.0 http://fairshare.cc (X11; U; FreeBSD i386; en-US; rv:1.2a) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,464034,15136,6, 'Mozilla/5.0 (X11; U; FreeBSD i386; en-US; rv:1.8.1.2) Gecko/X SeaMonkey/1.1.1');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => NULL, 1 => NULL, 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,457579,15136,6, 'Seamonkey-1.1.13-1(X11; U; GNU Fedora fc 10) Gecko/X');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,457579,15136,6, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.13) Gecko Fedora/1.9.2.13-3.el5');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,457579,15136,6, 'Mozilla/5.0 (X11; U; Linux i686 (x86_64); en-US; rv:1.9.2.18) Gecko Fedora/1.9.2.18-1.fc14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(479018,134842,15136,6, 'Mozilla/5.0 (X11; Linux i686; U; en-US) Gecko/X Vision-Browser/8.1 221x374 Pantech CDM8999');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(479090,134842,15136,6, 'Mozilla/5.0 (X11; Linux i686; U; en-US) Gecko/X Vision-Browser/8.1 301x200 LG VN530');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,459391,15136,6, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.14) Gecko/X Ubuntu/9.04 (jaunty) Shiretoko/3.5.14');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,459391,15136,6, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.1.3) Gecko/X Ubuntu/9.04 (jaunty) Shiretoko/3.5.3');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(100555,134842,15136,6, 'Mozilla/5.0 (X11; iPhone; Mobile; Linux i686; chrome://navigator/locale/navigator.properties; rv:1.8.0.6) Gecko/X Skylight');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,268831,15136,6, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.8.1.3) Gecko/X MEGAUPLOAD 1.0 (Ubuntu-feisty)');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,465911,15136,6, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.18pre) Gecko/X Ubuntu/9.10 (karmic) Namoroka/3.6.18pre GTB7.1');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,464027,15136,6, 'Mozilla/5.0 (X11; U; Linux x86_64; en-US; rv:1.9.2.18pre) Gecko/X Ubuntu/10.04 (lucid) Namoroka/3.6.18pre');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,464027,15136,6, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.18pre) Gecko/X Ubuntu/10.04 (lucid) Namoroka/3.6.18pre');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,44721,179816,6, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/X Waterunicorn/0.10 StumbleUpon/1.998');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686', 2 => 'Ubuntu')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(21187,457572,15136,6, 'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.2.18pre) Gecko/X Ubuntu/10.10 (maverick) Namoroka/3.6.18pre');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(41834,7664,41906,6, 'Nokia2700c-2/2.0 (09.95) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (X11; U; Linux i686; en) Gecko/UCWEB7.1.0.42/69/300');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'Windows'), 2 => array(0 => 'Windows NT 5.1')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(45878,7664,41906,6, 'Nokia5130c-2/2.0 (07.91) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (Windows; U; Windows NT 5.1; en-GB; rv:1.8.1.6) Gecko/20070725/UCWEB7.1.0.42/69/351');
    $ls = $ns;
  }
  $ns = E94($segments, array(0 => array(0 => '5.0'), 1 => array(0 => 'X11'), 2 => array(0 => 'X11', 1 => 'Linux i686')), $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
    }
    $dl[] = array(93303,7664,41906,6, 'Nokia2730c-1/2.0 (10.40) Profile/MIDP-2.1 Configuration/CLDC-1.1 Mozilla/5.0 (X11; U; Linux i686; en) Gecko/UCWEB7.1.0.42/69/300');
    $ls = $ns;
  }
  return $dl;
}
