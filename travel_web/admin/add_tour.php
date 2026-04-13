<?php include "../config.php"; 

if(isset($_POST['add'])){

$name=$_POST['nametour'];
$des=$_POST['description'];
$price=$_POST['price'];
$date=$_POST['duration'];
$image=$_FILES['image']['name'];


move_uploaded_file($_FILES['image']['tmp_name'],"../database/image/".$image);

$sql="INSERT INTO tb_tours (nametour,description,price,image,duration)
VALUES('$name','$des','$price','$image','$date')";

  if(mysqli_query($conn, $sql)){
        echo "<script>alert('✅ Thêm tour thành công!');</script>";
    }else{
        echo "<script>alert('❌ Lỗi khi thêm!');</script>";
    }

}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm tour</title>
    <link rel="stylesheet" href="../css/add_tour.css">
</head>
<body>

<div class="container">
    <a href="../admin/board.php"><h2>Thêm tour</h2></a>

    <form method="post" enctype="multipart/form-data" class="form-tour">

        <label>Tên tour:</label>
        <input type="text" name="nametour" required>

        <label>Mô tả:</label>
        <textarea name="description" required></textarea>

        <label>Phân vùng:</label>
        <select name="region">
            <option value="Núi">Núi</option>
            <option value="Biển">Biển</option>
            <option value="Sinh thái">Sinh thái</option>
        </select>

        <label>Giá:</label>
        <input type="number" name="price" required>

        <label>Ngày:</label>
        <textarea name="duration" placeholder="VD: 3 ngày 2 đêm"></textarea>

        <label>Ảnh:</label>
        <input type="file" name="image">

        <button type="submit" name="add">Thêm</button>

    </form>
</div>

<div id="popup" class="popup">
    <div class="popup-content">
        <p id="popup-text"></p>
        <button onclick="closePopup()">OK</button>
    </div>
</div>

<script src="../js/add_tour.js"></script> //gọi add_tour.js từ mục js 

</body>
</html>