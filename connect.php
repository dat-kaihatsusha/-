<?php
$db_host = 'localhost';
$db_user = 'root';
$db_passwd = '';
$db_name = 'data_hocsinh';

$conn = mysqli_connect($db_host,$db_user,$db_passwd) 
or die("Loi ket noi co so du lieu: ".mysqli_connect_error());

echo "Kết nối thành công!<br>";

mysqli_select_db($conn, $db_name) or die("Loi CSDL <b>$db_name</b> khong ton tai!");
// Đến đây chọn CSDL thành công!
mysqli_set_charset($conn,'utf8');
// Đến đây hoàn thành kết nối CSDL
