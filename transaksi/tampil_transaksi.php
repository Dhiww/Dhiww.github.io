<html>
<head>
<meta name="vieport" content="width=device-width,
initial-scale=1.0">
<title>Daftar Petugas</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg bg-dark text-light">
<h2>Daftar Transaksi</h2>
<?php
include "config.php";
?>
<a href="form_transaksi.php" class="btn btn-warning ms-2 mb-3">[+] Transaksi</a>
<table class="table table-dark table-striped">
  <thead class="">
<tr>
<th width="30px">No</th>
<th>Id</th>
<th>Tanggal Penjualan</th>
<th>Total Harga</th>
<th>Pelanggan Id</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
$sql="select * from penjualan order by PenjualanId desc";
$result=mysqli_query($koneksi,$sql);
$no=1;
$level = $_GET['id'];
while($data=mysqli_fetch_array($result))
{
?>
<td><?= $no ?>.</td>
<td><?= $data['PenjualanID'] ?></td>
<td><?= $data['TanggalPenjualan'] ?></td>
<td><?= number_format($data['TotalHarga'],0 , ',', '.') ?></td>
<td><?= $data['PelangganID'] ?></td>
<td align="center" width="80px">
  <a href="nota.php?id=<?=$data['PenjualanID'] ?>" class="btn btn-success mb-1">Nota</a>
  <?php
  if($level == 'admin'){
    ?>
  <a onclick="return confirm('Apakah Anda Yakin Data Transaksi <?= $data['PenjualanID'] ?> akan dihapus?')" href="delete_transaksi.php?id=<?=$data['PenjualanID'] ?>" class="btn btn-danger">Hapus</a>
  <?php
  }
  ?>
</td>
</tr>
<?php
$no++;
}
?>
</tbody>
<tfoot>
<tr>
<td colspan="8">
<!-- Untuk nomor Halaman -->
</td>
</tr>
</tfoot>
</table>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>