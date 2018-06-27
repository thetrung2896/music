<?php
	include ("../includes/config.php");
	
	if (isset ($_POST['add'])){
		$namesinger = $_POST['namesinger'];
		$image = $_POST['image'];
		// $short = $_POST['shortprofile'];
		$profile = $_POST['profile'];
		$follow = $_POST['follow'];
		$id_nation = $_POST['id_nation'];

		
			if (empty ($namesinger)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống tên bài hát!</strong></div>';
			}elseif (empty ($image)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống hình ảnh!</strong></div>';
			

			}elseif (empty ($profile)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống link!</strong></div>';
			}elseif (empty ($follow)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống lời bài hát!</strong></div>';
			}elseif (empty ($id_nation)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống vùng!</strong></div>';
			}else{
				$sql = mysql_query ("INSERT INTO `singer`(`namesinger`, `image`, `shortprofile`, `profile`, `follow`, `id_nation`) VALUES ('$namesinger','$image','','$profile','$follow','$id_nation')");
				if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Thêm thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Thêm thất bại</strong></div>';
				}
			}
		
			
		}	


		if(isset($_POST['del'])){
			$id = $_POST['del'];
			$sql = mysql_query("DELETE FROM `singer` WHERE  id_singer=".$id);

			if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Xóa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Xóa thất bại</strong></div>';
				}
		}

		if(isset($_POST['edit'])){
			$id = $_POST['edit'];
			$sql = mysql_query("SELECT * FROM singer INNER JOIN nation ON singer.id_nation=nation.id_nation WHERE id_singer=".$id);
			if ($sql){
			$row_sql = mysql_fetch_array($sql);
			$id = $row_sql['id_singer'];
			$namesinger = $row_sql['namesinger'];
			$image = $row_sql['image'];$short = $row_sql['shortprofile'];
			// 
			$profile = $row_sql['profile'];
			$follow = $row_sql['follow'];
			$id_nation = $row_sql['id_nation'];
			}
		}


		if(isset($_POST['save'])){

			$id = $_POST['id'];
			$namesinger = $_POST['namesinger'];
			$image = $_POST['image'];
			// $short = $_POST['shortprofile'];
			$profile = $_POST['profile'];
			$follow = $_POST['follow'];
			$id_nation = $_POST['id_nation'];

			$sql = mysql_query("UPDATE `singer` SET `namesinger`='$namesinger',`image`='$image',`shortprofile`='',`profile`='$profile',`follow`='$follow',`id_nation`='$id_nation' WHERE id_singer=".$id);
			if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Sửa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Sửa thất bại</strong></div>';
				}
		}
	

?>