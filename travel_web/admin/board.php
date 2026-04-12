<?php
include "../config.php";

if($_SESSION['role']!="1"){
die("Không có quyền");
}
?>


<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang Admin</title>
    <link rel="stylesheet" href="../css/board.css">
</head>

<body>

<div class="container">
    <h2>Trang Admin</h2>

    <div class="menu">
    <a href="dashboard.php">📊 Thống kê</a>
    <a href="users.php">👤 Quản lý user</a>
    <a href="list_tour.php">🧳 Danh sách tour</a>
    <a href="add_tour.php">➕ Thêm tour</a>
    <a href="booktour.php">📦 Đơn đặt tour</a>
    <a href="chat_admin.php">💬 Tin nhắn</a>
    <a href="../logout.php">🚪 Đăng xuất</a>
</div>
</div>

</body>
</html>