<?php

		class DriverDB {
			protected $host;
			protected $user;
			protected $pass;
			protected $name;

			public $conn;


			public function __construct() {
					require('system/config/config_db.php');
					$this->host = DB_HOST;
					$this->user = DB_USER;
					$this->pass = DB_PASS;
					$this->name = DB_NAME;
					$this->conn = new mysqli($this->host, $this->user, $this->pass, $this->name);
			}

			public function executeSimpleQuery($query) {
					$this->conn->query($query);
			}
	}
?>