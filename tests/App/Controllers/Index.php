<?php

declare(encoding='UTF-8');
namespace JoltApp;

use \Jolt\Controller;

require_once 'Jolt/Controller.php';

class Index extends Controller {
	
	public function indexAction() {
		echo 'Hi, from Jolt!', PHP_EOL;
	}

	public function viewAction() {
		$this->render('welcome');
	}
	
	public function paramAction($id, $name) {
		echo count(func_get_args());
	}
	
	public static function staticAction() {
		echo 'static content';
	}
}