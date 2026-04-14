<?php include "../config.php"; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách tour</title>

    <!-- link CSS -->
    <link rel="stylesheet" href="../css/tour.css">
</head>

<body>

<div class="menu-icon" onclick="openMenu()">☰</div>

<div id="overlay" onclick="closeMenu()"></div>

<div id="sidebar">
    <a href="../index.php">Trang chủ</a>
    <a href="../index.php">Liên hệ</a>
</div>

<h2>Danh sách tour</h2>

<div class="list-tour">

<?php
$sql = "SELECT * FROM tb_tours";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
?>
    <a href="detail.php?id=<?php echo $row['id']; ?>" class="tour-link">
        <div class="tour">
            <h3><?php echo $row['nametour']; ?></h3>

            <img src="../database/image/<?php echo $row['image']; ?>" 
           
            <p><?php echo $row['description']; ?></p>

            <p>Giá: <?php echo $row['price']; ?></p>

            <p>Ngày: <?php echo $row['duration']; ?></p>

            <a href="booking.php?id=<?php echo $row['id']; ?>">Đặt tour</a>
        
        </div>
    </a>
<?php } ?>

</div>

<script src="../js/menu.js"></script>

</body>
</html>