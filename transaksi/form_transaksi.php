<!DOCTYPE html>
<html>
<head>
<title>Input Data Pelanggan</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"></head>
<body>
<form method="POST" action="detail.php">
<?php 
date_default_timezone_set('Asia/Jakarta');
?>
<h2 align="center" class="m-4">Input Data Produk</h2>
<div class="mb-3 ms-5 me-5">
    <label for="kode" class="form-label">No Hp</label>
    <input list="list" type="text" name="hp" class="form-control" required>
<datalist id="list">
<?php
include  "config.php";
$list = mysqli_query($koneksi, "select * from pelanggan");
while($s = mysqli_fetch_array($list)){
?>
<option value="<?= $s['NomorTelepon']?>"><?= $s['NomorTelepon'] ?> | <?= $s['NamaPelanggan'] ?> | <?= $s['Alamat'] ?></option>
<?php
}
?>
</datalist>
  </div>
  <div class="mb-3 ms-5 me-5">
    <label for="tgl" class="form-label">Tanggal</label>
    <input type="text" class="form-control" id="tgl" name="tgl" value="<?php echo date('Y-m-d') ?>">
  </div>
  <div class="mb-3 ms-5 me-5">
    <input type="submit" name="simpan" value="Simpan" class="btn btn-warning">
    <a href="tampil_transaksi.php?id=petugas" class="btn btn-danger">Batal</a>  
  </div>

</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>