<?php include "../config.php"; 

if($_SESSION['role']!="1"){die("Ồ no. Bạn Không có quyền =))");}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="../css/admin/dashboard.css">
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
  <h2>Admin</h2>
  <ul>
    <li><a href="#" onclick="loadPage('dashboard_content.php')">📊 Thống kê</a></li>
    <li><a href="#" onclick="loadPage('users.php'); return false;">👤 Quản lý user</a></li>
    <li><a href="#" onclick="loadPage('list_tour.php')">🧳 Danh sách tour</a></li>
    <li><a href="#" onclick="loadPage('add_tour.php')">➕ Thêm tour</a></li>
    <li><a href="#" onclick="loadPage('add_tour.php')">📦 Đơn đặt tour</a></li>
    <li><a href="#" onclick="loadPage('chat_admin.php')">💬 Tin nhắn</a></li>
    <li><a href="../logout.php">🚪 Đăng xuất</a></li>
  </ul>
</div>

  <!-- Main -->
  <div class="main">
    <div id="content"></div> 
  </div>

  <script src="../js/admin/dashboard.js"></script>

</body>
</html>
