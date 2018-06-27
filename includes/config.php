<?php
//Cấu hình cơ sở dữ liệu MYSQL
$db_type='mysql';
$db_charset='utf8';
$db_host='127.0.0.1';
$db_username='root';
$db_password='';
$database='music_ntt';
//Kết nối với CSDL
$conn = @mysql_connect("$db_host","$db_username","$db_password") or die ("Vui lòng kiểm tra cấu hình cơ sở dữ liệu SQL");
@mysql_select_db("$database", $conn) or die("Vui lòng kiểm tra cấu hình cơ sở dữ liệu MYSQL");
mysql_query("set names utf8");


?>