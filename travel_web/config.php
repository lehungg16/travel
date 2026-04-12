<?php
$conn = mysqli_connect("localhost","root","","travel_web");

if(!$conn){
    die("Kết nối thất bại");
}
session_start();
?>