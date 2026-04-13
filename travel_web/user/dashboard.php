<?php
include "../config.php";

// ❌ Chưa login thì đá về login
if(!isset($_SESSION['user'])){
    header("Location: ../login.php");
    exit();
}

// ❌ Không phải user (ví dụ admin vào) thì chặn
if($_SESSION['role'] != "0"){ // 0 = user, 1 = admin
    die("Bạn không có quyền truy cập trang này");
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang User</title>
	<link rel="stylesheet" href="../css/user/user.css">
</head>
<body>

<div class="container">

    <h2>Xin chào <?php echo $_SESSION['user']; ?> 👋</h2>

    <div class="menu">
        <a href="tours.php">Xem tour</a>
        <a href="mybooking.php">Lịch sử đặt tour</a>
		<a href="review.php">Đánh giá</a>
        <a href="../logout.php">Đăng xuất</a>
    </div>

    <button onclick="showAlert()">Click test JS</button>

</div>

<!-- JS riêng -->
<script src="../js/user/user.js"></script>

</body>
</html>