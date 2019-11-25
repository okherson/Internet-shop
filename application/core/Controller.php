<?php

namespace application\core;

use application\core\View;

abstract class Controller {
	
	public $route;
	public $view;
	public $model;
	public $acl;
	
	public function __construct($route) {
		$this->route = $route;
		if (!$this->chackAcl()) {
			View::errorCode(403);
		};
		$this->view = new View($route);
		$this->model = $this->loadModel($route['controller']);
	}

	public function loadModel($name) {
		$path = 'application\models\\'.ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
	}

	public function chackAcl() {
		$this->acl = require 'application/acl/'.$this->route['controller'].'.php';
		if ($this->isAcl('all')) {
			return true;
		}
		if (!isset($_SESSION['user_id']) && $this->isAcl('guest')) {
			return true;
		}
		if (isset($_SESSION['user_id']) && $this->isAcl('client')) {
			return true;
		}
		if (!empty($_SESSION['user_type']) && $this->isAcl('admin')) {
			return true;
		}
		return false;
	}

	public function isAcl($key) {
		return in_array($this->route['action'], $this->acl[$key]);
	}
} 
