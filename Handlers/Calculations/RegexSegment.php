<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */


function F51DRegexSegment($profileUA, $handlerSegments)
{
  $returnSegments = array();
  foreach ($handlerSegments as $pattern => $weight)
  {
    preg_match_all($pattern, $profileUA, $matches);
    $theseMatches = array();
    if($matches[0] != null)
    {
      foreach($matches[0] as $id => $matchText) {
      $theseMatches[] = array($matchText => $weight);
    }
  }
  else
  {
    $theseMatches[] = array("" => $weight);
  }
    $returnSegments[] = $theseMatches;
  }
  return $returnSegments;
}
?>