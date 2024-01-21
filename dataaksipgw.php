<?php

include 'koneksi.php';
    $nama_pgw = $_POST['nama_pgw'];
    $nip = $_POST['nip'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $jeniskelamin = $_POST['jeniskelamin'];

    mysqli_query($koneksi, "INSERT INTO pegawai VALUES('','$nama_pgw','$nip','$alamat','$nohp','$email','$jeniskelamin')");
    header("location:tabeldatapgw.php");
?>

