<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
        <body>
            <h3>EDIT DATA DOSEN</h3>
            <?php
            include 'koneksi.php';
            $id = $_GET['id'];
            $data =mysqli_query($koneksi,"select * from dosen where id='$id'");
            while($d = mysqli_fetch_array($data)){
                ?>
 
            <form method="post" action="update.php">
        <table>
            <tr>
                <td>NIDN</td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $d['id'];?>">
                    <input type="text" name="nidn" value="<?php echo $d['nidn'];?>">
                </td>
</tr>
 <tr>
                <td>Nama Dosen</td>
                <td>
                    
                    <input type="text" name="namadosen" value="<?php echo $d['namadosen'];?>">
                </td>
</tr>
 <tr>
                <td>Jenis Kelamin</td>
                <td>
                    
                    <input type="text" name="jeniskelamin" value="<?php echo $d['jeniskelamin'];?>">
                </td>
</tr>
<tr>
                <td>Alamat</td>
                <td>
                    
                    <input type="text" name="alamat" value="<?php echo $d['alamat'];?>">
                </td>
</tr>
<tr>
                <td>No Hp</td>
                <td>
                    
                    <input type="text" name="nohp" value="<?php echo $d['nohp'];?>">
                </td>
</tr>
<tr>
                <td>Email</td>
                <td>
                    
                    <input type="text" name="email" value="<?php echo $d['email'];?>">
                </td>
</tr>
<tr>
                <td>Bidang Keahlian</td>
                <td>
                    
                    <input type="text" name="bidangkeahlian" value="<?php echo $d['bidangkeahlian'];?>">
                </td>
</tr>
<tr>
                <td>Jabatan Akademik</td>
                <td>
                    
                    <input type="text" name="jabatanakademik" value="<?php echo $d['jabatanakademik'];?>">
                </td>
</tr>
<tr>
                <td>Mata Kuliah</td>
                <td>
                    
                    <input type="text" name="matakuliah" value="<?php echo $d['matakuliah'];?>">
                </td>
</tr>
<tr>
    <td></td>
    <td><input type="submit" value="SIMPAN"></button>
    </tr>

    <tr>
        <td></td>
        <td> <a href="tabeldatadosen.php"></button>

    </table>
    </form>
    <?php
            }
            ?>