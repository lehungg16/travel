<?php include "config.php"; ?>

<?php
if(isset($_POST['signup'])){

$user = $_POST['username'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// kiểm tra password nhập lại
if($pass != $repass){
    echo "❌ Mật khẩu không khớp!";
    exit();
}

$checkUser = mysqli_query($conn, "SELECT * FROM tb_accounts WHERE username='$user'");
// Xử lý chống trùng user với database
if(mysqli_num_rows($checkUser) > 0){
    echo "❌ Username đã tồn tại!";
    exit();
}
//tạo id ngẫu nhiên
function generateID() {
    $letter = chr(rand(65, 90)); // A-Z
    $number = str_pad(rand(0, 9999), 4, "0", STR_PAD_LEFT);
    return $letter . "_" . $number;
}
// tạo id ko trùng
do {
    $id = generateID();
    $check = mysqli_query($conn, "SELECT id FROM tb_accounts WHERE id='$id'");
} while(mysqli_num_rows($check) > 0);


$sql="INSERT INTO tb_accounts(id,username,password,fullname, email, phone) VALUES('$id','$user','$pass','$fullname','$email','$phone')";
mysqli_query($conn,$sql);

echo " ✅Tạo tài khoản thành công";
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký - Travel</title>
    <link rel="stylesheet" href="css/signup.css">
</head>
<body>

<div class="signup-container">

    <form method="post" class="signup-form">
        <h2>✈️ Đăng ký</h2>

        <input type="text" name="username" placeholder="Tên đăng nhập" required>

        <input type="password" name="password" placeholder="Mật khẩu" required>

        <input type="password" name="repassword" placeholder="Nhập Lại Mật khẩu" required>
        
        <input type="text" name="fullname" placeholder="Fullname" required>

        <input type="text" name="email" placeholder="Email" required>

        <input type="text" name="phone" placeholder="Phone" required>

        <button name="signup">Đăng ký</button>

        <p class="login-link">Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
    </form>

</div>

</body>
</html>
