<?php

namespace application\models;
 
use application\core\Model;

class Main extends Model {
	
	public function getItemType($params) {
		if (empty($params))
			$data = $this->db->query('select * from `vehicles`');
	else
			$data = $this->db->query('select * from `vehicles` where vehicle_type = :vehicle_type', $params);
		return $data;
	}

	public function add_to_basketItem($params) {
		if (!isset($_SESSION['basket']) || !in_array($params, $_SESSION['basket'])) {
			$_SESSION['basket'][$params] = $params;
			echo '<script> alert("Товар успішно доданий до корзини"); </script>';
		} else {
			echo '<script> alert("Товар уже доданий до корзини \n для замовлення більшої кількості товару - зателефонуйте адміністратору"); </script>';
		}
	}

	public function get_deteilItem($params) {
		if (!empty($params))
			$data = $this->db->query('select * from `vehicles` where id = :id', $params);
		return $data;
	}

}