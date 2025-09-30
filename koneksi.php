<?php
$host_db  = "localhost";
$user_db  = "root";
$pass_db  = "";
$db       = "film";
$koneksi  = mysqli_connect($host_db,$user_db,$pass_db,$db);

if(mysqli_connect_errno()){
  echo "alamat  database error".mysqli_connect_error();
}
?>