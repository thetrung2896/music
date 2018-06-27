<?php
	$baihat = mysql_query ("SELECT * FROM song INNER JOIN singer ON song.id_singer=singer.id_singer INNER JOIN type ON song.id_type=type.id_type order by id_song desc");
?>


    <div class="col-md-9 custyle">
    <form action="" method="POST">
               
        
    <table class="table table-striped custab">
    <thead>
   
        <tr>
            <th>STT</th>
            <th>Bài hát</th>
            <th>Hình ảnh</th>
			<th width="10px;">Link mp3</th>
			<th width="400px">Lời bài hát</th>
			<th width="0px">Lượt xem</th>
            <th>Ca sĩ</th>
            <th>Thể loại</th>
            <th>National</th>
            <th>Tùy chọn</th>

        </tr>
    </thead>
		<?php
			$i=1;
			while ($rows_baihat = mysql_fetch_array ($baihat)) {
		?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $rows_baihat['namesong']; ?></td>
                <td><img src="../assets/image/<?php echo $rows_baihat['images']; ?>" width="60px"></td>
				<td><?php echo $rows_baihat['linkmp3']; ?></td>

				<td><?php if (strlen($rows_baihat['lyrics'])>150){
                    $substr = substr($rows_baihat['lyrics'], 0,150);
                    echo $substr;
                        }; ?>...</td>

				<td><?php echo $rows_baihat['view']; ?></td>
                <td><?php echo $rows_baihat['namesinger']; ?></td>
                <td><?php echo $rows_baihat['nametype']; ?></td>
                <td><?php echo $rows_baihat['id_nation']; ?></td>
                <td class="text-center">

                <button name="edit" value="<?php echo $rows_baihat['id_song']?>" class='btn btn-info btn-xs' href="#"> <i class="fa fa-pencil"></i> Edit</button> 

                <button name="del" value="<?php echo $rows_baihat['id_song']?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>

                </td>
            </tr>
		<?php
			$i++;
			}
		?>
           
    </table>
    </form>
    </div>
