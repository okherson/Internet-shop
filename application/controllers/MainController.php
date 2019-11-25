<?php

namespace application\controllers;

use application\core\Controller; 
use application\lib\Db; 

class MainController extends Controller {
	
	public function indexAction() {
		if (isset($_POST['item_det'])) {
			$item = $_SESSION['item'] = $_POST['item_det'];
			$this->view->redirect('/main/item');
		} else if(isset($_POST['item'])) {
				$_SESSION['vehicle_type'] = $_POST['item'];
		}
		$params = !empty($_SESSION['vehicle_type']) ? ['vehicle_type' => $_SESSION['vehicle_type']] : [];

		$result = $this->model->getItemType($params);				

		if (isset($_POST['add_to_basket'])) {
			if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 0) {
				echo "<script> alert(\"Ви не можете додати товар в корзину без авторизації. Будь ласка авторизуйтесь.\")</script>";
			} else 
				$this->model->add_to_basketItem($_POST['add_to_basket']);
		}
		$this->view->render('OK_Market', ['item' => $result]);
	}

	public function itemAction() {
		$result = $this->model->get_deteilItem(['id' => $_SESSION['item']]);
		$this->view->render('OK_Market Item', ['item' => $result]);

	}

}