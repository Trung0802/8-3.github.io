<?php
include 'connect.php';

if(isset($_POST['them'])){
    $email = $_POST['email'];
    $hoten = $_POST['hoten'];

    // Câu sql để thêm 1 record vào database
    $sql = "INSERT INTO thongtin(email, hoten) VALUE('$email', '$hoten')";
    // Thực thi câu truy vấn 
    $result = mysqli_query($conn, $sql);
    if($result){
        echo "Thêm tên thành công";
    }else{
        echo "Có lỗi xảy ra" . mysqli_error($conn);
    }    
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Thông Tin</title>
</head>
<body>
    <h1>QUẢN LÝ THÔNG TIN</h1>
    <form action="" method="post">
        <label for="">Email</label><br>
        <input type="text" name="email" ><br>

        <label for="">Họ tên</label><br>
        <input type="text" name="hoten"><br><br>

        <input type="submit" name="them" value="Thêm"><br>
    </form>
</body>
</html>

<?php
include 'list.php'
?>