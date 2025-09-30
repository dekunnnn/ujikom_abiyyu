<?php

$conn = mysqli_connect('localhost','root','','film');

function login($data) {
    $username = $data['username'];
    $password = $data['password'];
global $conn;

    $result = mysqli_query($conn,"SELECT * FROM films WHERE username='$username' AND password='$password'");
    
    if(mysqli_num_rows($result) > 0) {
        $_SESSION['login'] = true;
        header("Location: admin.php");
    }

}

function getDataFilms() {
    $rows = [];
    global $conn;

    $result = mysqli_query($conn,"SELECT * FROM films");
    while ($d = mysqli_fetch_array($result)) {
        $rows[] = $d;
    }

    return $rows;
}
