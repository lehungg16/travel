<?php include "../config.php"?>

<?php
$sql = "SELECT b.*, t.nametour, a.username
        FROM tb_bookings b
        JOIN tb_tours t ON b.tour_id = t.id
        JOIN tb_accounts a ON b.user_id = a.account_id
        ORDER BY b.id DESC";

$result = mysqli_query($conn, $sql);
?>

<h2>Danh sách đơn đặt tour</h2>

<table border="1">
<tr>
    <th>ID</th>
    <th>Tour</th>
    <th>Tên</th>
    <th>SĐT</th>
    <th>Email</th>
    <th>Số người</th>
    <th>Ngày đi</th>
    <th>Trạng thái</th>
    <th>Hành động</th>
</tr>

<?php while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['nametour']; ?></td>
    <td><?php echo $row['name']; ?></td>
    <td><?php echo $row['phone']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['people']; ?></td>
    <td><?php echo $row['booking_date']; ?></td>
    <td><?php echo $row['status']; ?></td>
    <td>
        <a href="confirm.php?id=<?php echo $row['id']; ?>">✔ Xác nhận</a> |
        <a href="cancel.php?id=<?php echo $row['id']; ?>">❌ Hủy</a>
    </td>
</tr>
<?php } ?>
</table>