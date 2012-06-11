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

 function _H54($thisuseragent){
$patterns = array("#(?<=^MOT-MOTOROLA )[^/]+#" => 100000,"#\([^\)]+\)#" => 1);
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
$va0 = array("L6");$va1 = array();
  $ns = E54($segmentMatches, array(array($va0[0]),array("")), $ls); if($ns <= $ls){if($ns < $ls){unset($dl);}$dl[] = array("11703","5521","4836","18092", "MOT-MOTOROLA L6/0A.53.1AR MIB/2.2.1 Profile/MIDP-2.0 Configuration/CLDC-1.1");$ls = $ns;}
 return $dl;}
function E54(&$thisUA, $toTest, &$ls)
{
	$deviceTotal = 0;$uaCount=count($thisUA[0]);
	for($i = 0; $i < $uaCount; $i++){$segCount = count($thisUA[0][$i]);if($segCount != count($toTest[$i])){return PHP_INT_MAX;}
	for($ind = 0; $ind < $segCount; $ind++){$deviceTotal += (F51DEditDistance($thisUA[0][$i][$ind], $toTest[$i][$ind], $ls) * $thisUA[1][$i]);if($deviceTotal > $ls){return $deviceTotal;}}}
	return $deviceTotal;
}
 ?>
