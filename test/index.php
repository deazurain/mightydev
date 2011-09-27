<?php

require "config.php";

Manager::php("button");

function display_something() { ?>
	<h3>Mick</h3>
	<p>eerste paragraph</p>
	<p>lol</p>
<?php }

class Part {
	public $before;
	public $after;
}

$part = new Part;
$part->before = function() { ?>
	<div id="container">
<?php };

$part->after = function () { ?>
	</div>
<?php };

?>

<html>
<head>
	<?php Manager::css('index'); ?>
	<?php Manager::js('index'); ?>
</head>
<body>
	<?php $f = ($part->before); $f(); ?>
	
	<?php Manager::image('images.jpeg'); ?>
	<?php display_button(); ?>
	<?php display_something(); ?>
	<img src="<?=Path::web_image('images.jpeg')?>" />
	<?php $part->$after(); ?>
</body>
</html>
