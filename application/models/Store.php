<?php

namespace application\models;
 
use application\core\Model;

class Store extends Model {
	
	public function get_basketItem() {
		foreach ($_SESSION['basket'] as $key => $id) {
			$item = $this->db->query('select * from `vehicles` where id = :id', ['id' => $id]);
			$data [] = $item;
		}
		return $data;
	}

	public function dell_from_basketItem($params) {
		if (isset($_SESSION['basket']) && isset($_SESSION['basket'][$params])) {
			unset($_SESSION['basket'][$params]);
			echo '<script> alert("Товар успішно видалений із корзини"); </script>';
		} else {
			echo '<script> alert("Цього товару немає у корзині"); </script>';
		}
	}

	public function create_salesItem() {

		foreach ($_SESSION['basket'] as $key) {
			$sale = [
				'user_id' => $_SESSION['user_id'],
				'item_id' => $key,
				'item_number' => 1,
				'sale_date' => date('Y-m-d')
			];
			$result = $this->db->query('INSERT INTO `sales` (`user_id`, `item_id`, `item_number`, `sale_date`) VALUES (:user_id, :item_id, :item_number, :sale_date)', $sale);

		}
			unset ($_SESSION['basket']);
			echo '<script> alert("Вітаємо з успішним здійсненням замовлення!) Найближчим часом наш адміністратор зв\'яжиться з вами для узгодження всіх деталей. Дякуємо що обираєте нас!☺️"); </script>';
	}
}