<?php
	$type = mysql_query ("SELECT * FROM type INNER JOIN nation ON type.id_nation=nation.id_nation order by id_type desc");
?>


    <div class="col-md-9 custyle">
    <form action="" method="POST">
               
        
    <table class="table table-striped custab">
    <thead>
   
        <tr>
            <th>STT</th>
            <th>Thể loại</th>
            <th width="350px">Miêu tả</th>
            <th width="100px">Phân vùng</th>
			<th style="padding-left:55px">Tùy chọn</th>          
        </tr>
    </thead>
		<?php
			$i=1;
			while ($rows_type = mysql_fetch_array ($type)) {
		?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rows_type['nametype']; ?></td>
				<td><?php if (strlen($rows_type['description'])>150){
                    $substr = substr($rows_type['description'], 0,150);
                    echo $substr;
                        }; ?>...</td>
                <td><?php echo $rows_type['namnation']; ?></td>
                <td class="text-center">

                <button name="edit" value="<?php echo $rows_type['id_type']?>" class='btn btn-info btn-xs'> <i class="fa fa-pencil"></i> Edit</button>

                <button name="del" value="<?php echo $rows_type['id_type']?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>

                </td>
            </tr>
		<?php
			$i++;
			}
		?>
           
    </table>
    </form>
    </div>
