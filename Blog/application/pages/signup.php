<?php
		if (empty($_POST['submit'])) {

?>
<div class="form center-block">
<form action="#" method="post" role="form" class="container check-form">
    <div>
        <img class ="style center-block" src="resource/images/t3.jpg" alt="face">
    </div>
    <div class="form-group">
			<label for="login" class="col-sm-2 control-label">Login </label>
			<div class="col-sm-10">
			<input type="text" id="login" name="login" class="form-control" class="inp1" placeholder="Login" required>
			</div>
		</div><br><br><br>
		<div class="form-group">
			<label for="pass1" class="col-sm-2 control-label">Password </label>
			<div class="col-sm-10">
			<input type="password" id="pass1" name="pass1" class="form-control" placeholder="Password" class="inp1" required>
			</div>
		</div><br><br>
		<div class="form-group">
			<label for="pass2" class="col-sm-2 control-label">Password </label>
			<div class="col-sm-10">
			<input type="password" id="pass2" name="pass2" class="form-control"  placeholder="Password" class="inp1" required>
			</div>
		</div><br><br>
		<div class="form-group">
			<label for="email" class="col-sm-2 control-label">Email </label>
			<div class="col-sm-10">
			<input type="email" id="email" name="email" class="form-control" placeholder="E-mail" class="inp1" required>
			</div>
		</div>
				<br><br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 ">
							<input type="submit" name="submit" value="Send">
							<input type="reset" name="reset" value="Clear">
		</div>
  </div> 
</form>
</div>
<?php	
} else {
		echo('<h2>Обрабочик данных формы</h2>');
		
		$login = $_POST['login'];
		$pass1 = $_POST['pass1'];
		$pass2 = $_POST['pass2'];
		$email = $_POST['email'];

		// Backlog:
		// Проверка существования логина
		// Проверка совпадения паролей
		// Проверка регулярных шаблонов
		// Проверка существования E-Mail

		$passw = md5($pass1);
		date_default_timezone_set('Europe/Kiev');
		$regdate = date('Y-m-d H:i:s');
		$status = 'norm';

		require('system/classes/User.php');
		$user = new User($login, $passw, $email, $regdate, $status);
		$user->addUser();
		echo('<h3>OK</h3>');
	}

?>

<style>

.control-label {
    color: #47C2CE;
    padding-left: 5px;
}

.style {
    border: 7px solid #383E4A;
    margin-bottom: 35px;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}

form {
    padding: 14px;
}

.check-form {
    border: 1px solid grey;
    background: #222222;
    border-radius: 10px;
    width: 430px;
    height: 530px;
    margin-bottom: 35px;
    color: white;
}

input {
    color: black;
    background-color: #4ACCD8;
    border-radius: 10px;
    padding: 5px 10px;
    margin: 0 10px;
}

.form-control {
    width: 300px;
}

</style>