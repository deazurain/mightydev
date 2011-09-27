<?php

Manager::logln('[Path] initializing');

class Path {
	public static $sys_website;
	public static $sys_manager;
	public static $sys_project;
	public static $sys_part;
		
	public static $web_project;
	public static $web_image;
	public static $web_css;
	public static $web_js;
	
	public static $url_website;
	
	public static function sys_website($path) { return self::$sys_website . $path; }
	public static function sys_manager($path) { return self::$sys_manager . $path; }
	public static function sys_project($path) { return self::$sys_project . $path; }
	public static function sys_part($path) { return self::$sys_part . $path; }
	
	public static function web_project($path) { return self::$web_project . $path; }
	public static function web_image($path) { return self::$web_image . $path; }
	public static function web_css($path) { return self::$web_css . $path; }
	public static function web_js($path) { return self::$web_js . $path; }
	
	private static function debug_msg($name, $value) {
		Manager::logln("[Path] $name path: '$value'");
	}
	
	public static function debug() {
		self::debug_msg("system website", self::$sys_website);
		self::debug_msg("system manager", self::$sys_manager);
		self::debug_msg("system project", self::$sys_project);
		self::debug_msg("system part", self::$sys_part);
		
		self::debug_msg("website project", self::$web_project);
		self::debug_msg("website image", self::$web_image);
		self::debug_msg("website css", self::$web_css);
		self::debug_msg("website js", self::$web_js);
		
		self::debug_msg("url website", self::$url_website);
	}
}

Path::$sys_website = $_SERVER['DOCUMENT_ROOT'] . '/';
Path::$sys_manager = Path::sys_website(Config::$manager_dir . '/');
Path::$sys_project = Path::sys_website(Config::$project_dir ? Config::$project_dir . '/' : '');
Path::$sys_part = Path::sys_project(Config::$part_dir . '/');

Path::$web_project = Config::$project_dir ? '/' . Config::$project_dir . '/' : '/';
Path::$web_image = Path::web_project(Config::$image_dir . '/');
Path::$web_css = Path::web_project(Config::$css_dir . '/');
Path::$web_js = Path::web_project(Config::$js_dir . '/');

Path::$url_website = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] ? "https://" : "http://") . $_SERVER['SERVER_NAME'] . '/';

Path::debug();

Manager::logln('[Path] initialized');

?>
