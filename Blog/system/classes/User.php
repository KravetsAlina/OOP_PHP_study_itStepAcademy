<?php
		require('DriverDB.php');
		
		class User extends DriverDB {

					public $id;
					public $login;
					public $passw;
					public $email;
					public $regdate;
					public $status;

					public function __construct($login, $passw, $email, $regdate, $status) {
						parent::__construct();
						$this->login = $login;
						$this->passw = $passw;
						$this->email = $email;
						$this->regdate = $regdate;
						$this->status = $status;
					}

					public function addUser() {
							$query = "INSERT INTO users (login, passw, email, regdate, status) VALUES ('$this->login', '$this->passw', '$this->email', '$this->regdate', '$this->status')";
							parent::executeSimpleQuery($query);
					}

		} 


?>