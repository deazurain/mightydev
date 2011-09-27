<?php

class Config {
	static $project_dir = "test";
	static $manager_dir = "manager";
	static $image_dir = "images";
	static $css_dir = "css";
	static $js_dir = "js";
	static $debug = true;
}

require $_SERVER['DOCUMENT_ROOT'] . '/' . Config::$manager_dir . '/' .  "manager.php";

?>