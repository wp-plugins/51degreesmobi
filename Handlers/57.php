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
function E57($target, $test, $ls) {
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
function _H57($useragent) {
  $ls = PHP_INT_MAX;
  $dl = array();
  $ua = 'NEXIAN Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G857/MTK Release/10.1.2009 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G506/MTK Release/01.01.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G253/MTK Release/01.01.2010 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G252/MTK Release/01.01.2010 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G315/MTK Release/10.1.2009 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G256/MTK Release/01.01.2010 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G236/MTK Release/01.01.2010 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G268/MTK Release/15.02.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G857/MTK Release/10.1.2009 Browser/MAUI Profile Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G262/MTK Release/19.04.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G233/MTK Release/13.07.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G225/MTK Release/02.18.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G311/MTK Release/30.05.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G332/MTK Release/22.11.2007 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNXG311T/MTK Release/20.09.2011 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G967/MTK  Release/01.01.2011/MAUI Browser/Opera Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; U; id-ID) Presto/2.5.28 Version/10.10';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G963/MTK  Release/01.01.2011/MAUI Browser/Opera Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; U; en-US) Presto/2.5.28 Version/10.10';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G963/MTK Release/01.01.2011/MAUI Browser/Opera Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; U; id-ID) Presto/2.5.28 Version/10.10';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G963/MTK  Release/01.01.2011/MAUI Browser/Opera Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; U; id-ID) Presto/2.5.28 Version/10.10';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G967/MTK  Release/01.01.2011/MAUI Browser/Opera Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; U; en-US) Presto/2.5.28 Version/10.10';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-T911/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-T922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-D980/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G900/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-T905/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-D981/MTK Release/23.3.2010 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G915/MTK Release/27.11.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'Nexian-NXG777/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-T901/MTK Release/19.04.2011 Browser/MAUI Profile/MIDP2.0Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-A725/MTK Release/12.07.2011 Browser/MAUI Profile/MIDP2.0Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G925/MTK Release/01.01.2010 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-T908/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G269/MTK Release/01.01.2012 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-T910/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G855/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15364,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0,gzip(gfe) AppEngine-Google; (+http://code.google.com/appengine; appid: wap-proxy)';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.ml; profile=http://www.wapforuml; profile=http://www.wapforum.org/xhtml, application/vnd.wwap.wmlc, application/vnd.wap.wap.wmlc, application/vnd.wap.wmlscriptc, text/vn';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTK Release/7.15.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0,gzip(gfe) AppEngine-Google; (+http://code.google.com/appengine; appid: 244hours)';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G868/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15666,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G868/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15666,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G868T/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15666,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G965/MTK Release/21.04.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1  Opera/9.80 (MTK; Nucleus; U; en-US) Presto/2.4.18 Version/10.00';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17563,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G965/MTK Release/21.04.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; Nucleus; U; id-ID) Presto/2.4.18 Version/10.00';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17563,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G965/MTK Release/21.04.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1 Opera/9.80 (MTK; Nucleus; U; en-US) Presto/2.4.18 Version/10.00';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17563,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G965/MTK Release/21.04.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1  Opera/9.80 (MTK; Nucleus; U; id-ID) Presto/2.4.18 Version/10.00';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17563,17017,4393,18092, $ua);
  }
  $ua = 'NexianNX-G869/MTK Release/01.01.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12891,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G869/MTK Release/01.01.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12891,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G508/MTK Release/10.01.2009 Browser/MAUI profile/No Java';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15400,17017,4528,18092, $ua);
  }
  $ua = 'Nexian NX-G508/MTK Release/10.01.2009 Browser/MAUI profile/No Java Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15400,17017,4528,18092, $ua);
  }
  $ua = 'NexianNX-G821/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14522,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G821/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14522,17017,4780,18092, $ua);
  }
  $ua = 'Nexian-NXG821/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14522,17017,4780,18092, $ua);
  }
  $ua = 'Nexian-NXG821/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14522,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G801/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17562,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G801/MTK Release/5.12.2011 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17562,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G801/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17562,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G912/MTK Release/27.11.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17564,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G912/MTK Release/27.11.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17564,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G507/MTK Release/10.01.2009 Browser';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12986,17017,17470,18092, $ua);
  }
  $ua = 'Nexian NX-G507/MTK Release/10.01.2009 Browser Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12986,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G353/MTK Release/01.01.2010 Browser/MAUI Profile Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15105,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G353/MTK Release/01.01.2010 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15105,17017,18246,18092, $ua);
  }
  $ua = 'Nexian NX-G505/MTK Release/10.1.2009 browser/MAUI Profile/MIDP-2.0 configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12986,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G505/MTK Release/10.1.2009 browser/MAUI Profile/MIDP-2.0 configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12986,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G509/MTK Release/10.01.2009 Browser/MAUI Profile Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15400,17017,18246,18092, $ua);
  }
  $ua = 'Nexian NX-G509/MTK Release/10.01.2009 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15400,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G889/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15726,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G889/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15726,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G331/MTK Release/02.09.2009 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12770,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G331/MTK Release/02.09.2009 Browser/MAUI Profile Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12770,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G235/MTK Release/10.01.2010 Browser/MAUI profile Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13069,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G235/MTK Release/10.01.2010 Browser/MAUI profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13069,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-NXT901/MTKRelease/11-20-2010Browser/MAUIProfile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14524,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-NXT901/MTKRelease/11-20-2010Browser/MAUIProfile Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14524,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-W750/MTK Release/01.01.2010 Browser/MAUI Profile/MIDP2.0 Configuration/CLCD-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15724,17017,4780,18092, $ua);
  }
  $ua = 'NEXIAN NX-G911';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17903,17017,17470,18092, $ua);
  }
  $ua = 'NEXIAN NX-G911 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17903,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-T780/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17904,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G920/MTK Release/01.01.2010 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15749,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-W755/MTK Release/01.01.2011 Browser/MAUI Profile/MIDP2.0Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13096,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-T909/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15691,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-T909/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15691,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G730/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15706,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G730/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15706,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-NXT901U/MTK Release/11-20-2010 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14524,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G901/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14524,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G505/MTK Release/10.01.2009 Browser/MAUI Profile/No Java';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12986,17017,4528,18092, $ua);
  }
  $ua = 'Nexian NX-G733/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13126,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G733/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1 Novarra-Vision/8.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13126,17017,4780,18092, $ua);
  }
  $ua = 'NexianNXG798/MTK Release/10.1.2009 Browser/MAUI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12912,17017,4780,18092, $ua);
  }
  $ua = 'Nexian NX-G733/MTK Release/10.01.2009/Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13126,17017,18246,18092, $ua);
  }
  $ua = 'Nexian NX-G733/MTK Release/10.01.2009 Browser/MAUI Profile';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13126,17017,18246,18092, $ua);
  }
  $ua = 'NexianNX-G988/MTK Release/10.01.2009 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15544,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G780/MTK Release/01.01.2011 Browser/MAUI Profile/MIDP2.0Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12905,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G272/MTK Release/01.01.2011 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(12911,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G755/SPR Release/01.03.2011 Browser/Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13071,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G238/MTK Release/22.11.2007 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13150,17017,4780,18092, $ua);
  }
  $ua = 'Nexian-NX250 D/1.0 RTKE_OS/01.00 Dragonfly6120/1.0 TMSS-Browser/1.0.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(13524,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G933/MTK Release/01.01.2010 Browser/MAUI Profile/MIDP2.0 Configuration/CLDC-1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15721,17017,4780,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTK Release/7.15.2009 Browiguration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G922/MTKI Profile/MIDP-2.0 ConfiguratiI Profile/MIDP-2.0 Configuration/CLDC-1.0';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15224,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-T780/MTK Profile/MIDP-2.0 Configuration/CLDC-1.1';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(17904,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-W750';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15724,17017,17470,18092, $ua);
  }
  $ua = 'Nexian NX-G509';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15400,17017,17470,18092, $ua);
  }
  $ua = 'Nexian NX-G508';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15400,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G933';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15721,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G868';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15666,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G889';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15726,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G730';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15706,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G353';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15105,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-NXT901';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(14524,17017,17470,18092, $ua);
  }
  $ua = 'Nexian NX-T909';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15691,17017,17470,18092, $ua);
  }
  $ua = 'NexianNX-G988';
  $ns = E57($useragent, $ua, $ls);
  if ($ns <= $ls) {
    if ($ns < $ls) {
      unset($dl);
      $ls = $ns;
    }
    $dl[] = array(15544,17017,17470,18092, $ua);
  }
  return $dl;
}
