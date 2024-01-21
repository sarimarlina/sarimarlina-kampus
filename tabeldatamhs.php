<html>

<head>
    <title>DATA ADMIN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'koneksi.php';
    ?>


    <h3 style="margin-left: 15px;">Tabel Data Mahasiswa</h3>

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
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Jurusan</th>
            <th>Keuangan Mahasiswa</th>
            <th>Tanggal Masuk</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>

        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "SELECT * from mahasiswa where nama
             LIKE'%" . $cari . "%' OR nim LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($koneksi, "SELECT * from mahasiswa");
        }

        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr class="table-light">
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama_mhs']; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nohp']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['keuangan_mhs']; ?></td>
                <td><?php echo $d['tgl_masuk']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="btn btn-outline-info" href="datainputmhs.php" role="button">INPUT</a>
    <a class="btn btn-outline-danger" href="template/indexdb.php" role="button">KEMBALI</a>
</body>

</html>