<?php session_start(); 
?>
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

}
?>

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
    position:sticky;top:0;
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
        <a href="#" data-vi="Trang chủ" data-en="Home"></a>
        <a href="#tour" data-vi="Tour" data-en="Tours"></a>
        <a href="#about" data-vi="Giới thiệu" data-en="About"></a>
        <a href="#contact" data-vi="Liên hệ" data-en="Contact"></a>
        <a href="login.php" data-vi="Đăng Nhập" data-en="Contact"></href=>
        <a href="signup.php" data-vi="Đăng Ký" data-en="Contact"></a>

    </nav>
    <button class="lang-btn" onclick="toggleLang()">EN</button>
</header>

<!-- HERO -->
<div class="hero">
    <h1 data-vi="Khám phá Gia Lai xanh mát" data-en="Explore Green Gia Lai"></h1>
    <button data-vi="Khám phá ngay" data-en="Explore Now"></button>
</div>

<!-- TOUR -->
<section id="tour" class="fade">
<h2 data-vi="Tour nổi bật" data-en="Featured Tours"></h2>

<div class="tours">

<div class="card">
<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e">
<div class="content">
<h3>Biển Hồ Pleiku</h3>
<p data-vi="Hồ nước tuyệt đẹp" data-en="Beautiful lake"></p>
<b>500.000 VNĐ</b>
<button onclick="openBooking('Biển Hồ Pleiku',500000)">Đặt tour</button>
</div>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
<div class="content">
<h3>Thác Phú Cường</h3>
<p data-vi="Thác nước hùng vĩ" data-en="Majestic waterfall"></p>
<b>600.000 VNĐ</b>
<button onclick="openBooking('Thác Phú Cường',600000)">Đặt tour</button>
</div>
</div>

<div class="card">
<img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
<div class="content">
<h3>Chư Đăng Ya</h3>
<p data-vi="Núi lửa độc đáo" data-en="Unique volcano"></p>
<b>700.000 VNĐ</b>
<button onclick="openBooking('Chư Đăng Ya',700000)">Đặt tour</button>
</div>
</div>

</div>
</section>

<!-- ABOUT -->
<section id="about" class="about fade">
<img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
<div>
<h2 data-vi="Về Gia Lai" data-en="About Gia Lai"></h2>
<p data-vi="Gia Lai nổi tiếng với thiên nhiên hoang sơ, rừng núi và văn hóa Tây Nguyên."
data-en="Gia Lai is famous for its wild nature and culture."></p>
</div>
</section>

<!-- GALLERY -->
<section class="fade">
<h2 data-vi="Hình ảnh đẹp" data-en="Gallery"></h2>
<div class="gallery">
<img src="https://images.unsplash.com/photo-1501785888041-af3ef285b470">
<img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e">
<img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb">
</div>
</section>

<footer id="contact">
<p data-vi="Liên hệ: 0123456789"
data-en="Contact: 0123456789"></p>
<p>© 2026 Travel Gia Lai</p>
</footer>

<!-- BOOKING MODAL -->
<div class="booking-modal" id="bookingModal">
<div class="booking-box">
<span class="close" onclick="closeBooking()">×</span>

<h2 id="tourName">Đặt tour</h2>

<div class="booking-grid">
<input placeholder="Tên" id="name">
<input placeholder="SĐT" id="phone">
<input type="number" placeholder="Số người" id="people">
<input type="date" id="date">
</div>

<div class="summary">
<p>Tour: <b id="tourText"></b></p>
<p>Giá: <b id="priceText"></b></p>
</div>

<button class="confirm-btn" onclick="submitBooking()">Xác nhận</button>
</div>
</div>

<script>
// LANGUAGE
let lang="vi";
function toggleLang(){
lang=(lang==="vi")?"en":"vi";
document.querySelectorAll("[data-vi]").forEach(el=>{
el.innerText=el.getAttribute("data-"+lang);
});
document.querySelector(".lang-btn").innerText=lang==="vi"?"EN":"VI";
}
toggleLang();toggleLang();

// ANIMATION
window.addEventListener("scroll",()=>{
document.querySelectorAll(".fade").forEach(el=>{
if(el.getBoundingClientRect().top < window.innerHeight-100){
el.classList.add("show");
}
});
});

// BOOKING
let currentTour="",currentPrice=0;

function openBooking(name,price){
currentTour=name;
currentPrice=price;
document.getElementById("tourName").innerText="Đặt tour: "+name;
document.getElementById("tourText").innerText=name;
document.getElementById("priceText").innerText=price+" VNĐ";
document.getElementById("bookingModal").style.display="flex";
}

function closeBooking(){
document.getElementById("bookingModal").style.display="none";
}

function submitBooking(){
let data={
name:document.getElementById("name").value,
phone:document.getElementById("phone").value,
people:document.getElementById("people").value,
date:document.getElementById("date").value,
tour:currentTour,
price:currentPrice,
status:"Chờ xử lý"
};

let bookings=JSON.parse(localStorage.getItem("bookings"))||[];
bookings.push(data);
localStorage.setItem("bookings",JSON.stringify(bookings));

alert("✅ Đặt tour thành công!");
closeBooking();
}
</script>

</body>
</html>