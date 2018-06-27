<?php
	include ("singer/access2.php");
	// $singers = mysql_query ("SELECT * FROM singer");
	// $type = mysql_query ("SELECT * FROM type");
	$nation = mysql_query ("SELECT * FROM nation");
?>
 


	<div class="container">
		<div class="text-xs-center">
			<h3 class="display-2" style="color: gray; font-family:sans-serif; font-size: 30px; ">Quản lý ca sĩ</h3>
			<hr>
		</div>
	</div>
    <div class="col-md-3 custyle">
	<form action="" method="post">
    <table class="table table-striped custab">
    <thead>
               <th>Thêm ca sĩ</th>
        </tr>
    </thead>
    		
                <input class="hidden" style="float:right" value="<?php if (isset($_POST['edit'])){echo $id;}?>" type="text" name="id">
				

            <tr>
                <td>Tên ca sĩ <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $namesinger;}?>" type="text" name="namesinger" required></td>
				
            </tr>
			<tr>
                <td>Hình ảnh <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $image;}?>" type="text" name="image"  required></td>
				
            </tr>
            <!-- <tr>
                <td>TS <textarea style="height: 300px; float: right;"  name="shortprofile"  required><?php if (isset($_POST['edit'])){echo $short;}?></textarea></td>
				
			</tr> -->
			<tr>
                <td>Tiểu sử <textarea style="height: 300px; float: right;"  name="profile"  required><?php if (isset($_POST['edit'])){echo $profile;}?></textarea></td>
				
			</tr>
			<tr>
                <td>Lượt theo dõi <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $follow;}?>" type="text" name="follow"  required></td>
				
            </tr>
			
			
           <!--  <tr>
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

			</tr> -->
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
				<?php 
					if(isset($_POST['edit'])){	
				?>
                	<td><button type="submit" name="save">Lưu</button></td>	
                <?php
                	}else{
                ?>
                	<td><button  name="add">Thêm</button></td>
				<?php
					}
				?>

			</tr>

           
    </table>
	
    </form>

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
	
    </div>


