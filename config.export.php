<?php

class Config {
	static $manager_dir = "manager";
	
	static $project_dir = "mightydev_export";
	static $part_dir = "parts";
	static $image_dir = "images";
	static $css_dir = "css";
	static $js_dir = "js";
	
	static $debug = false;
}

require $_SERVER['DOCUMENT_ROOT'] . '/' . Config::$manager_dir . '/' .  "manager.php";

?>
