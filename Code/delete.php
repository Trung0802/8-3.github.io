<?php
include 'connect.php';
if(isset($_REQUEST['email'])){
    $email = $_GET['email'];

    $sql = "DELETE FROM thongtin WHERE email='$email'";
    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location:index.php'); //Câu lệnh chuyển hướng 

    }else{
        echo "Xóa 1 record thất bại" . mysqli_error($conn);
    }
}


?>