<?php
session_start();
include_once('connect.php');
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['password'];
    $select = "select * from khachhang where username='$user' and matkhau='$pass'";
    $kq=mysqli_query($connect,$select);
    $num = mysqli_num_rows($kq);
    if($num==1){
        $user = mysqli_fetch_array($kq);
        $_SESSION['user']['user_id'] = $user['MKH'];
        $_SESSION['user']['user_name'] = $user['TenKH'];
        header("location: index.php");
        }else{
            $error = 'Nhập lại thông tin login!';
        }
}
?>




<body>
<form name=frm action="" method=post>
<h1>Đăng nhập</h1>
Tên đăng nhập: <input type=text name=users><br>
Mật khẩu: <input type=password name=password><br>
<span style="color:red"><?php if(isset($error)) echo $error ?></span><br>
<button type=submit name=login>Đăng nhập</button>
<button type=reset name=reset>Hủy</button>
</form>
</body>