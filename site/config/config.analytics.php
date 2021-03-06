<?php

/* -----------------------------------------------------------------------------
Analytics, tracking, site stats
--------------------------------------------------------------------------------

First make sure to set the right Google analytics tracking ID/API KEY for your
website [2], before enabling analytics tracking [1] for production environment.
Tracking is disabled by default for local and staging environments.

*/

c::set('google.analytics', true);                                               // [1] Set tracking method
c::set('google.analytics.id', 'UA-2189978-6');                                  // [2] Google Analytics ID
