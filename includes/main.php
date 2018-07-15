<?php
	function page($id_nation){
		$qr="
			SELECT * FROM nation inner join song
			on song.id_national = nation.id_nation
			WHERE id_nation=$id_nation
			ORDER BY view DESC
		";
		return mysql_query($qr);

	}
	function type(){
		$qr="
			SELECT * FROM nation
		";
		return mysql_query($qr);
	}
	function song(){
		$qr="
			SELECT * FROM song inner join singer on singer.id_singer=song.id_singer
			ORDER BY id_song DESC
			Limit 0,3
		";
		return mysql_query($qr);
	}
	function singer(){
		$qr="
			SELECT * FROM singer
			
			Limit 0,9		
		";
		return mysql_query($qr);
	}
	function mediaplayer(){
		$qr="
			SELECT * FROM song inner join singer 
			on singer.id_singer=song.id_singer
			inner join type
			on type.id_type=song.id_type
			ORDER BY id_song ASC
		";
		return mysql_query($qr);
	}
	function song1(){
		$qr="
			SELECT * FROM song inner join singer on singer.id_singer=song.id_singer
			ORDER BY id_song DESC
			Limit 0,12
		";
		return mysql_query($qr);
	}
	function singer1(){
		$qr="
			SELECT * FROM singer
			ORDER BY id_singer DESC
			Limit 0,7			
		";
		return mysql_query($qr);
	}
	function pages($id_song){
		$qr="
			SELECT * FROM song inner join singer 
			on singer.id_singer=song.id_singer
			inner join type
			on type.id_type=song.id_type 
			WHERE id_song = $id_song
			ORDER BY id_song ASC
			Limit 0,3 
		";
		return mysql_query($qr);

	}
	function singer2(){
		$qr="
			SELECT * FROM singer
			Limit 3,5			
		";
		return mysql_query($qr);
	}
	function singer3($id_singer){
		$qr="
			SELECT * FROM singer
			WHERE id_singer=$id_singer
		";
		return mysql_query($qr);
	}
	function singer4($id_singer1){
		$qr="
			SELECT * FROM singer inner join song
			on song.id_singer= singer.id_singer
			WHERE singer.id_singer=$id_singer1 
			
		";
		return mysql_query($qr);

	}
	function mediaplayer1(){
		$qr="
			SELECT * FROM song inner join singer 
			on singer.id_singer=song.id_singer
			inner join type
			on type.id_type=song.id_type
			ORDER BY id_song ASC
			limit 2,8
		";
		return mysql_query($qr);
	}
	function phantrang($id_nation, $from, $so)
	{
		$qr="
			SELECT * FROM nation inner join song
			on song.id_national = nation.id_nation
			WHERE id_nation=$id_nation
			ORDER BY view DESC
			Limit $from,$so
		";
		return mysql_query($qr);
	}

?>