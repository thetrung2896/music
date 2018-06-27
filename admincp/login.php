<?php
session_start();
	include('modules/access-login.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="../assets/image/favicon.png">
	<title>Đăng Nhập</title>
	<script type="text/javascript" src="vendor/bootstrap.js"></script>
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="vendor/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/signin.css">

</head>
<body class="text-center">
    <form action="login.php" method="post" class="form-signin">
      <h1 class="h3 mb-3 font-weight-normal" ><img src="../assets/image/ntt_logo.png" style="width: 100px"></h1>
      <h1 class="h3 mb-3 font-weight-normal">NTT- Music</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="text" id="inputEmail" name="user" class="form-control" placeholder="Tên tài khoản" required="" autofocus="">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Mật khẩu" required="">
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Nhớ tài khoản
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Đăng nhập</button>
      <p class="mt-5 mb-3 text-muted"> <strong>© NTT-Music</strong> All Right Reserved</p>
      <?php  
        if (isset($_POST['login'])){
            echo $kq;
          }
      ?>
    </form>
      
</body>
</html>