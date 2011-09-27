<?php

Manager::logln('[Part] initializing');

class Part {
	public $before;
	public $after;
	public function before() {
		$f = $this->before; $f();
	}
	public function after() {
		$f = $this->after; $f();
	}
}

Manager::logln('[Part] initialized');

?>