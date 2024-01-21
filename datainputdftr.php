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
  <h1>PEDAFTARAN CALON MAHASISWA</h1> 
</div>
    
<div class="container">
    <div class="form-group">
    <form method= "POST" action="dataaksidftr.php">
      <label for="id">Nama:</label>
      <input type="id" class="form-control" id="nama" placeholder="" name="nama">
    </div>
    <div class="form-group">
      <label for="id">Jenis Kelamin:</label>
      <input type="id" class="form-control" id="jk" placeholder="" name="jk">
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
<label for="id ">Email</label>
<input type="id " class="form-control" id="email" placeholder="" name="email">
</div>
<div class="form-group">
<label for="id ">Kewarganegaraan:</label>
<input type="id " class="form-control" id="kewarganegaraan" placeholder="" name="kewarganegaraan">
</div>
<div class="form-group">
<label for="id ">Agama:</label>
<input type="id " class="form-control" id="agama" placeholder="" name="agama">
</div>
<div class="form-group">
                        <label for="programdiminati">-Pilih Jurusan-</label>
                        <select class="form-control" type="text" name="proramdiminati" id="programdiminati">
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Teknik Otomotif">Teknik Otomotif</option>
                            <option value="Teknik Industri">Teknik Industri</option>
                            <option value="Teknik Elektro">Teknik Elektro</option>
                        </select>
                    </div>
<div class="form-group">
<label for="id ">Asal Sekolah:</label>
<input type="id " class="form-control" id="asalsekolah" placeholder="" name="asalsekolah">
</div>
<div class="form-group">
<label for="id ">Tahun Lulus:</label>
<input type="id " class="form-control" id="tahunlulus" placeholder="" name="tahunlulus">
</div>
<div class="form-group">
<label for="id ">No Ijazah:</label>
<input type="id " class="form-control" id="noijazah" placeholder="" name="noijazah">
</div>
<div class="form-group">
<label for="id ">Jurusan:</label>
<input type="id " class="form-control" id="jurusan" placeholder="" name="jurusan">
</div>
<div class="form-group">
<label for="id ">Nilai:</label>
<input type="id " class="form-control" id="nilai" placeholder="" name="nilai">
</div>
<div class="form-group">
<label for="id ">Nama Ortu:</label>
<input type="id " class="form-control" id="namaortu" placeholder="" name="namaortu">
</div>
    <button type="submit" class="btn btn-primary">SIMPAN DATA</button></a>
</div>
</form>
</body>
</html>
