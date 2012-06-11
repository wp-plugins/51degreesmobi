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

 function _H84($thisuseragent){
$patterns = array("#(?<=TIANYU-KTOUCH/)[^/\b]+#" => 100000,"#.+#" => 2);
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
$va0 = array("A630","A660","A662","A691","A907","B2012","B2015","C500","C800","D172","D702","D770","D780","D788","DT28","H800","H711","V760","V918","D772","DT200","A610","D159","D175","X90","A927","FT05","A930","H699","X260","H688","V908","V908|V908","H999","B832","H677","H877","V388","E62","H777","A7726","B2010","D6600","L65","A665");$va1 = array("TIANYU-KTOUCH/A630","TIANYU-KTOUCH/A660","TIANYU-KTOUCH/A662","TIANYU-KTOUCH/A691","TIANYU-KTOUCH/A907","TIANYU-KTOUCH/B2012","TIANYU-KTOUCH/B2015","TIANYU-KTOUCH/C500","TIANYU-KTOUCH/C800","TIANYU-KTOUCH/D172","TIANYU-KTOUCH/D702","TIANYU-KTOUCH/D770","TIANYU-KTOUCH/D780","TIANYU-KTOUCH/D788","TIANYU-KTOUCH/DT28","TIANYU-KTOUCH/H800","TIANYU-KTOUCH/H711","TIANYU-KTOUCH/V760","TIANYU-KTOUCH/V918","TIANYU-KTOUCH/D772/Screen-176X220","TIANYU-KTOUCH/DT200/MIDP2.0/CLDC1.1/Screen-240x320","TIANYU-KTOUCH/A610/Screen-176X220","TIANYU-KTOUCH/D159/Screen-128X128","TIANYU-KTOUCH/D175/Screen-128X160","TIANYU-KTOUCH/X90/MIDP2.0/CLDC1.1/Screen-320X240","TIANYU-KTOUCH/A927/MIDP2.0/CLDC1.1/Screen-240x320","TIANYU-KTOUCH/FT05/MIDP2.0/CLDC1.1/Screen-240X320","TIANYU-KTOUCH/A930/Screen-240X320","TIANYU-KTOUCH/A930/Screen-240X320 Novarra-Vision/8.0","TIANYU-KTOUCH/A930","TIANYU-KTOUCH/H699","TIANYU-KTOUCH/H699/Screen-176X220","TIANYU-KTOUCH/X260","TIANYU-KTOUCH/X260/Screen-176X220","TIANYU-KTOUCH/H688/Screen-176X220","TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320 Profile/MIDP-2.0 Configuration/CLDC-1.1","TIANYU-KTOUCH/V908","TIANYU-KTOUCH/V908|V908/MIDP2.0/CLDC1.1/Screen-240x320","TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320","TIANYU-KTOUCH/H999","TIANYU-KTOUCH/H999/MIDP2.0/CLDC1.1/Screen-320X240","TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320","TIANYU-KTOUCH/H677/Screen-176X220","TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240 Profile/MIDP-2.1 Configuration/CLDC-1.1","TIANYU-KTOUCH/H877","TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240","TIANYU-KTOUCH/V388/MIDP2.0/CLDC1.1/Screen-240X320","TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400 Profile/MIDP-2.0 Configuration/CLDC-1.1","TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400","TIANYU-KTOUCH/H777/MIDP2.0/CLDC1.1/Screen-320X240 Profile/MIDP-2.1 Configuration/CLDC-1.1","TIANYU-KTOUCH/H777/MIDP2.0/CLDC1.1/Screen-320X240","TIANYU-KTOUCH/A7726/MIDP2.0/CLDC1.1/Screen-240x320","TIANYU-KTOUCH/B2010/Screen-128X128","TIANYU-KTOUCH/D6600/Screen-240X432","TIANYU-KTOUCH/L65/Screen-240X320","TIANYU-KTOUCH/A665/MIDP2.0/CLDC1.1/Screen-240X320 Profile/MIDP-2.0 Configuration/CLDC-1.1","TIANYU-KTOUCH/A665");
  $ns = E84($segmentMatches, array(array($va0[0]),array($va1[0])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A630");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[1]),array($va1[1])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A660");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[2]),array($va1[2])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A662");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[3]),array($va1[3])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A691");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[4]),array($va1[4])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A907");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[5]),array($va1[5])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/B2012");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[6]),array($va1[6])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/B2015");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[7]),array($va1[7])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/C500");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[8]),array($va1[8])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/C800");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[9]),array($va1[9])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D172");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[10]),array($va1[10])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D702");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[11]),array($va1[11])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D770");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[12]),array($va1[12])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D780");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[13]),array($va1[13])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D788");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[14]),array($va1[14])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/DT28");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[15]),array($va1[15])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/H800");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[16]),array($va1[16])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/H711");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[17]),array($va1[17])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/V760");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[18]),array($va1[18])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/V918");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[19]),array($va1[19])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D772/Screen-176X220");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[20]),array($va1[20])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/DT200/MIDP2.0/CLDC1.1/Screen-240x320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[21]),array($va1[21])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A610/Screen-176X220");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[22]),array($va1[22])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D159/Screen-128X128");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[23]),array($va1[23])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/D175/Screen-128X160");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[24]),array($va1[24])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/X90/MIDP2.0/CLDC1.1/Screen-320X240");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[25]),array($va1[25])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/A927/MIDP2.0/CLDC1.1/Screen-240x320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[26]),array($va1[26])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("15364","17895","17896","18092", "TIANYU-KTOUCH/FT05/MIDP2.0/CLDC1.1/Screen-240X320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[27]),array($va1[27])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17899","17895","17896","18092", "TIANYU-KTOUCH/A930/Screen-240X320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[27]),array($va1[28])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17899","17895","17896","18092", "TIANYU-KTOUCH/A930/Screen-240X320 Novarra-Vision/8.0");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[27]),array($va1[29])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17899","17895","17896","18092", "TIANYU-KTOUCH/A930");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[28]),array($va1[30])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17891","17895","17896","18092", "TIANYU-KTOUCH/H699");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[28]),array($va1[31])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17891","17895","17896","18092", "TIANYU-KTOUCH/H699/Screen-176X220");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[29]),array($va1[32])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17884","17895","17896","18092", "TIANYU-KTOUCH/X260");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[29]),array($va1[33])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17884","17895","17896","18092", "TIANYU-KTOUCH/X260/Screen-176X220");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[30]),array($va1[34])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17892","17895","17896","18092", "TIANYU-KTOUCH/H688/Screen-176X220");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[31]),array($va1[35])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17885","17895","17896","18092", "TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320 Profile/MIDP-2.0 Configuration/CLDC-1.1");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[31]),array($va1[36])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17885","17895","17896","18092", "TIANYU-KTOUCH/V908");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[32]),array($va1[37])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17885","17895","17896","18092", "TIANYU-KTOUCH/V908|V908/MIDP2.0/CLDC1.1/Screen-240x320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[31]),array($va1[38])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17885","17895","17896","18092", "TIANYU-KTOUCH/V908/MIDP2.0/CLDC1.1/Screen-240x320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[33]),array($va1[39])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17888","17895","17896","18092", "TIANYU-KTOUCH/H999");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[33]),array($va1[40])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17888","17895","17896","18092", "TIANYU-KTOUCH/H999/MIDP2.0/CLDC1.1/Screen-320X240");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[34]),array($va1[41])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17897","17895","17896","18092", "TIANYU-KTOUCH/B832/MIDP2.0/CLDC1.1/Screen-240x320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[35]),array($va1[42])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17893","17895","17896","18092", "TIANYU-KTOUCH/H677/Screen-176X220");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[36]),array($va1[43])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17889","17895","17896","18092", "TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240 Profile/MIDP-2.1 Configuration/CLDC-1.1");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[36]),array($va1[44])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17889","17895","17896","18092", "TIANYU-KTOUCH/H877");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[36]),array($va1[45])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17889","17895","17896","18092", "TIANYU-KTOUCH/H877/MIDP2.0/CLDC1.1/Screen-320X240");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[37]),array($va1[46])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17886","17895","17896","18092", "TIANYU-KTOUCH/V388/MIDP2.0/CLDC1.1/Screen-240X320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[38]),array($va1[47])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17901","17895","17896","18092", "TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400 Profile/MIDP-2.0 Configuration/CLDC-1.1");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[38]),array($va1[48])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17901","17895","17896","18092", "TIANYU-KTOUCH/E62/MIDP2.0/CLDC1.1/Screen-240X400");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[39]),array($va1[49])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17890","17895","17896","18092", "TIANYU-KTOUCH/H777/MIDP2.0/CLDC1.1/Screen-320X240 Profile/MIDP-2.1 Configuration/CLDC-1.1");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[39]),array($va1[50])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17890","17895","17896","18092", "TIANYU-KTOUCH/H777/MIDP2.0/CLDC1.1/Screen-320X240");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[40]),array($va1[51])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17900","17895","17896","18092", "TIANYU-KTOUCH/A7726/MIDP2.0/CLDC1.1/Screen-240x320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[41]),array($va1[52])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17898","17895","17896","18092", "TIANYU-KTOUCH/B2010/Screen-128X128");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[42]),array($va1[53])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17894","17895","17896","18092", "TIANYU-KTOUCH/D6600/Screen-240X432");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[43]),array($va1[54])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17887","17895","17896","18092", "TIANYU-KTOUCH/L65/Screen-240X320");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[44]),array($va1[55])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17902","17895","17896","18092", "TIANYU-KTOUCH/A665/MIDP2.0/CLDC1.1/Screen-240X320 Profile/MIDP-2.0 Configuration/CLDC-1.1");$ls = $ns;}
  $ns = E84($segmentMatches, array(array($va0[44]),array($va1[56])), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("17902","17895","17896","18092", "TIANYU-KTOUCH/A665");$ls = $ns;}
 return $dl;}
function E84(&$thisUA, $toTest, &$ls)
{
	$deviceTotal = 0;$uaCount=count($thisUA[0]);
	for($i = 0; $i < $uaCount; $i++){$segCount = count($thisUA[0][$i]);if($segCount != count($toTest[$i])){return PHP_INT_MAX;}
	for($ind = 0; $ind < $segCount; $ind++){$deviceTotal += (F51DEditDistance($thisUA[0][$i][$ind], $toTest[$i][$ind], $ls) * $thisUA[1][$i]);if($deviceTotal > $ls){return $deviceTotal;}}}
	return $deviceTotal;
}
 ?>
