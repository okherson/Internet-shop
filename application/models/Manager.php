<?php

namespace application\models;
 
use application\core\Model;

class Manager extends Model {

	public function clientManager($params) {

		if (isset($params['all_client'])) {
		    $get_user = $this->db->query("SELECT * FROM `okm_users`");
		    return $get_user;		
		} else if (isset($params['change_user_data'])) {
			$var = [
				'changes' => $params['new_inf'],
				'id' => $params['id']
			];
			$res = $this->db->query("UPDATE `okm_users` SET `{$params['desizion']}` = :changes WHERE `id` = :id", $var);
		} else if (isset($params['del_me'])) {
			$res = $this->db->query("DELETE FROM `okm_users` WHERE id = :id",['id' => $params['del_user_by_id']]);
		} else if (isset($params['add_user'])) {
			$result = $this->db->query("SELECT id FROM `okm_users` WHERE `login` = :login", ['login' => $params['login']]);
			if (!empty($result)) {
				echo '<script> alert("Вибачте, цей логін уже зайнятий\n"); </script>';
	        } else {
				$reg_user = [
					'login' => $params['login'],
					'passwd' => hash('sha256', $params['passwd']),
					'first_name' => $params['first_name'],
					'second_name' => $params['second_name'],
					'b_day' => $params['b_day'],
					'phone_number' => $params['phone_number'],
					'email' => $params['email']

	        	];
				$result = $this->db->query('INSERT INTO okm_users(`login`, `passwd`, `first_name`, `second_name`, `b_day`, `phone_number`, `email`)
				VALUES(:login, :passwd, :first_name, :second_name, :b_day, :phone_number, :email)', $reg_user);
			}
		}
	}

	public function itemManager($params) {
		if (isset($params['all_goods'])) {
		    $get_items = $this->db->query("SELECT * FROM `vehicles`");
		    return $get_items;		
		} else if (isset($params['change_item_data'])) {
			$var = [
				'changes' => $params['new_inf'],
				'id' => $params['id']
			];
			$res = $this->db->query("UPDATE `vehicles` SET `{$params['desizion']}` = :changes WHERE `id` = :id", $var);

		} else if (isset($params['del_me'])) {
			$res = $this->db->query("DELETE FROM `vehicles` WHERE id = :id",['id' => $params['del_item_by_id']]);
		} else if (isset($params['add_item'])) {
			$result = $this->db->query("SELECT id FROM `vehicles` WHERE `title_ru` = :title_ru", ['title_ru' => $params['title_ru']]);
			if (!empty($result)) {
				echo '<script> alert("Вибачте, цей товар уже існує в базі данних\n"); </script>';
	        } else {
				$reg_user = [
					'title_ru' => $params['title_ru'],
					'cost' => $params['cost'],
					'item_number' => $params['item_number'],
					'description' => $params['description'],
					'photo_location' => $params['photo_location'],
					'vehicle_type' => $params['vehicle_type']
	        	];
				$result = $this->db->query('INSERT INTO `vehicles`(`title_ru`, `cost`, `item_number`, `description`, `photo_location`, `vehicle_type`)
				VALUES(:title_ru, :cost, :item_number, :description, :photo_location, :vehicle_type)', $reg_user);
			}
		}
	}

	public function salesManager($params) {
		if (isset($params['all_hist'])) {
		    $get_hist = $this->db->query("SELECT * FROM `sales`");
		    return $get_hist;		
		} else if (isset($params['payment_confirmation'])) {
			$res = $this->db->query("UPDATE `sales` SET `payment_confirmation` = '1' WHERE `id` = :id", ['id' => $params['history_id']]);
		}
	}
}
