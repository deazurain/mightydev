<?php

Manager::logln('[Get] initializing');

function ghas($n) { return isset($_GET[$n]); }
function gget($n) { return $_GET[$n]; }
function gemtpy() { return empty($_GET); }

Manager::logln('[Get] initialized');

?>
