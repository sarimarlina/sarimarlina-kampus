<?php

include '[koneksi.php';
$id =$_GET['id'];

mysqli_query($koneksi,"delete from datasiswa where id='$id'");

header("location:tabeldata.php");

?>