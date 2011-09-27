<?php

Manager::logln('[Post] initializing');

function phas($n) { return isset($_POST[$n]); }
function pget($n) { return $_POST[$n]; }
function pempty() { return empty($_POST); }

Manager::logln('[Post] initialized');

?>
