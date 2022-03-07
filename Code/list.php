<?php
include 'connect.php';
// Tạo câu truy vấn lấy danh sách
$sql = "SELECT * FROM thongtin";
// Thực thi câu truy vấn
$result = mysqli_query($conn, $sql);

$rowcount =  mysqli_num_rows($result); //Trả về số lượng record trong database


// print($rowcount);
// Kiểm tra số lượng record có lớn hơn 0
// Nếu lớn hơn tức là có kết quả, ngược lại thì không ra kết quả  
if($rowcount > 0){
    echo '<table border=1>';
    echo '
        <thead>
            <tr>
                <th>Email</th>
                <th>Họ Tên</th>
                <th>Thao Tác</th>
        </thead>        
    ';
    while($row = mysqli_fetch_assoc($result)){
    // mysqli_fetch_assoc tìm và trả về 1 dòng kết quả nào đó dưới dạng một mảng kết hợp
    // var_dump($row);
    echo "
        <tr>
            <td>$row[email]</td>
            <td>$row[hoten]</td>
            <td><a href=delete.php?email=$row[email]>Xóa</a></td>
        </tr>
    ";
    // echo $row['email'];
    }
    echo '<table>';
}else{
    echo "Không có kết quả";
}

?>