<?php session_start(); ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Travel Gia Lai</title>

<head>
<style>
    *{margin:0;padding:0;box-sizing:border-box;font-family:Arial}
body{background:#f4f9f9}

/* HEADER */
header{
   display:flex;
    justify-content:space-between;
    padding:15px 40px;
    background:#0a9396;
    color:white;

    position:fixed;
    top:0;
    width:100%;
    z-index:1000;

    backdrop-filter: blur(10px);
    background: rgba(10,147,150,0.6);
    
}
header nav a{margin:0 10px;color:white;text-decoration:none}
.lang-btn{background:white;color:#0a9396;padding:5px 10px;cursor:pointer}

/* HERO */
.hero{
    height:90vh;
    background:url("https://images.unsplash.com/photo-1501785888041-af3ef285b470") center/cover fixed;
    display:flex;flex-direction:column;justify-content:center;align-items:center;
    color:white;text-align:center;
}
.hero h1{font-size:50px}
.hero button{
    margin-top:20px;padding:12px 20px;
    background:#94d2bd;border:none;cursor:pointer
}

/* SECTION */
section{padding:60px 40px}

/* TOUR */
.tours{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}
.card{
    background:white;border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
    transition:0.3s;
}
.card:hover{transform:translateY(-10px)}
.card img{width:100%;height:180px;object-fit:cover}
.card .content{padding:15px}
.card button{
    margin-top:10px;
    background:#0a9396;color:white;border:none;
    padding:8px 12px;cursor:pointer;
}

/* ABOUT */
.about{display:flex;flex-wrap:wrap;gap:20px}
.about img{max-width:400px;border-radius:10px}

/* GALLERY */
.gallery{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:10px;
}
.gallery img{
    width:100%;height:150px;
    object-fit:cover;border-radius:8px;
}

/* FOOTER */
footer{
    background:#0a9396;color:white;
    text-align:center;padding:20px;
}

/* ANIMATION */
.fade{opacity:0;transform:translateY(30px);transition:1s}
.show{opacity:1;transform:translateY(0)}

/* BOOKING MODAL */
.booking-modal{
    position:fixed;top:0;left:0;width:100%;height:100%;
    background:rgba(0,0,0,0.6);
    display:none;justify-content:center;align-items:center;
}
.booking-box{
    background:white;padding:30px;width:500px;
    max-width:90%;border-radius:15px;
    animation:fadeIn 0.5s;
}
@keyframes fadeIn{
    from{opacity:0;transform:translateY(30px)}
    to{opacity:1;transform:translateY(0)}
}
.close{float:right;cursor:pointer;font-size:20px}

.booking-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:15px;margin:20px 0;
}
.booking-grid input{
    padding:10px;border:1px solid #ccc;
    border-radius:8px;width:100%;
}

.summary{
    background:#e0fbfc;padding:10px;
    border-radius:10px;margin-bottom:20px;
}

.confirm-btn{
    width:100%;padding:12px;
    background:#0a9396;color:white;
    border:none;border-radius:10px;
    cursor:pointer;
}
</style>

</head>

<body>

<header>
    <h2>Travel Gia Lai</h2>
    <nav>
        <a href="index.php" data-vi="Trang chủ" data-en="Home"></a>
        <a href="tours.php" data-vi="Tour" data-en="Tours"></a>
        <a href="#about" data-vi="Giới thiệu" data-en="About"></a>
        <a href="#contact" data-vi="Liên hệ" data-en="Contact"></a>
        <?php
        if(isset($_SESSION['user'])){
            echo '<a href="logout.php">Logout</a>';

	        if($_SESSION['role']=="1"){
	    	    echo '<a href="admin/board.php">Admin</a>';
	        }
        }else{
                echo '<a href="login.php" data-vi="Đăng Nhập" data-en="Contact"></a>';
                echo '<a href="signup.php" data-vi="Đăng Ký" data-en="Contact"></a>';
            }        
        ?>
    </nav>
    <button class="lang-btn" onclick="toggleLang()">EN</button>
</header>