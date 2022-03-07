<?php
$connect=mysqli_connect("localhost","root","","mydb");
if($connect == false){
    die('Loi ket noi!'.mysqli_connect_error());
}
?>