<!DOCTYPE html>
<html>
<head>
<title>Input Data Pelanggan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
<form method="POST" action="simpan_produk.php">
<h2 align="center" class="m-4">Input Data Produk</h2>
<div class="mb-3 ms-5 me-5">
    <label for="kode" class="form-label">Kode Produk</label>
    <input type="text" class="form-control" id="kode" name="kode"> 
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="nama" class="form-label">Nama Produk</label>
    <input type="text" class="form-control" id="nama" name="nama">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="harga" class="form-label">Harga</label>
    <input type="text" class="form-control" id="harga" name="harga">
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="stok" class="form-label">Stok</label>
    <input type="text" class="form-control" id="stok" name="stok">
  </div>
  <div class="mb-3 ms-5 me-5">
    <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
    <a href="tampil_produk.php" class="btn btn-danger">Batal</a>  
  </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>