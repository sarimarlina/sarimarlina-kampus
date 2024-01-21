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
  <h1>Data Kelas</h1> 
</div>
    
<div class="container">
    <div class="form-group">
    <form method= "POST" action="dataaksikls.php">
      <label for="id">NIM:</label>
      <input type="id" class="form-control" id="nim" placeholder="" name="nim">
    </div>
    <div class="form-group">
      <label for="id">Nama:</label>
      <input type="id" class="form-control" id="nama" placeholder="" name="nama">
    </div>
    <div class="form-group">
    <label for="id">Semester:</label>
    <input type="id" class="form-control" id="semester" placeholder="" name="semester">
  </div>
  <div class="form-group">
  <label for="id">Jurusan:</label>
  <input type="id" class="form-control" id="jurusan" placeholder="" name="jurusan">
</div>
<div class="form-group">
<label for="id ">Kelas:</label>
<input type="id " class="form-control" id="kelas" placeholder="" name="kelas">
</div>
    <button type="submit" class="btn btn-primary">SIMPAN DATA</button></a>
</div>
</form>
</body>
</html>
