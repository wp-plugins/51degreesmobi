<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */


function F51DEditDistance($thisUA, $UAToTest, $ls)
{
  if((string)$thisUA === (string)$UAToTest){return 0;}
  $tuaLen = strlen($thisUA);
  $uattLen = strlen($UAToTest);
  $result = 0;
  $maxLength = 0;
  if($tuaLen > strlen($UAToTest)){if(($tuaLen - $uattLen) > $ls){return $ls + 1;}$maxLength = $tuaLen;}
  else{if(($uattLen - $tuaLen) > $ls){return $ls + 1;}$maxLength = $uattLen;}
  $diviser = 254;
  $until = ceil(($maxLength / $diviser));
  for($i = 0; $i < $until; $i++)
  {
    $result += levenshtein(substr($thisUA, ($diviser*$i), $diviser), substr($UAToTest, ($diviser*$i), $diviser));
    if($result > $ls) {return $result;}
  }
  return $result;  	
}
?>