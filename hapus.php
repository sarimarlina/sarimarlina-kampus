<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query ($koneksi,"delete from dosen where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:tabeldatadosen.php");
?>

<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query ($koneksi,"delete from daftar where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:tabeldatadaftar.php");
?>

<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query ($koneksi,"delete from kelas where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:tabeldatakls.php");
?>

<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query ($koneksi,"delete from mahasiswa where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:tabeldatamhs.php");
?>

<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query ($koneksi,"delete from nilai where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:tabeldatanlai.php");
?>

<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang dikirim dari url
$id = $_GET ['id'];

//menghapus data dari database
mysqli_query ($koneksi,"delete from nilai where id='$id'");

//mengalihkan halaman kembali ke index.php
header("location:tabeldatanlai.php");
?>