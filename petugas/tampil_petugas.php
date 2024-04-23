<html>
<head>
<meta name="vieport" content="width=device-width,
initial-scale=1.0">
<title>Daftar Petugas</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body class="bg bg-dark text-light">
<h2>Daftar Petugas</h2>
<a href="form_petugas.php" class="btn btn-warning ms-2 mb-3">[+] Data Petugas</a>
<table class="table table-dark table-striped">
  <thead class="">
<tr>
<th width="30px">No</th>
<th>Id</th>
<th>Nama Petugas</th>
<th>Username</th>
<th>Password</th>
<th>No Telp</th>
<th>Level</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
<?php
include "config.php";
$sql="select * from petugas order by id_petugas desc";
$result=mysqli_query($koneksi,$sql);
$no=1;
while($data=mysqli_fetch_array($result))
{
?>
<td><?= $no ?>.</td>
<td><?= $data['id_petugas'] ?></td>
<td><?= $data['nama_petugas'] ?></td>
<td><?= $data['username'] ?></td>
<td><?= $data['password'] ?></td>
<td><?= $data['telp'] ?></td>
<td><?= $data['level'] ?></td>
<td align="center" width="80px">
<a href="edit_petugas.php?id=<?= $data['id_petugas']
?>" class="btn btn-success mb-1">Ubah</a>
<a href="delete_petugas.php?id=<?=$data['id_petugas'] ?>" 
	onclick="return confirm('Apakah Anda Yakin data petugas <?= $data['id_petugas'] ?> akan dihapus?')" class="btn btn-danger">Hapus</a>
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