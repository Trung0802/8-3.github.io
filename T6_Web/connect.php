<?php
$servername = "localhost"; // tenmaychu csdl
$username = "root"; // ten dang nhap vao csdl
$password = ""; // ten dang nhap csdl
$dbname = "mydb";// ten csdl
// tao ket noi
$conn = new mysqli($servername,$username,$password,$dbname);
// kiem tra ket noi
if(mysqli_connect_errno()){
    echo "Ket noi toi MySQL that bai" . mysqli_connect_error();
}
?>