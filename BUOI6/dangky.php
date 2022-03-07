<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thuc hanh 3</title>
</head>
<body>
<?php

include "connect.php"; 
$ten = $_POST["ten"];
$mk = $_POST["mat_khau"];
$mkgl = $_POST["mat_khau_go_lai"];
    if(isset($_POST["dangky"])){ 
        if($_POST["ten"] !== "" ||$_POST["mat_khau"] !== "" ||$_POST["mat_khau_go_lai"] !== "") {
            if($mk !== $mkgl) {
                echo "Mật khẩu không trùng, vui lòng nhập lại";
        }
        else{

            $md5pass=md5($mk); 
            $sql= "insert into nguoidung (ten, matkhau) values('$ten', '$md5pass')"; 
            if ($connect->query($sql) === TRUE) {

            header('Location:login.php'); 
        }   else {

            echo "Error: " . $sql . "<br>" . $connect->error;
        } 
    }
} 
else{

echo "Không được bỏ trống thông tin"; 
}

}
?>

    <form method="post">
        <b>Đăng Ký</b><br>

        <label for="ten">Tên đăng ký</label><br>
        <input type="text" name="ten" id="ten" value="<?=$ten?>" require style="width: 300px"><br>
       
        <label for="mat_khau">Mật khẩu</label><br>
        <input type="password" name="mat_khau" id="mat_khau" require style="width: 300px"><br>
       
        <label for="mat_khau_go_lai">Gõ lại mật khẩu</label><br>
        <input type="password" name="mat_khau_go_lai" id="mat_khau_go_lai" require style="width: 300px"><br>

        <p><input type="submit" value="Xử lý" name="xuly"></p>
       
    </form>
</body>
</html>
<?php
    $sql= "insert into nguoidung(name,matkhau) values ('$ten','$mkgl')";
    $connect ->query($sql);


?>