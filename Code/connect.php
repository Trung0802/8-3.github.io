<?php
$severname = "localhost"; //Tên máy chủ csdl
$username = "root"; //Tên đang nhập vào csdl
$password = ""; //Tên đăng nhập vào csdl
$dbname = "th05db"; //Tên csdl;

//Tạo kết nối
$conn = new mysqli($severname, $username, $password, $dbname);
//Kiểm tra kết nối 
if(mysqli_connect_error()){
    echo "Kết nối tới MySQL thất bại" .mysqli_connect_error();
}

?>