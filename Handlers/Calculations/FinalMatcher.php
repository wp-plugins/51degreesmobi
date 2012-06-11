<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */


function F51DFinalMatcher(&$userAgent, &$results)
{
  $results = F51DSortResults($results);
  $highestPosition = 0;
  $subset = array();
  foreach($results as $result)
  {
    $resultua = $result[4];
    $pos = strspn($userAgent ^ $resultua, "\0");
    if($pos > $highestPosition)
    {
      $highestPosition = $pos;
      unset($subset);
      $subset[] = $result;
    }
    else if($pos == $highestPosition)
    {
      $subset[] = $result;
    }
  }
  if(count($subset) == 1) return $subset[0];
  if(count($subset) > 1){
    return F51DMatchTails($userAgent, $highestPosition, $subset);
  }
  return null;
}
function F51DMatchTails(&$userAgent, &$pos, &$devices)
{
  $longestSubset = 0;
  $tails = array();
  foreach ($devices as $tail)
  {
    $tail = substr($tail[4], $pos, (strlen($tail[4]) - $pos));
    $tails[] = $tail;
    if(strlen($tail) > $longestSubset){$longestSubset = strlen($tail);}
  }
  $amnt = 0;
  if(($longestSubset + $pos) < strlen($userAgent)){$amnt = $longestSubset;}else{$amnt = strlen($userAgent) - $pos;}
  $userAgentTail = substr($userAgent, $pos, $amnt);
  $closestTail = null;
  $minDistance = PHP_INT_MAX;
  for($i = 0; $i < count($tails); $i++)
  {
    $current = $tails[$i];
    $currentDistance = F51DEditDistance($userAgentTail, $current,$minDistance);
    if($currentDistance < $minDistance)
    {
      $minDistance = $currentDistance;
      $closestTail = $tails[$i];
    }
  }
  $toReturn = null;
  foreach ($devices as $dev) {
    if(!isset($toReturn))
    {
      if(F51DEndsWith($dev[4], $closestTail))
      {
      $toReturn = $dev;
      }
    }
  }
  if(!is_null($toReturn))
  {
    return $toReturn;
  }
  return $devices[0];
}
function F51DEndsWith($fullstring, $find)
{
  $length = strlen($find);
  $start = $length * -1;
  return(substr($fullstring, $start) === $find);
}
function F51DSortResults($results)
{
  $toSort = array();
  $di = 0;
  foreach ($results as $device)
  {
    $toSort[] = $device[0].'-'.$device[1].'-'.$device[2].'-'.$device[3].'-'.$di; 
    $di++;
  }
  sort($toSort);
  $returning = array();
  foreach ($toSort as $sorted) {
    $res = explode('-', $sorted);
    $returning[] = $results[$res[4]];
  }
  return $returning;
}
?>