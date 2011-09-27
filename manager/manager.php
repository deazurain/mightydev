<?php

class Manager {
	public static function log($s) {
		if(Config::$debug) echo $s . "\n";
	}
	
	public static function logln($s) {
		self::log($s . '<br />');
	}
	
	public static function php($filename) {
		$path = Path::sys_project($filename . '.php');
		self::logln("[Manager] requiring " . $path);
		require $path;
	}
	
	public static function css($filename) {
		$path = Path::web_css($filename . '.css');
		self::logln("[Manager] linking " . $path);
		echo "<link rel='stylesheet' type='text/css' href='$path'/>\n";
	}
	
	public static function js($filename) {
		$path = Path::web_js($filename . '.js');
		self::logln("[Manager] linking " . $path);
		echo "<script type='text/javascript' src='$path'></script>\n";
	}
	
	public static function image($filename) {
		$path = Path::web_image($filename);
		self::logln("[Manager] inserting image " . $path);
		echo "<img src='$path' />";
	}
}

Manager::logln('[Manager] initializing');

Manager::logln('[Manager] loading path.php');
require $_SERVER['DOCUMENT_ROOT'] . '/' . Config::$manager_dir . '/' . 'path.php';

Manager::logln('[Manager] loading get.php');
require Path::sys_manager("get.php");

Manager::logln('[Manager] loading post.php');
require Path::sys_manager("post.php");

Manager::logln('[Manager] loading session.php');
require Path::sys_manager("session.php");

Manager::logln('[Manager] initialized');

?>
