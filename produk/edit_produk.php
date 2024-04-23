<!DOCTYPE html>
<html>
<head>
<title>Input Data Pelanggan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
<?php
$id=$_GET['id'];
include "config.php";
$sql="select * from produk where ProdukID='$id'";
$result=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_array($result);
?>
<form method="POST" action="update_produk.php">
<h2 align="center" class="m-4">Ubah Data Produk</h2>
<input type="hidden" name="id" value="<?=
$data['ProdukID'] ?>">
<div class="mb-3 ms-5 me-5">
    <label for="kode" class="form-label">Kode Produk</label>
    <input type="text" class="form-control" id="kode" name="kode" value="<?=
$data['kode_produk'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="nama" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="nama" name="nama" value="<?=
$data['NamaProduk'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="harga" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga" value="<?=
$data['Harga'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="stok" class="form-label">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok" value="<?=
$data['Stok'] ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <input type="submit" name="ubah" value="Simpan" class="btn btn-warning">
    <a href="tampil_produk.php" class="btn btn-danger">Batal</a>  
  </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>