<!DOCTYPE html>
<html>
<head>
<title>Input Data Pelanggan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
<form method="POST" action="simpan_petugas.php">
<h2 align="center" class="m-4">Input Data Petugas</h2>
<div class="mb-3 ms-5 me-5">
    <label for="nama" class="form-label">Nama Petugas</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="username" class="form-label">Username</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="telp" class="form-label">No Telepon</label>
    <input type="text" class="form-control" id="telp" name="telp">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="lvl"></label>
  <select name="level" id="lvl" class="form-select" aria-label="Default select example">
  <option value="petugas">Petugas</option>
  <option value="admin">Admin</option>
  </select>
  </div>

  <div class="mb-3 ms-5 me-5">
    <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
    <a href="tampil_petugas.php" class="btn btn-danger">Batal</a>  
  </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>