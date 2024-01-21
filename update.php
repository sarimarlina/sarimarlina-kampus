<?php
//koneksi database
include 'koneksi.php';

//menangkap data  yang dikirim dari form
$id = $_POST ['id'];
$nidn = $_POST ['nidn'];
$namadosen = $_POST ['namadosen'];
$jeniskelamin = $_POST ['jeniskelamin'];
$alamat = $_POST ['alamat'];
$nohp = $_POST ['nohp'];
$email = $_POST ['email'];
$bidangkeahlian = $_POST ['bidangkeahlian'];
$jabatanakademik = $_POST ['jabatanakademik'];
$statuspegawai = $_POST ['statuspegawai'];
$matakuliah = $_POST ['matakuliah'];

//update data ke database
mysqli_query ($koneksi, "update  dosen set nidn='$nidn',namadosen='$namadosen', jeniskelamin='$jeniskelamin',
alamat='$alamat', nohp='$nohp',email='$email', bidangkeahlian='$bidangkeahlian', jabatanakademik='$jabatanakademik', statuspegawai='$statuspegawai' where id='$id'");
//mengalihkan halaman kembali ke index.php
header ("location:tabeldatadosen.php");
?>

