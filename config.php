<?php

class Config {
	static $project_dir = "";
	static $manager_dir = "manager/";
	static $image_dir = "images/";
	static $css_dir = "css/";
	static $js_dir = "js/";
}

require $_SERVER['DOCUMENT_ROOT'] . '/' . Config::$manager_dir . "manager.php";

?>