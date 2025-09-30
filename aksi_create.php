<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$img = $_POST['img'];
$title = $_POST['title'];
$time = $_POST['time'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into films values('$id','$img','$title','$time')");
 
// mengalihkan halaman kembali ke index.php
header("location:admin.php");
?>