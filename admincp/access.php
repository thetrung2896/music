<?php
	include ("../includes/config.php");
	
	if (isset ($_POST['add'])){
		$namesong = $_POST['namesong'];
		$images = $_POST['images'];
		$linkmp3 = $_POST['linkmp3'];
		$lyrics = $_POST['lyrics'];
		$view = $_POST['view'];
		$singer = $_POST['singer'];
		$id_singer = $_POST['id_singer'];
		$id_type = $_POST['id_type'];
		$id_nation = $_POST['id_nation'];

		
			if (empty ($namesong)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống tên bài hát!</strong></div>';
			}elseif (empty ($images)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống hình ảnh!</strong></div>';
			}elseif (empty ($linkmp3)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống link!</strong></div>';
			}elseif (empty ($lyrics)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống lời bài hát!</strong></div>';
			}elseif (empty ($view)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống lượt xem!</strong></div>';
			}elseif (empty ($id_singer)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống tên ca sĩ!</strong></div>';
			}elseif (empty ($id_type)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống thể loại!</strong></div>';
			}elseif (empty ($id_nation)) {
				$kq = '<div class="alert alert-danger"><strong>Không được để trống vùng!</strong></div>';
			}else{
				$sql = mysql_query ("INSERT INTO `song`(`namesong`, `images`, `linkmp3`, `lyrics`, `view`, `singer`, `id_singer`, `id_type`, `id_national`) VALUES ('$namesong','$images','$linkmp3','$lyrics','$view','$singer','$id_singer','$id_type','$id_nation')");
				if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Thêm thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Thêm thất bại</strong></div>';
				}
			}
		
			
		}	


		if(isset($_POST['del'])){
			$id = $_POST['del'];
			$sql = mysql_query("DELETE FROM `song` WHERE  id_song=".$id);

			if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Xóa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Xóa thất bại</strong></div>';
				}
		}

		if(isset($_POST['edit'])){
			$id = $_POST['edit'];
			$sql = mysql_query("SELECT * FROM song INNER JOIN singer ON song.id_singer=singer.id_singer INNER JOIN type ON song.id_type=type.id_type WHERE id_song=".$id);
			if ($sql){
			$row_sql = mysql_fetch_array($sql);
			$id = $row_sql['id_song'];
			$name = $row_sql['namesong'];
			$images = $row_sql['images'];
			$linkmp3 = $row_sql['linkmp3'];
			$lyrics = $row_sql['lyrics'];
			$view = $row_sql['view'];
			$singer = $row_sql['singer'];
			$id_singer = $row_sql['id_singer'];
			$id_type = $row_sql['id_type'];
			$id_nation = $row_sql['id_nation'];
			}
		}


		if(isset($_POST['save'])){
			$id = $_POST['id'];
			$namesong = $_POST['namesong'];
			$images = $_POST['images'];
			$linkmp3 = $_POST['linkmp3'];
			$lyrics = $_POST['lyrics'];
			$view = $_POST['view'];
			$singer = $_POST['singer'];
			$id_singer = $_POST['id_singer'];
			$id_type = $_POST['id_type'];
			$id_nation = $_POST['id_nation'];

			$sql = mysql_query("UPDATE `song` SET `namesong`='$namesong',`images`='$images',`linkmp3`='$linkmp3',`lyrics`='$lyrics',`view`='$view',`singer`='$singer',`id_singer`='$id_singer',`id_type`='$id_type',`id_national`='$id_nation' WHERE id_song=".$id);
			if ($sql) {
					$kq = '<div class="alert alert-success"><strong>Sửa thành công!</strong></div>';
				}else{
					$kq = '<div class="alert alert-danger"><strong>Sửa thất bại</strong></div>';
				}
		}
	

?>