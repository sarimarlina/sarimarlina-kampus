<?php

include 'koneksi.php';
    $nidn = $_POST['nidn'];
    $namadosen = $_POST['namadosen'];
    $jeniskelamin = $_POST['jeniskelamin'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $bidangkeahlian = $_POST['bidangkeahlian'];
    $jabatanakademik = $_POST['jabatanakademik'];
    $matakuliah = $_POST['matakuliah'];

    mysqli_query($koneksi, "INSERT INTO dosen VALUES('','$nidn','$namadosen','$jeniskelamin','$alamat','$nohp','$email','$bidangkeahlian','$jabatanakademik','$matakuliah')");
    header("location:tabeldatadosen.php");
?>

