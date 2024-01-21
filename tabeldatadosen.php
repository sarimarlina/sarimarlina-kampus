<html>

<head>
    <title>DATA ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <?php
    include '../kampus/koneksi.php';
    ?>


    <h3 style="margin-left: 15px;">Tabel Data Dosen</h3>
    

    <div class="container w-50" style="margin-left: 2px;">
        <form class="d-flex" action="" method="get">
            <input class="form-control me-2" type="text" name="cari" placeholder="Cari Data">
            <input class="btn btn-outline-info" type="submit" value="Cari">
            <input class="btn btn-outline-info" type="submit" value="Refresh">
        </form>
    </div>

    <?php
    if (isset($_GET['cari'])) {
        $cari = $_GET['cari'];
        echo "<b>hasil pencarian : " . $cari . "</b>";
    }
    ?>
    <table barder="1" class="table table-dark">
        <tr>
            <th>NO</th>
            <th>NIDN</th>
            <th>Nama Dosen</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Bidang Keahlian</th>
            <th>Jabatan Akademik</th>
            <th>Mata Kuliah</th>
            <th>Opsi</th>
        </tr>

        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "SELECT * from dosen where namadosen
             LIKE'%" . $cari . "%' OR nidn LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($koneksi, "SELECT * from dosen");
        }

        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr class="table-light">
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nidn']; ?></td>
                <td><?php echo $d['namadosen']; ?></td>
                <td><?php echo $d['jeniskelamin']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nohp']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['bidangkeahlian']; ?></td>
                <td><?php echo $d['jabatanakademik']; ?></td>
                <td><?php echo $d['matakuliah']; ?></td>
                <td>
                    <a class="btn btn-primary" href="edit.php?id=<?php echo $d['id']; ?>" role="button">EDIT</a>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="btn btn-outline-info" href="datainputdosen.php" role="button">INPUT</a>
    <a class="btn btn-outline-danger" href="template/indexdb.php" role="button">KEMBALI</a>
</body>

</html>