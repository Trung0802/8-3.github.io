<?php
// require,include:dung de import 1 file phpA(connect) vao 1 file php8(index)
//muc dich: giup file phpB(index) co the su dung duoc cac thu vien trong phpB(connect)
//require: neu co loi xay ra khi no se dung chuong trinh
//rinclude: neu co loi xay ra thi no chi canh bao
include 'connect.php';
if(isset($_POST['them'])){
    $hoten = $_POST['hoten'];


    //cau sql de them 1 record vao database
    $sql = "INSERT INTO thongtin(email,hoten) VALUES('$email','$hoten')";
    //thuc thi cau truy van va gan ket qua vao $result  
    $result = mysqli_query($conn ,$sql);
    if($result){
        echo "Them san pham thanh cong";    
    }else{
        echo "Co loi xay ra" . mysqli_error($conn);
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <a class="dangnhap" href="quantri.php">Đăng nhập
    </a>    
    <br>
    <label for="index">Đây là trang chủ</label><br>
</body>
</html>