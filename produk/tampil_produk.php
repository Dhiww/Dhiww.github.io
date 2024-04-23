<html>
<head>
<meta name="vieport" content="width=device-width,
initial-scale=1.0">
<title>Daftar Produk</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg bg-dark text-light">
<h2>Daftar Produk</h2>
<a href="form_produk.php" class="btn btn-warning ms-2 mb-3">[+] Data Produk</a>
<table class="table table-dark table-striped">
  <thead class="">
<tr>
<th>No</th>
<th>Kode Produk</th>
<th>Nama Produk</th>
<th>Harga</th>
<th>Stok</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "config.php";
$sql="select * from produk order by ProdukID desc";
$result=mysqli_query($koneksi,$sql);
$no=1;
while($data=mysqli_fetch_array($result))
{
?>
<td><?= $no ?>.</td>
<td><?= $data['kode_produk'] ?></td>
<td><?= $data['NamaProduk'] ?></td>
<td><?= number_format($data['Harga'],0 ,',' ,'.') ?></td>
<td><?= $data['Stok'] ?></td>
<td align="center" width="100px">
<a href="edit_produk.php?id=<?= $data['ProdukID']
?>" class="btn btn-success mb-1" >Ubah</a>
<a href="delete_produk.php?id=<?=$data['ProdukID'] ?>" 
	onclick="return confirm('Apakah Anda Yakin data produk <?= $data['ProdukID'] ?> akan dihapus?')" class="btn btn-danger">Hapus</a>
</td>
</tr>
<?php
$no++;
}
?>
</tbody>
<tfoot>
<tr>
<td colspan="7">
<!-- Untuk nomor Halaman -->
</td>
</tr>
</tfoot>
</table>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>