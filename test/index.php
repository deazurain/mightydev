<?php

require "config.php";

Manager::php("button");

?>

<html>
<head>
	<?php Manager::css('index'); ?>
	<?php Manager::css('header'); ?>
	<?php Manager::js('index'); ?>
</head>
<body>
	<?php Manager::part('header'); ?>
	
	<?php Manager::image('images.jpeg'); ?>
	<?php display_button(); ?>
	<img src="<?=Path::web_image('images.jpeg')?>" />
	
	<?php Manager::part('footer'); ?>
</body>
</html>
