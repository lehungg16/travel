<?php 


require 'site.php';
load_header();

?>


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

<?php load_footer(); ?>