<?php

namespace application\controllers;

use application\core\Controller; 
use application\lib\Db; 

class ManagerController extends Controller {

	public function clientAction() {

		if (!empty($_POST)) {
			$result = $this->model->clientManager($_POST);
			if (!empty($_POST['all_client'])) {
				$vars = [
					'client' => $result,
				];
			} else if (!empty($_POST['change_user_data'])) {
				$vars = [
					'change_user_data' => $result,
				];
			} else if (!empty($_POST['del_me'])) {
				$vars = [
					'del_me' => $result,
				];
			} else if (!empty($_POST['add_user'])) {
				$vars = [
					'add_user' => $result,
				];
			}
			$this->view->render('Manage Client', $vars);
		} else {
			$this->view->render('Manage Client');
		}
	}

	public function itemAction() {
		if (!empty($_POST)) {
			$result = $this->model->itemManager($_POST);
			if (!empty($_POST['all_goods'])) {
				$vars = [
					'item' => $result,
				];
			} else if (!empty($_POST['change_item_data'])) {
				$vars = [
					'change_item_data' => $result,
				];
			} else if (!empty($_POST['del_me'])) {
				$vars = [
					'del_me' => $result,
				];
			} else if (!empty($_POST['add_item'])) {
				$vars = [
					'add_item' => $result,
				];
			}
			$this->view->render('Manage Items', $vars);
		} else {
			$this->view->render('Manage Items');
		}
	}

	public function salesAction() {
		if (!empty($_POST)) {
			$result = $this->model->salesManager($_POST);
			if (!empty($_POST['all_hist'])) {
				$vars = [
					'sales' => $result,
				];
			} else if (!empty($_POST['payment_confirmation'])) {
				$vars = [
					'payment_confirmation' => $result,
				];
			}
			$this->view->render('Manage Sales', $vars);
		} else {
			$this->view->render('Manage Sales');
		}
	}
}