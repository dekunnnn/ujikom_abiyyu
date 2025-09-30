
<?php 
// koneksi database
include 'koneksi.php';
$id = $_POST['id'];
$img = $_POST['img'];
$title = $_POST['title'];
$time = $_POST['time'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE films set img='$img', title='$title', time='$time' WHERE id=$id");
 
// mengalihkan halaman kembali ke index.php
header("location:read.php");
 
?>