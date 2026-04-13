<?php session_start(); 
?>
	<link rel="stylesheet" href="css/style.css">

		<div class="menu"><a href="index.php">Trang chủ</a>

		
<?php
//Kiểm tra tài khoản admin | user
if(isset($_SESSION['user'])){
	echo '<a href="user/dashboard.php">User</a>';
	echo '<a href="user/tours.php">Tour</a>';
	echo '<a href="logout.php">Logout</a>';

	if($_SESSION['role']=="1"){
		echo '<a href="admin/board.php">Admin</a>';
	}

}else{
	echo '<a href="login.php">Login</a>';
	echo '<a href="signup.php">Sign up</a>';
}
?>
</div>

<div class="container">

<h2>Website du lịch</h2>
<p>Chào mừng bạn đến hệ thống đặt tour. Hello</p>
</div>

<a href="tours.php">e</a>