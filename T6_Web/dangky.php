<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 2</title>
</head>
<body>
    <h1>Đăng Ký</h1>
    <form action="" method="post">
        <label for="user">Tên Đăng Ký</label><br>
        <input type="text" name="user" id="user"><br><br>

        <label for="pass">Mật Khẩu</label><br>
        <input type="password" name="pass" id="pass"><br><br>

        <label for="repass">Gõ Lại Mật Khẩu</label><br>
        <input type="password" name="repass" id="repass"><br><br>


        <input type="submit"  value="Đăng ký">
        
        <a class="huy" type="submit" href="index.php">Hủy
        </a> 

    </form>
</body>
</html>

<?php

$username = $_POST['user'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];


$dsloi = array();

if(!$username || !$password || !$repassword ){
    $dsloi[] = "Vui Lòng Điền Đầy Đủ Thông Tin";
}else{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
        $dsloi[] = "Mật khẩu tối thiểu 10 ký tự, phải có chữ hoa, chữ thường, chữ số, hai mật khẩu phải giống nhau";
      }

    if($password !== $repassword){
        $dsloi[] = "Mật Khẩu Chưa Khớp"; 
    }
    
}

if(count($dsloi)){
    foreach($dsloi as $loi){
        echo $loi;
    }
    return 0;
}

$mahoa = md5($password);



echo "Tên Đăng Ký: {$username} <br>";
echo "Mật Khẩu: {$password} <br>";
echo "Mật Khẩu Mã Hóa: {$mahoa} <br>";
