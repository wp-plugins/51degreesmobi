<?php

/* --------------------------------------------------

This Source Code Form is subject to the terms of the Mozilla Public License, v. 2.0.

If a copy of the MPL was not distributed with this file, You can obtain one at http://mozilla.org/MPL/2.0/.

This Source Code Form is “Incompatible With Secondary Licenses”, as defined by the Mozilla Public License, v. 2.0.
-------------------------------------------------- */


function F51DReducedInitialString($uaToTest, $maxInitialString, $tolerance)
{
  if((F51DStartsWith($_SERVER['HTTP_USER_AGENT'], $uaToTest) || F51DStartsWith($uaToTest, $_SERVER['HTTP_USER_AGENT'])) && $maxInitialString < strlen($uaToTest))
    {return strlen($uaToTest);}return null;
}
function F51DStartsWith($haystack, $needle)
{
    $length = strlen($needle);return (substr($haystack, 0, $length) === $needle);
}
?>