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
  <h1>ISI PENDAFTARAN</h1> 
</div>
    
<div class="container">
    <div class="form-group">
    <form method= "POST" action="dataaksidosen.php">
      <label for="nidn">NIDN:</label>
      <input type="nidn" class="form-control" id="nidn" placeholder="" name="nidn">
    </div>
    <div class="form-group">
      <label for="namadosen">Nama Dosen:</label>
      <input type="namadosen" class="form-control" id="namadosen" placeholder="" name="namadosen">
    </div>
    <div class="form-group">
    <label for="jeniskelamin">Jenis Kelamin:</label>
    <input type="jeniskelamin" class="form-control" id="jeniskelamin" placeholder="" name="jeniskelamin">
  </div>
  <div class="form-group">
  <label for="alamat">Alamat:</label>
  <input type="alamat" class="form-control" id="alamat" placeholder="" name="alamat">
</div>
<div class="form-group">
<label for="id ">No Hp:</label>
<input type="id " class="form-control" id="nohp" placeholder="" name="nohp">
</div>
<div class="form-group">
<label for="id ">Email:</label>
<input type="id " class="form-control" id="email" placeholder="" name="email">
</div>
<div class="form-group">
<label for="id ">Bidang Keahlian:</label>
<input type="id " class="form-control" id="bidangkeahlian" placeholder="" name="bidangkeahlian">
</div>
<div class="form-group">
<label for="id ">Jabatan Akademik:</label>
<input type="id " class="form-control" id="jabatanakademik" placeholder="" name="jabatanakademik">
</div>
<div class="form-group">
<label for="id ">Mata Kuliah:</label>
<input type="id " class="form-control" id="matakuliah" placeholder="" name="matakuliah">
</div>
    <button type="submit" class="btn btn-primary">SIMPAN DATA</button></a>
</div>
</form>
</body>
</html>
