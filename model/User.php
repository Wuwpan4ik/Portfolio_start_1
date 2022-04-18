<?php 
	class User {
		public $db;

		public function __construct() {
			require_once 'connect.php';
			$this->db = $db;
		}
	}
?>