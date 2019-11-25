<?php

namespace application\controllers;

use application\core\Controller; 

class AccountController extends Controller {
		
	public function registerAction() {
		if (!empty($_POST)) {
			if ($this->model->registerUser($_POST))
				$this->view->redirect('/');
		}
		$this->view->render('Registration');	
	}

	public function loginAction() {
		if (!empty($_POST)) {
			if ($this->model->loginUser($_POST))
				$this->view->redirect('/');
		}
		$this->view->render('Login');
	}

	public function logoutAction() {
		if (session_destroy()) {
			$this->view->redirect('/');
		}
	}
}