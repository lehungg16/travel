<?php include "../config.php"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Danh sách Tour</title>
<link rel="stylesheet" href="css/list_tour.css">
</head>

<body>

<div class="header">
    <h2>Danh sách Tour Du Lịch</h2>
</div>

<!-- SEARCH + FILTER -->
<div class="filter-box">
    <input type="text" placeholder="Tìm theo địa điểm...">

    <select>
        <option>Giá</option>
        <option>Dưới 5 triệu</option>
        <option>5 - 10 triệu</option>
    </select>

    <select>
        <option>Thời gian</option>
        <option>1-3 ngày</option>
        <option>4-7 ngày</option>
    </select>

    <select>
        <option>Loại tour</option>
        <option>Trong nước</option>
        <option>Quốc tế</option>
    </select>

    <input type="date">
</div>

<!-- SORT -->
<div class="sort-box">
    Sắp xếp:
    <select>
        <option>Giá tăng</option>
        <option>Giá giảm</option>
        <option>Đánh giá cao</option>
        <option>Bán chạy</option>
        <option>Mới nhất</option>
    </select>
</div>

<!-- LIST -->
<div class="tour-list">

<?php
// DATA DEMO
$tours = [
    ["name"=>"Đà Nẵng 3N2Đ","price"=>"3.500.000","img"=>"https://picsum.photos/300/200?1"],
    ["name"=>"Phú Quốc 4N3Đ","price"=>"6.200.000","img"=>"https://picsum.photos/300/200?2"],
    ["name"=>"Đà Lạt 2N1Đ","price"=>"2.000.000","img"=>"https://picsum.photos/300/200?3"],
];

foreach($tours as $tour){
?>

<div class="tour-card">
    <span class="badge">HOT</span>
    <span class="heart" onclick="toggleHeart(this)">❤</span>

    <img src="<?= $tour['img'] ?>">

    <div class="tour-content">
        <h4><?= $tour['name'] ?></h4>

        <p class="price"><?= $tour['price'] ?> VNĐ</p>

        <p>⏰ 3 ngày 2 đêm</p>

        <p class="rating">⭐⭐⭐⭐☆ (120)</p>

        <p>Tour cực đẹp, trải nghiệm tuyệt vời...</p>

        <p>🔥 Còn 5 chỗ</p>

        <a href="detail.php" class="btn detail">Xem chi tiết</a>
        <a href="#" class="btn book">Đặt ngay</a>
    </div>
</div>

<?php } ?>

</div>

<!-- CHAT / HOTLINE -->
<div style="position:fixed;bottom:20px;right:20px;">
    <button style="padding:10px;border:none;border-radius:50%;background:#00aaff;color:white;">💬</button>
</div>

<script>
function toggleHeart(el){
    el.classList.toggle("active");
}
</script>

</body>
</html>

