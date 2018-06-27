<?php
	include '../includes/config.php';
	
	if(isset($_POST['login'])) {
		$user = $_POST['user'];
		$password = $_POST['password'];

		$sql = mysql_query("SELECT * FROM user WHERE user ='$user'");
		$row_sql = mysql_fetch_array($sql);
		$a = $row_sql['user'];
		$b = $row_sql['password'];

	if(mysql_num_rows($sql) == 0){
		$kq = '<div class="alert alert-danger"><strong>Sai tài khoản hoặc mật khẩu vui lòng thử lại.</strong></div>';
	}elseif ($password != $b){
		$kq = '<div class="alert alert-danger"><strong>Sai tài khoản hoặc mật khẩu vui lòng thử lại.</strong></div>';
	}else {
		$_SESSION['admin'] = $user;
		
		echo '<script type="text/javascript">
		window.location.href="index.php";

		
		</script>';
	}

	}

	
?>