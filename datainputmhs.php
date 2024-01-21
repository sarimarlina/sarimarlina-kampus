<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Data Mahasiswa</h1> 
</div>
    
<div class="container">
    <div class="form-group">
    <form method= "POST" action="dataaksimhs.php">
      <label for="id">Nama:</label>
      <input type="id" class="form-control" id="nama_mhs" placeholder="" name="nama_mhs">
    </div>
    <div class="form-group">
      <label for="id">NIM:</label>
      <input type="id" class="form-control" id="nim" placeholder="" name="nim">
    </div>
    <div class="form-group">
    <label for="id">Alamat:</label>
    <input type="id" class="form-control" id="alamat" placeholder="" name="alamat">
  </div>
  <div class="form-group">
  <label for="id">No Hp:</label>
  <input type="id" class="form-control" id="nohp" placeholder="" name="nohp">
</div>
<div class="form-group">
<label for="id ">Jurusan:</label>
<input type="id " class="form-control" id="jurusan" placeholder="" name="jurusan">
</div>
<div class="form-group">
<label for="id ">Keuangan Mahasiswa:</label>
<input type="id " class="form-control" id="keuangan_mhs" placeholder="" name="keuangan_mhs">
</div>
<div class="form-group">
<label for="id ">Tanggal Masuk:</label>
<input type="id " class="form-control" id="tgl_masuk" placeholder="" name="tgl_masuk">
</div>
<div class="form-group">
<label for="id ">Status:</label>
<input type="id " class="form-control" id="status" placeholder="" name="status">
</div>
    <button type="submit" class="btn btn-primary">SIMPAN DATA</button></a>
</div>
</form>
</body>
</html>
