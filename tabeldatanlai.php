<html>

<head>
    <title>DATA NILAI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

    <?php
    include 'koneksi.php';
    ?>


    <h3 style="margin-left: 15px;">Tabel Data Nilai</h3>

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
            <th>nim</th>
            <th>nama</th>
            <th>komputer</th>
            <th>bahasaindonesia</th>
            <th>bahasainggris</th>
            <th>jumlah</th>
            <th>rata-rata</th>
            <th>Opsi</th>
        </tr>

        <?php
        if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $data = mysqli_query($koneksi, "SELECT * from nilai where nama
             LIKE'%" . $cari . "%' OR nim LIKE '%" . $cari . "%'");
        } else {
            $data = mysqli_query($koneksi, "SELECT * from nilai");
        }

        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr class="table-light">
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nim']; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['komputer']; ?></td>
                <td><?php echo $d['bahasaindonesia']; ?></td>
                <td><?php echo $d['bahasainggris']; ?></td>
                <td><?php echo $d['jumlah']; ?></td>
                <td><?php echo $d['rata']; ?></td>
                <td>
                    <a class="btn btn-danger" href="hapus.php?id=<?php echo $d['id']; ?>" role="button">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a class="btn btn-outline-info" href="datainputnlai.php" role="button">INPUT</a>
    <a class="btn btn-outline-danger" href="template/indexdb.php" role="button">KEMBALI</a>
</body>

</html>