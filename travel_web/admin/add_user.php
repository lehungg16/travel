<?php include "../config.php"; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Thêm tài khoản</title>
</head>
<body>

<a href ="../admin/users.php"><h2>Thêm tài khoản</h2></a>

<form method="post">
    <input type="text" name="username" placeholder="Tên đăng nhập"><br><br>
    <input type="text" name="password" placeholder="Mật khẩu"><br><br>
    <button name="add">Thêm</button>
</form>

<?php
if(isset($_POST['add'])){
    $u = $_POST['username'];
    $p = $_POST['password'];

    mysqli_query($conn,"INSERT INTO tb_accounts(username,password) VALUES('$u','$p')");

    echo "<script>alert('Thêm thành công'); window.location='users.php';</script>";
}
?>

</body>
</html>