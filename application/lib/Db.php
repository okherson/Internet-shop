<?php

namespace application\lib;

use PDO;

class Db {
	
	protected $db;
	
	public function __construct() {
		$config = require 'application/config/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'].';charset=utf8', $config['user'], $config['password']);
	}
	
	public function query($sql, $params = [])  {
		$statement = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach($params as $key => $value) {
				$statement->bindValue(':'.$key, $value);
			}
		}
		$res = $statement->execute();
		if ($res != false)
		{
			$result = $statement->fetchAll(PDO::FETCH_ASSOC);
			return $result;
		}
		return false;
	}

}