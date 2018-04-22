<?php
namespace agraddy\base;

class Register {
	public $config = [];

	function __construct() {
	}

	function config($key, $value) {
		$this->config[$key] = $value;
	}
}

?>
