<?php
    if (empty($_POST['submit'])) {
?>
<div class="form center-block">
<form class="container check-form" action="#" role="form" method="POST">
    <div>
        <img class ="style center-block" src="resource/images/t1.jpg" alt="face">
    </div>
  <div class="form-group">
    <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Login</label>
    <div class="col-sm-10">
      <input type="text" id="login" class="form-control" placeholder="Login" name="login" required> 
    </div>
  </div><br><br><br>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" id="pass1"  class="form-control" placeholder="Password" name="pass1" required>
    </div>
  </div><br><br>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10 ">
     <input type="submit" name="submit" value="Entry">
    <input type="reset" name="reset" value="Cancel">
    </div>
  </div>  
</form>
</div>

<?php

    } else {
                       
            // 1. Получение данных из формы:
            // =============================
            $login=trim($_POST['login']);
            $pass1=md5($_POST['pass1']);
            $status=false;
            if (!$status){
            $query="SELECT login, passw FROM users WHERE login='$login' AND passw='$pass1'";
            require('system/classes/DriverDB.php');
            $driver = new DriverDB();
            $driver->executeSimpleQuery($query);
            echo 'OK';
            }
    }
?>


<style>

.form-group {
    color: #47C2CE;
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
    height: 430px;
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