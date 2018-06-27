<?php
	include ("access.php");
	$singers = mysql_query ("SELECT * FROM singer");
	$type = mysql_query ("SELECT * FROM type");
	$nation = mysql_query ("SELECT * FROM nation");
?>
 


	<div class="container">
		<div class="text-xs-center">
			<h3 class="display-2" style="color: gray; font-family:sans-serif; font-size: 30px; ">Quản lý bài hát</h3>
			<hr>
		</div>
	</div>
    <div class="col-md-3 custyle">
	<form action="" method="post">
    <table class="table table-striped custab">
    <thead>
               <th>Thêm bài hát</th>
        </tr>
    </thead>
    		<input class="hidden" style="float:right" value="<?php if (isset($_POST['edit'])){echo $id;}?>" type="text" name="id">
            <tr>
                <td>Tên bài hát <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $name;}?>" type="text" name="namesong" required></td>
				
            </tr>
			<tr>
                <td>Hình ảnh <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $images;}?>" type="text" name="images"  required></td>
				
            </tr>
			<tr>
                <td>Link mp3 <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $linkmp3;}?>" type="text" name="linkmp3"  required></td>
				
            </tr>
			<tr>
                <td>Lời bài hát <textarea style="height: 300px; float: right;"  name="lyrics"  required><?php if (isset($_POST['edit'])){echo $lyrics;}?></textarea></td>
				
			</tr>
			<tr>
                <td>Lượt xem <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $view;}?>" type="text" name="view"  required></td>
				
            </tr>
            <tr>
                <td>Ca sĩ <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $singer;}?>" type="text" name="singer"  ></td>
				
            </tr>
            <tr>



				<td>Ca sĩ 
					<select name="id_singer" style="width: 72%; float: right" required>
						<?php if (isset($_POST['edit'])){echo '<option required>'.$id_singer.'</option>';}?>
					<option required>Ca sĩ</option>
					<?php 
						while ($rows_singers = mysql_fetch_array ($singers)){
					?>
					<option value="<?php echo $rows_singers['id_singer'] ?>" required><?php echo $rows_singers['id_singer'] ?>-<?php echo $rows_singers['namesinger'] ?></option>
					<?php
						}
					?>
					</select>
				</td>



			</tr>
			<tr>
				<td>Thể loại <select name="id_type" style="width: 72%; float: right" required>
					<?php if (isset($_POST['edit'])){echo '<option required>'.$id_type.'</option>';}?>
					<option required>Thể loại</option>
					<?php 
						while ($rows_type = mysql_fetch_array ($type)){
					?>
					<option value="<?php echo $rows_type['id_type']; ?>" required><?php echo $rows_type['id_type']; ?>-<?php echo $rows_type['nametype'] ?></option>
					<?php
						}
					?>
				</select></td>

			</tr>
			<tr>
				<td>Phân vùng<select name="id_nation" style="width: 72%; float: right" required>


					<?php if (isset($_POST['edit'])){ ?>
						<option value="<?php echo $id_nation ?>"><?php echo $id_nation ?></option>
					<?php
						}else{
					?>
						<option required>Phân vùng</option>
					<?php
						}
					?>


					<?php 
						while ($rows_nation = mysql_fetch_array ($nation)){
					?>
					<option value="<?php echo $rows_nation['id_nation'] ?>" required><?php echo $rows_nation['id_nation'] ?>-<?php echo $rows_nation['namnation'] ?></option>
					<?php
						}
					?>
				</select></td>
			</tr>
			<tr>
				<?php if(isset($_POST['edit'])){	
				?>
                <td><button type="submit" name="save">Sửa</button></td>	
                <?php
                	}else{
                ?>
                <td><button type="submit" name="add">Thêm</button></td>
				<?php
					}
				?>

			</tr>
           
    </table>
    <?php
		if (isset($_POST['add'])){
			echo $kq;
		}
		if (isset($_POST['del'])){
			echo $kq;
		}
		if (isset($_POST['save'])){
			echo $kq;
		}
	?>
    </form>
	 
	
    </div>

