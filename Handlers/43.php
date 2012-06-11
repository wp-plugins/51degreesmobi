<?php 
/* ********************************************************************* 
 * Auto Generated Code - Do not Edit
 *
 * See http://51degrees.mobi/Support/Documentation/PHP#AutoGeneratedSourceCode for more details.
 *
 * ********************************************************************* */
/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */

 function _H43($thisuseragent){
$patterns = array("#KDDI-\w+#" => 1);
$ls = PHP_INT_MAX;
$segmentMatches = F51DRegexSegment($thisuseragent, $patterns);
$dl = array();
$testSegments = array();
$weights = array();
$uaCount=count($segmentMatches);
for($i = 0; $i < $uaCount; $i++)
{
	foreach ($segmentMatches[$i] as $currentThis)
	{
		foreach ($currentThis as $uaSeg => $ow)
		{
			$testSegments[$i][] = $uaSeg;
			$weights[$i] = $ow;
		}
	}
}
$segmentMatches = array($testSegments, $weights);
$va0 = array("KDDI-SN3J","KDDI-AM01","KDDI-SN3S","KDDI-SH38","KDDI-SH3J","KDDI-SH3F","KDDI-SN3O","KDDI-SH3E","KDDI-CA3C","KDDI-TS3S","KDDI-CA3F","KDDI-TS3V","KDDI-SH3D","KDDI-KC3X","KDDI-SN3P","KDDI-CA31","KDDI-SN3Q","KDDI-SN3N","KDDI-CA3I","KDDI-TS3R","KDDI-SN3R","KDDI-SH3G","KDDI-HI3H","KDDI-SN3T","KDDI-SN3I","KDDI-SN3L","KDDI-CA3J","KDDI-SH3I","KDDI-SH3K","KDDI-SN3K","KDDI-TS3Q","KDDI-KC3R","KDDI-TS3W","KDDI-CA3H","KDDI-KC3O","KDDI-CA3G","KDDI-TS3X","KDDI-CA3E","KDDI-TS3P","KDDI-TS3U","KDDI-HI3E","KDDI-SN3F","KDDI-SH3B","KDDI-KC3Z","KDDI-SH3L","KDDI-CA39","KDDI-TS3O","KDDI-TS3N","KDDI-SN3M","KDDI-SN3G","KDDI-TS3D","KDDI-SN3E","KDDI-TS3I","KDDI-SH33","KDDI-CA3A","KDDI-KC42","KDDI-SN3D","KDDI-KC3S","KDDI-KC3Q","KDDI-SH34","KDDI-CA38","KDDI-MA33","KDDI-TS3H","KDDI-HI3B","KDDI-SN3B","KDDI-TS3T","KDDI-SA3A","KDDI-ST33","KDDI-KC3B","KDDI-PT36","KDDI-KC3D","KDDI-KC3H","KDDI-HI3D","KDDI-SN3A","KDDI-MA34","KDDI-KC3V","KDDI-SA3C","KDDI-TS3E","KDDI-PT33","KDDI-ST34","KDDI-TS3G","KDDI-HI36","KDDI-SH36","KDDI-KC3N","KDDI-CA37","KDDI-HI3C","KDDI-SA31","KDDI-KC3Y","KDDI-KC3P","KDDI-MA32","KDDI-CA35","KDDI-PT34","KDDI-KC3I","KDDI-CA33","KDDI-SA39","KDDI-MA35","KDDI-KC3T","KDDI-KC3U","KDDI-HI39","KDDI-HI3A","KDDI-KC3G","KDDI-MA31","KDDI-ST32","KDDI-KC39","KDDI-SA35","KDDI-KC36","KDDI-PT35","KDDI-KC3E","KDDI-CA36","KDDI-SN34","KDDI-CA34","KDDI-SH3H","KDDI-CA23","KDDI-SA27","KDDI-SH32","KDDI-HI34","KDDI-TS3J","KDDI-HI35","KDDI-SN36","KDDI-HI37","KDDI-KC3K","KDDI-KC35","KDDI-KC28","KDDI-ST27","KDDI-KC2A","KDDI-SA29","KDDI-SA2A","KDDI-PT22","KDDI-ST28","KDDI-TS34","KDDI-TS37","KDDI-KC33","KDDI-TS25","KDDI-TS32");
  $ns = E43($segmentMatches, array(array($va0[0])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17570","17017","3625","18092", "KDDI-SN3J UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[1])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("12676","17017","3976","18092", "KDDI-AM01 UP.Browser/ KJ/ Mozilla/4.0 (REX; U; en-us; Sanyo; SCP-6750/US; NetFront/3.4/AMB)");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[2])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17579","17017","3625","18092", "KDDI-SN3S UP.Browser/6.2_7.2.7.1.K.6.211 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[3])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17576","17017","3625","18092", "KDDI-SH38 UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[4])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17581","17017","3625","18092", "KDDI-SH3J UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[5])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17568","17017","3625","18092", "KDDI-SH3F UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[6])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17699","17017","3625","18092", "KDDI-SN3O UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[7])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17569","17017","3625","18092", "KDDI-SH3E UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[8])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17505","17017","3625","18092", "KDDI-CA3C UP.Browser/6.2_7.2.7.1.K.2.234 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[9])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17577","17017","3625","18092", "KDDI-TS3S UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[10])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17509","17017","3625","18092", "KDDI-CA3F UP.Browser/6.2_7.2.7.1.K.4.310 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[11])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17588","17017","3625","18092", "KDDI-TS3V UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[12])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17567","17017","3625","18092", "KDDI-SH3D UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[13])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17594","17017","3625","18092", "KDDI-KC3X UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[14])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17574","17017","3625","18092", "KDDI-SN3P UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[15])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14628","17017","3625","18168", "KDDI-CA31 UP.Browser/6.2.0.7.3.129 (GUI) MMP/2.0 (compatible; ichiro/mobile goo; +http://help.goo.ne.jp/help/article/1142/)");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[16])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17582","17017","3625","18092", "KDDI-SN3Q UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[17])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17572","17017","3625","18092", "KDDI-SN3N UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[18])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17512","17017","3625","18092", "KDDI-CA3I UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[19])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14787","17017","3625","18092", "KDDI-TS3R UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[20])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17637","17017","3625","18092", "KDDI-SN3R UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[21])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17634","17017","3625","18092", "KDDI-SH3G UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[22])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17578","17017","3625","18092", "KDDI-HI3H UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[23])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17643","17017","3625","18092", "KDDI-SN3T UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[24])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17571","17017","3625","18092", "KDDI-SN3I UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[25])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17635","17017","3625","18092", "KDDI-SN3L UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[26])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17516","17017","3625","18092", "KDDI-CA3J UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[27])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17566","17017","3625","18092", "KDDI-SH3I UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[28])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17639","17017","3625","18092", "KDDI-SH3K UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[29])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17565","17017","3625","18092", "KDDI-SN3K UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[30])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17873","17017","3625","18092", "KDDI-TS3Q UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[31])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17543","17017","3625","18092", "KDDI-KC3R UP.Browser/6.2_7.2.7.1.K.4.310 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[32])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17876","17017","3625","18092", "KDDI-TS3W UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[33])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17580","17017","3625","18092", "KDDI-CA3H UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[34])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17537","17017","3625","18092", "KDDI-KC3O UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[35])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17511","17017","3625","18092", "KDDI-CA3G UP.Browser/6.2_7.2.7.1.K.2.234 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[36])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17587","17017","3625","18092", "KDDI-TS3X UP.Browser/6.2_7.2.7.1.K.7.108 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[37])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17507","17017","3625","18092", "KDDI-CA3E UP.Browser/6.2_7.2.7.1.K.2.234 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[38])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17584","17017","3625","18092", "KDDI-TS3P UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[39])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17875","17017","3625","18092", "KDDI-TS3U UP.Browser/6.2_7.2.7.1.K.5.207 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[40])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17626","17017","3625","18092", "KDDI-HI3E UP.Browser/6.2_7.2.7.1.K.2.232 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[41])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14783","17017","3625","18092", "KDDI-SN3F UP.Browser/6.2_7.2.7.1.K.2.234 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[42])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17573","17017","3625","18092", "KDDI-SH3B UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[43])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17591","17017","3625","18092", "KDDI-KC3Z UP.Browser/6.2.0.16.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[44])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17590","17017","3625","18092", "KDDI-SH3L UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[45])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17503","17017","3625","18092", "KDDI-CA39 UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[46])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17703","17017","3625","18092", "KDDI-TS3O UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[47])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17702","17017","3625","18092", "KDDI-TS3N UP.Browser/6.2_7.2.7.1.K.3.352 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[48])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17636","17017","3625","18092", "KDDI-SN3M UP.Browser/6.2.0.14.1.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[49])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17575","17017","3625","18092", "KDDI-SN3G UP.Browser/6.2.0.14.1.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[50])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17593","17017","3625","18092", "KDDI-TS3D UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[51])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17589","17017","3625","18092", "KDDI-SN3E UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[52])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17878","17017","3625","18092", "KDDI-TS3I UP.Browser/6.2_7.2.7.1.K.1.5.1.120 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[53])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17631","17017","3625","18092", "KDDI-SH33 UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[54])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17504","17017","3625","18092", "KDDI-CA3A UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[55])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17638","17017","3625","18092", "KDDI-KC42 UP.Browser/6.2_7.2.7.1.K.6.210 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[56])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17883","17017","3625","18092", "KDDI-SN3D UP.Browser/6.2_7.2.7.1.K.1.5.1.120 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[57])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17535","17017","3625","18092", "KDDI-KC3S UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[58])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17541","17017","3625","18092", "KDDI-KC3Q UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[59])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17632","17017","3625","18092", "KDDI-SH34 UP.Browser/6.2.0.13.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[60])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17501","17017","3625","18092", "KDDI-CA38 UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[61])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17555","17017","3625","18092", "KDDI-MA33 UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[62])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14770","17017","3625","18092", "KDDI-TS3H UP.Browser/6.2_7.2.7.1.K.1.5.1.120 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[63])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17525","17017","3625","18092", "KDDI-HI3B UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[64])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17641","17017","3625","18092", "KDDI-SN3B UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[65])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17874","17017","3625","18092", "KDDI-TS3T UP.Browser/6.2_7.2.7.1.K.4.306 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[66])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17630","17017","3625","18092", "KDDI-SA3A UP.Browser/6.2.0.13.1.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[67])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17645","17017","3625","18092", "KDDI-ST33 UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[68])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17528","17017","3625","18092", "KDDI-KC3B UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[69])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17628","17017","3625","18092", "KDDI-PT36 UP.Browser/6.2.0.17.2.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[70])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17530","17017","3625","18092", "KDDI-KC3D UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[71])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17533","17017","3625","18092", "KDDI-KC3H UP.Browser/6.2.0.14.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[72])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17877","17017","3625","18092", "KDDI-HI3D UP.Browser/6.2_7.2.7.1.K.2.234 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[73])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17592","17017","3625","18092", "KDDI-SN3A UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[74])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17556","17017","3625","18092", "KDDI-MA34 UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[75])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17549","17017","3625","18092", "KDDI-KC3V UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[76])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17583","17017","3625","18092", "KDDI-SA3C UP.Browser/6.2_7.2.7.1.K.1.5.1.120 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[77])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17862","17017","3625","18092", "KDDI-TS3E UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[78])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17705","17017","3625","18092", "KDDI-PT33 UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[79])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17647","17017","3625","18092", "KDDI-ST34 UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[80])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17642","17017","3625","18092", "KDDI-TS3G UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[81])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17517","17017","3625","18092", "KDDI-HI36 UP.Browser/6.2.0.10.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[82])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17633","17017","3625","18092", "KDDI-SH36 UP.Browser/6.2.0.14.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[83])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17536","17017","3625","18092", "KDDI-KC3N UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[84])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17499","17017","3625","18092", "KDDI-CA37 UP.Browser/6.2.0.12.1.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[85])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17527","17017","3625","18092", "KDDI-HI3C UP.Browser/6.2.0.13.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[86])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17629","17017","3625","18092", "KDDI-SA31 UP.Browser/6.2.0.7.3.129 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[87])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17627","17017","3625","18092", "KDDI-KC3Y UP.Browser/6.2.0.17.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[88])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17538","17017","3625","18092", "KDDI-KC3P UP.Browser/6.2.0.15.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[89])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17550","17017","3625","18092", "KDDI-MA32 UP.Browser/6.2.0.12.1.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[90])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17498","17017","3625","18092", "KDDI-CA35 UP.Browser/6.2.0.11.1.3.110 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[91])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17857","17017","3625","18092", "KDDI-PT34 UP.Browser/6.2.0.14.3.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[92])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17534","17017","3625","18092", "KDDI-KC3I UP.Browser/6.2.0.14.1.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[93])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17494","17017","3625","18092", "KDDI-CA33 UP.Browser/6.2.0.10.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[94])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17864","17017","3625","18092", "KDDI-SA39 UP.Browser/6.2.0.12.1.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[95])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17855","17017","3625","18092", "KDDI-MA35 UP.Browser/6.2_7.2.7.1.K.2.225 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[96])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17545","17017","3625","18092", "KDDI-KC3T UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[97])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17547","17017","3625","18092", "KDDI-KC3U UP.Browser/6.2.0.15.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[98])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17522","17017","3625","18092", "KDDI-HI39 UP.Browser/6.2.0.12.1.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[99])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17523","17017","3625","18092", "KDDI-HI3A UP.Browser/6.2.0.13.1.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[100])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17704","17017","3625","18092", "KDDI-KC3G UP.Browser/6.2.0.14.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[101])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17854","17017","3625","18092", "KDDI-MA31 UP.Browser/6.2.0.11.1.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[102])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17644","17017","3625","18092", "KDDI-ST32 UP.Browser/6.2.0.13.1.5 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[103])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17881","17017","3625","18092", "KDDI-KC39 UP.Browser/6.2.0.12.1.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[104])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17861","17017","3625","18092", "KDDI-SA35 UP.Browser/6.2.0.9.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[105])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17852","17017","3625","18092", "KDDI-KC36 UP.Browser/6.2.0.10.2.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[106])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17858","17017","3625","18092", "KDDI-PT35 UP.Browser/6.2.0.15.1.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[107])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17532","17017","3625","18092", "KDDI-KC3E UP.Browser/6.2.0.11.1.2.2e (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[108])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17847","17017","3625","18092", "KDDI-CA36 UP.Browser/6.2.0.10.3.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[109])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17868","17017","3625","18092", "KDDI-SN34 UP.Browser/6.2.0.10.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[110])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17495","17017","3625","18092", "KDDI-CA34 UP.Browser/6.2.0.10.3.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[111])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17867","17017","3625","18092", "KDDI-SH3H UP.Browser/6.2_7.2.7.1.K.5.179 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[112])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17846","17017","3625","18092", "KDDI-CA23 UP.Browser/6.2.0.5.136 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[113])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17859","17017","3625","18092", "KDDI-SA27 UP.Browser/6.2.0.6.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[114])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17865","17017","3625","18092", "KDDI-SH32 UP.Browser/6.2.0.11.2.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[115])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17848","17017","3625","18092", "KDDI-HI34 UP.Browser/6.2.0.7.3.129 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[116])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17872","17017","3625","18092", "KDDI-TS3J UP.Browser/6.2_7.2.7.1.K.2.179 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[117])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17849","17017","3625","18092", "KDDI-HI35 UP.Browser/6.2.0.9.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[118])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17640","17017","3625","18092", "KDDI-SN36 UP.Browser/6.2.0.10.4 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[119])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17520","17017","3625","18092", "KDDI-HI37 UP.Browser/6.2.0.10.3.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[120])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17853","17017","3625","18092", "KDDI-KC3K UP.Browser/6.2.0.14.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[112])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17846","17017","17470","18092", "KDDI-CA23");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[121])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17880","17017","3625","18092", "KDDI-KC35 UP.Browser/6.2.0.10.2.2 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[122])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17850","17017","3625","18092", "KDDI-KC28 UP.Browser/6.2.0.10.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[123])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17869","17017","3625","18092", "KDDI-ST27 UP.Browser/6.2.0.9 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[124])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17879","17017","3625","18092", "KDDI-KC2A UP.Browser/6.2.0.13.3 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[125])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17882","17017","3625","18092", "KDDI-SA29 UP.Browser/6.2.0.10.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[126])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17860","17017","3625","18092", "KDDI-SA2A UP.Browser/6.2.0.10.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[127])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17856","17017","3625","18092", "KDDI-PT22 UP.Browser/6.2.0.10.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[128])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17646","17017","3625","18092", "KDDI-ST28 UP.Browser/6.2.0.10.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[129])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17870","17017","3625","18092", "KDDI-TS34 UP.Browser/6.2.0.10.2.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[130])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17871","17017","3625","18092", "KDDI-TS37 UP.Browser/6.2.0.10.3.3.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[131])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17851","17017","3625","18092", "KDDI-KC33 UP.Browser/6.2.0.9 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[132])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17701","17017","17470","18092", "KDDI-TS25");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[15])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14628","17017","17470","18092", "KDDI-CA31");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[68])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17528","17017","17470","18092", "KDDI-KC3B");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[104])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17861","17017","17470","18092", "KDDI-SA35");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[67])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17645","17017","17470","18092", "KDDI-ST33");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[110])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17495","17017","17470","18092", "KDDI-CA34");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[131])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17851","17017","17470","18092", "KDDI-KC33");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[130])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17871","17017","17470","18092", "KDDI-TS37");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[133])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17023","17017","3625","18092", "KDDI-TS32 UP.Browser/6.2.0.9.1 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[77])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17862","17017","17470","18092", "KDDI-TS3E");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[50])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17593","17017","17470","18092", "KDDI-TS3D");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[79])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17647","17017","17470","18092", "KDDI-ST34");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[123])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17869","17017","17470","18092", "KDDI-ST27");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[41])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14783","17017","17470","18092", "KDDI-SN3F");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[51])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17589","17017","17470","18092", "KDDI-SN3E");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[64])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17641","17017","17470","18092", "KDDI-SN3B");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[73])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17592","17017","17470","18092", "KDDI-SN3A");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[118])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17640","17017","17470","18092", "KDDI-SN36");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[109])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17868","17017","17470","18092", "KDDI-SN34");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[59])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17632","17017","17470","18092", "KDDI-SH34");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[53])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17631","17017","17470","18092", "KDDI-SH33");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[114])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17865","17017","17470","18092", "KDDI-SH32");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[66])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17630","17017","17470","18092", "KDDI-SA3A");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[126])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17860","17017","17470","18092", "KDDI-SA2A");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[78])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17705","17017","17470","18092", "KDDI-PT33");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[127])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17856","17017","17470","18092", "KDDI-PT22");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[89])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17550","17017","17470","18092", "KDDI-MA32");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[71])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17533","17017","17470","18092", "KDDI-KC3H");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[70])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17530","17017","17470","18092", "KDDI-KC3D");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[105])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17852","17017","17470","18092", "KDDI-KC36");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[121])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17880","17017","17470","18092", "KDDI-KC35");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[72])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17877","17017","17470","18092", "KDDI-HI3D");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[63])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17525","17017","17470","18092", "KDDI-HI3B");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[99])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17523","17017","17470","18092", "KDDI-HI3A");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[98])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17522","17017","17470","18092", "KDDI-HI39");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[119])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17520","17017","17470","18092", "KDDI-HI37");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[81])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17517","17017","17470","18092", "KDDI-HI36");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[117])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17849","17017","17470","18092", "KDDI-HI35");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[54])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17504","17017","17470","18092", "KDDI-CA3A");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[60])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17501","17017","17470","18092", "KDDI-CA38");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[84])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17499","17017","17470","18092", "KDDI-CA37");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[15])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("14628","17017","3625","18092", "KDDI-CA31 UP.Browser/6.2.0.7.3.129 (GUI) MMP/2.0");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[125])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17882","17017","17470","18092", "KDDI-SA29");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[85])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17527","17017","17470","18092", "KDDI-HI3C");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[115])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17848","17017","17470","18092", "KDDI-HI34");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[40])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17626","17017","17470","18092", "KDDI-HI3E");$ls = $ns;}
  $ns = E43($segmentMatches, array(array($va0[34])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17537","17017","17470","18092", "KDDI-KC3O");$ls = $ns;}
 return $dl;}
function E43(&$thisUA, $toTest, &$ls)
{
	$deviceTotal = 0;$uaCount=count($thisUA[0]);
	for($i = 0; $i < $uaCount; $i++){$segCount = count($thisUA[0][$i]);if($segCount != count($toTest[$i])){return PHP_INT_MAX;}
	for($ind = 0; $ind < $segCount; $ind++){$deviceTotal += (F51DEditDistance($thisUA[0][$i][$ind], $toTest[$i][$ind], $ls) * $thisUA[1][$i]);if($deviceTotal > $ls){return $deviceTotal;}}}
	return $deviceTotal;
}
 ?>
