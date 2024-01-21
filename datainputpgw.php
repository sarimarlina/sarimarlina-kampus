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
  <h1>Data Pegawai</h1> 
</div>
    
<div class="container">
    <div class="form-group">
    <form method= "POST" action="dataaksipgw.php">
      <label for="id">Nama Pegawai:</label>
      <input type="id" class="form-control" id="nama_pgw" placeholder="" name="nama_pgw">
    </div>
    <div class="form-group">
      <label for="id">NIP:</label>
      <input type="id" class="form-control" id="anip" placeholder="" name="nip">
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
  <label for="id">Email:</label>
  <input type="id" class="form-control" id="email" placeholder="" name="email">
</div>
<div class="form-group">
<label for="id ">Jenis Kelamin:</label>
<input type="id " class="form-control" id="jeniskelamin" placeholder="" name="jeniskelamin">
</div>
    <button type="submit" class="btn btn-primary">SIMPAN DATA</button></a>
</div>
</form>
</body>
</html>
