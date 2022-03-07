<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài Tập 1</title>
    <style>
        .container{
            width: 400px;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>Thêm Sản Phẩm</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="sp">Tên Sản Phẩm</label><br>
        <input type="text" placeholder="Nhập Tên Sản Phẩm" name="san_pham" id="sp"><br><br>

        <label for="gb">Giá Bán</label><br>
        <input type="text" placeholder="Nhập Giá Bán" name='gia_ban' id="gb"><br><br>

        <label for="dm">Danh Mục</label><br>
        <select name="danh_muc" id="dm"><br>
            <option value="Danh Mục 1">Danh Mục 1</option>
            <option value="Danh Mục 2">Danh Mục 2</option>
            <option value="Danh Mục 3">Danh Mục 3</option>
        </select><br><br>

        <label for="ha">Hình Ảnh</label><br>
        <input type="file" name="hinh_anh" id="ha"><br><br>
        
        <label for="mt">Mô Tả</label><br>
        <textarea name="mo_ta" id="mt" cols="30" rows="10"></textarea><br><br>

        <input type="submit" value="Xử Lý">
    </form>
    </div>
</body>
</html>

<?php
    $tensp = $_POST['san_pham'];
    $giaban = $_POST['gia_ban'];
    $danhmuc = $_POST['danh_muc'];
    $mota = $_POST['mo_ta'];
    $anh = $_FILES['hinh_anh'];
   

    $dsloi = array();

    if(!$tensp || !$giaban || !$danhmuc || !$anh || !$mota){
        $dsloi[] = 'Vui Lòng Điền Đầy Đủ Thông Tin';
    }

    if(!getimagesize($anh['tmp_name'])){
        $dsloi[] = 'File Phải Là Ảnh';
    }

    if(count($dsloi)){
        foreach($dsloi as $loi){
            echo $loi;
        }
        return 0;
    }

    $urlhinhanh = 'hinh_anh/' .$anh['name']; 

    move_uploaded_file($anh['tmp_name'], $urlhinhanh);

    echo "Tên Sản Phẩm: {$tensp} <br>";
    echo "Giá Bán: {$giaban} <br>";
    echo "Danh Mục: {$danhmuc} <br>";
    echo "Mô Tả: {$mota} <br>";
    echo "<img src= '{$urlhinhanh}'> <br>";

?>
