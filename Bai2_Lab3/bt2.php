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

        <label for="email">Địa Chỉ Email</label><br>
        <input type="email" name="email" id="email"><br><br>

        <input type="submit" value="Xử Lý">

    </form>
</body>
</html>

<?php

$username = $_POST['user'];
$password = $_POST['pass'];
$repassword = $_POST['repass'];
$email = $_POST['email'];

$dsloi = array();

if(!$username || !$password || !$repassword || !$email){
    $dsloi[] = "Vui Lòng Điền Đầy Đủ Thông Tin";
}else{
    if (!preg_match("/^[a-zA-Z-' ]*$/",$password)) {
        $dsloi[] = "Mật khẩu tối thiểu 10 ký tự, phải có chữ hoa, chữ thường, chữ số, hai mật khẩu phải giống nhau";
      }

    if($password !== $repassword){
        $dsloi[] = "Mật Khẩu Chưa Khớp"; 
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $dsloi[] = "Email chưa đúng định dạng";
      }
}

if(count($dsloi)){
    foreach($dsloi as $loi){
        echo $loi;
    }
    return 0;
}

$mahoa = md5($password);

$array_email = explode('@', $email);

echo "Tên Đăng Ký: {$username} <br>";
echo "Mật Khẩu: {$password} <br>";
echo "Mật Khẩu Mã Hóa: {$mahoa} <br>";
echo "Email: {$email} <br>";
echo "Định danh Email: {$array_email[0]} <br>";
echo "Tên Miền: {$array_email[1]} <br>";