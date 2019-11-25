<?php

namespace application\controllers;

use application\core\Controller; 

class StoreController extends Controller {

	public function basketAction() {

		$result = [];
		if(isset($_POST['dell_from_basket'])) {
			$this->model->dell_from_basketItem($_POST['dell_from_basket']);
		} else if (isset($_POST['sale_confirmation'])) {
			$this->model->create_salesItem();
		}

		if (!empty($_SESSION['basket'])) {
			$result = $this->model->get_basketItem();
		}
		$this->view->render('OK_Basket', ['basket' => $result]);

	}

}
