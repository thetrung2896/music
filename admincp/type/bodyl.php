<?php
	include ("type/access3.php");
	// $singers = mysql_query ("SELECT * FROM singer");
	// $type = mysql_query ("SELECT * FROM type");
	$nation = mysql_query ("SELECT * FROM nation");
?>
 


	<div class="container">
		<div class="text-xs-center">
			<h3 class="display-2" style="color: gray; font-family:sans-serif; font-size: 30px; ">Quản lý thể loại</h3>
			<hr>
		</div>
	</div>
    <div class="col-md-3 custyle">
	<form action="" method="post">
    <table class="table table-striped custab">
    <thead>
               <th>Thêm thể loại</th>
        </tr>
    </thead>
    				<input class="hidden" style="float:right" value="<?php if (isset($_POST['edit'])){echo $id;}?>" type="text" name="id">
            <tr>
                <td>Tên thể loại <input style="float:right" value="<?php if (isset($_POST['edit'])){echo $nametype;}?>" type="text" name="nametype" required></td>
				
            </tr>
			<tr>
                <td>Miêu tả <textarea style="height: 300px; float: right;"  name="description"  required><?php if (isset($_POST['edit'])){echo $description;}?></textarea></td>
				
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


