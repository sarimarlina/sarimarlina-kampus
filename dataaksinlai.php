<?php

include 'koneksi.php';
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $komputer = $_POST['komputer'];
    $bahasaindonesia = $_POST['bahasaindonesia'];
    $bahasainggris = $_POST['bahasainggris'];
    $jumlah = $_POST['jumlah'];
    $rata = $_POST['rata'];
    


    mysqli_query($koneksi, "INSERT INTO nilai VALUES('','$nim','$nama','$komputer','$bahasaindonesia','$bahasainggris','$jumlah','$rata')");
    header("location:tabeldatanlai.php");
?>

