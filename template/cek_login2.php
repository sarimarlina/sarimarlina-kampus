<?php

session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:indexdb.php");
    } else if ($data['level'] == "dosen") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "dosen";
        header("location:indexdsn.html");
    } else if ($data['level'] == "pegawai") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pegawai";
        header("location:indexpgw.html");
    } else if ($data['level'] == "mahasiswa") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "mahasiswa";
        header("location:indexmhs.html");
     
    } else if ($data['level'] == "mahasiswa") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "mahasiswa";
        header("location:indexmhs.html");
    }
}
?>