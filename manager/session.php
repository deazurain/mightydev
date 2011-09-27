<?php

Manager::logln('[Session] initializing');

function shas($n) { return isset($_SESSION[$n]); }
function sget($n) { return $_SESSION[$n]; }
function sset($n,$v) { $_SESSION[$n] = $v; }

Manager::logln('[Session] initialized');

?>
