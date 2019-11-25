<?php

namespace application\models;
 
use application\core\Model;

class Account extends Model {

	public function loginUser($params) {
		if (!isset($_SESSION['login']) && isset($_POST['submit'])) {

			$user = [
		    	'login' => $_POST['login'],
			    'passwd' => hash('sha256', $_POST['passwd'])
			];
		    $get_user = $this->db->query("SELECT * FROM `okm_users` WHERE `login` = :login && `passwd` = :passwd", $user);
		    if (!empty($get_user)){
		        $_SESSION = array();
		        $_SESSION['user_id'] = $get_user[0]['id'];
		        $_SESSION['login'] = $get_user[0]['login'];
		        $_SESSION['user_type'] = $get_user[0]['usr_type'];
		        return true;
		    }
		    else{
		         echo '<script> alert("Хибний логін або пароль"); </script>';
		    	return false;
		    }
		}
	}

	public function registerUser($params) {

		$success = array();
		$error = array();
		if ($_POST['submit'] == "Зареєструватися")
	    {
			$result = $this->db->query("SELECT id FROM `okm_users` WHERE `login` = :login", ['login' => $params['login']]);
			if (!empty($result)) {
				echo '<script> alert("Вибачте, цей логін уже зайнятий\n"); </script>';
	        } else {
	        	$reg_user = [
					'login' => $_POST['login'],
					'passwd' => hash('sha256', $_POST['passwd']),
					'first_name' => $_POST['first_name'],
					'second_name' => $_POST['second_name'],
					'b_day' => $_POST['b_day'],
					'phone_number' => $_POST['phone_number'],
					'email' => $_POST['email']

	        	];
				$result = $this->db->query('INSERT INTO okm_users(`login`, `passwd`, `first_name`, `second_name`, `b_day`, `phone_number`, `email`)
				VALUES(:login, :passwd, :first_name, :second_name, :b_day, :phone_number, :email)', $reg_user);
				if ($this->loginUser($_POST))
					return true;
				else
					return false;
	        }
		}
	}

	public function logoutItem() {
	}

}