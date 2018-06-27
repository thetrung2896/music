<?php
	$casi = mysql_query ("SELECT * FROM singer INNER JOIN nation ON singer.id_nation=nation.id_nation order by id_singer desc");
?>


    <div class="col-md-9 custyle">
    <form action="" method="POST">
               
        
    <table class="table table-striped custab">
    <thead>
   
        <tr>
            <th>STT</th>
            <th>Ca sĩ</th>
            <th width="100px">Hình ảnh</th>
			<th width="300px">Tiểu sử</th>
			<th width="150px">Lượt theo dõi</th>
            <th width="100px">Phân vùng</th>
			<th style="padding-left: 25px">Tùy chọn</th>          
        </tr>
    </thead>
		<?php
			$i=1;
			while ($rows_casi = mysql_fetch_array ($casi)) {
		?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rows_casi['namesinger']; ?></td>
                <td><img src="../assets/image/<?php echo $rows_casi['image']; ?>" width="60px"></td>
				<td><?php if (strlen($rows_casi['profile'])>150){
                    $substr = substr($rows_casi['profile'], 0,150);
                    echo $substr;
                        }; ?>...</td>
                <td><?php echo $rows_casi['follow']; ?></td>
                <td><?php echo $rows_casi['namnation']; ?></td>
                <td class="text-center">

                <button name="edit" value="<?php echo $rows_casi['id_singer']?>" class='btn btn-info btn-xs'> <i class="fa fa-pencil"></i> Edit</button>

                <button name="del" value="<?php echo $rows_casi['id_singer']?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>

                </td>
            </tr>
		<?php
			$i++;
			}
		?>
           
    </table>
    </form>
    </div>
