<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'koneksi.php';
    ?>


    <h3 style="margin-left: 15px;">Tabel Data Pendaftaran</h3>

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
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>Program Diminati</th>
            <th>Asal Sekolah</th>
            <th>Tahun Lulus</th>
            <th>No Ijazah</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Nama Ortu</th>
            <th>Opsi</th>
        </tr>

        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "SELECT * from daftar where nama
             LIKE'%" . $cari . "%' OR nama LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($koneksi, "SELECT * from daftar");
        }

        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr class="table-light">
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nohp']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['kewarganegaraan']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['programdiminati']; ?></td>
                <td><?php echo $d['asalsekolah']; ?></td>
                <td><?php echo $d['tahunlulus']; ?></td>
                <td><?php echo $d['noijazah']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['nilai']; ?></td>
                <td><?php echo $d['namaortu']; ?></td>

                <td>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="btn btn-outline-info" href="datainputdftr.php" role="button">INPUT</a>
    <a class="btn btn-outline-danger" href="template/indexdb.html" role="button">KEMBALI</a>
</body>

</html>

<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'koneksi.php';
    ?>


    <h3 style="margin-left: 15px;">Tabel Data Pendaftaran</h3>

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
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Email</th>
            <th>Kewarganegaraan</th>
            <th>Agama</th>
            <th>Program Diminati</th>
            <th>Asal Sekolah</th>
            <th>Tahun Lulus</th>
            <th>No Ijazah</th>
            <th>Jurusan</th>
            <th>Nilai</th>
            <th>Nama Ortu</th>
            <th>Opsi</th>
        </tr>

        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "SELECT * from daftar where nama
             LIKE'%" . $cari . "%' OR nama LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($koneksi, "SELECT * from daftar");
        }

        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr class="table-light">
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jk']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['nohp']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['kewarganegaraan']; ?></td>
                <td><?php echo $d['agama']; ?></td>
                <td><?php echo $d['programdiminati']; ?></td>
                <td><?php echo $d['asalsekolah']; ?></td>
                <td><?php echo $d['tahunlulus']; ?></td>
                <td><?php echo $d['noijazah']; ?></td>
                <td><?php echo $d['jurusan']; ?></td>
                <td><?php echo $d['nilai']; ?></td>
                <td><?php echo $d['namaortu']; ?></td>

                <td>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="btn btn-outline-info" href="datainputdftr.php" role="button">INPUT</a>
    <a class="btn btn-outline-danger" href="template/indexdb.html" role="button">KEMBALI</a>
</body>

</html>