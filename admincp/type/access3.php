<?php
	include ("../includes/config.php");
	
	if (isset ($_POST['add'])){
		$nametype = $_POST['nametype'];
		$description = $_POST['description'];
		$id_nation = $_POST['id_nation'];

		
			if (empty ($nametype)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống tên bài hát!</strong></div>';
			}elseif (empty ($description)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống lời bài hát!</strong></div>';
			}elseif (empty ($id_nation)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống vùng!</strong></div>';
			}else{
				$sql = mysql_query ("INSERT INTO `type`(`nametype`, `description`, `id_nation`) VALUES ('$nametype','$description','$id_nation')");
				if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Thêm thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Thêm thất bại</strong></div>';
				}
			}
		
			
		}	


		if(isset($_POST['del'])){
			$id = $_POST['del'];
			$sql = mysql_query("DELETE FROM `type` WHERE  id_type=".$id);

			if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Xóa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Xóa thất bại</strong></div>';
				}
		}

		if(isset($_POST['edit'])){
			$id = $_POST['edit'];
			$sql = mysql_query("SELECT * FROM type INNER JOIN nation ON type.id_nation=nation.id_nation WHERE id_type=".$id);
			if ($sql){
			$row_sql = mysql_fetch_array($sql);
			$id = $row_sql['id_type'];
			$nametype = $row_sql['nametype'];
			$description = $row_sql['description'];
			$id_nation = $row_sql['id_nation'];
			}
		}


		if(isset($_POST['save'])){

			$id = $_POST['id'];
			$nametype = $_POST['nametype'];
			$description = $_POST['description'];
			$id_nation = $_POST['id_nation'];

			$sql = mysql_query("UPDATE `type` SET `nametype`='$nametype',`description`='$description',`id_nation`='$id_nation' WHERE id_singer=".$id);
			if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Sửa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Sửa thất bại</strong></div>';
				}
		}
	

?>