<?php
include('config.php');
class ntt{
	public function	login($user, $password){
		
			$sql = "SELECT * FROM user WHERE user = '".$user."' ";
			$query = mysql_query($sql);
			$result = mysql_fetch_assoc($query);
			if($query && $password == $result['password']){
				return $result['user'];
			}else {
				echo "Tài khoản hoặc mật khẩu không chính xác";
			}
	} 

}












