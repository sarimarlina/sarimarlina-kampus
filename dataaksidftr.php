<?php

include 'koneksi.php';
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['nohp'];
    $email = $_POST['email'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $agama = $_POST['agama'];
    $programdiminati = $_POST['programdiminati'];
    $asalsekolah = $_POST['asalsekolah'];
    $tahunlulus = $_POST['tahunlulus'];
    $noijazah = $_POST['noijazah'];
    $jurusan = $_POST['jurusan'];
    $nilai = $_POST['nilai'];
    $namaortu = $_POST['namaortu'];

    mysqli_query($koneksi, "INSERT INTO daftar VALUES('','$nama','$jk','$alamat','$nohp','$email','$kewarganegaraan','$agama','$programdiminati','$asalsekolah','$tahunlulus','$noijazah','$jurusan','$nilai','$namaortu')");
    header("location:tabeldatadaftar.php");
?>

