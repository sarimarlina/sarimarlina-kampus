<?php

include 'koneksi.php';
    $nama_mhs = $_POST['nama_mhs'];
    $nim = $_POST['nim'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $jurusan = $_POST['jurusan'];
    $keuangan_mhs= $_POST['keuangan_mhs'];
    $tgl_masuk = $_POST['tgl_masuk'];
    $status = $_POST['status'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('','$nama_mhs','$nim','$alamat','$nohp','$email','$jurusan','$keuangan_mhs','$tgl_masuk','$status')");
    header("location:tabeldatamhs.php");
?>

