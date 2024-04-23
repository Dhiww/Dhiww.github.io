<!DOCTYPE html>
<html>
<head>
<title>Input Data Pelanggan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
    <?php
$id=$_GET['id'];
include "config.php";
$sql="select * from pelanggan where PelangganID='$id'";
$result=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($result);
?>
<form method="POST" action="update_pelanggan.php">
<h2 align="center" class="m-4">Ubah Data Pelanggan</h2>
<input type="hidden" name="id" value="<?=
$data['PelangganID'] ?>">
<div class="mb-3 ms-5 me-5">
    <label for="nama" class="form-label">Nama Pelanggan</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?=
    $data['NamaPelanggan'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="alamat" class="form-label">Alamat</label>
    <input type="text" class="form-control" id="alamat" name="alamat" value="<?=
    $data['Alamat'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="telp" class="form-label">No Telepon</label>
    <input type="text" class="form-control" id="telp" name="telp" value="<?=
    $data['NomorTelepon'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <input type="submit" name="ubah" value="Simpan" class="btn btn-warning">
    <a href="tampil_pelanggan.php" class="btn btn-danger">Batal</a>  
  </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>