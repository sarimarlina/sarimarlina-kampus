<?php

include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $semester = $_POST['semester'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];


    mysqli_query($koneksi, "INSERT INTO kelas VALUES('','$nim','$nama','$semester','$jurusan','$kelas')");
    header("location:tabeldatakls.php");
?>

