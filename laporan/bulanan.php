<html>
<head>
<meta name="vieport" content="width=device-width,
initial-scale=1.0">
<title>Daftar Petugas</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body >
<?php  
$bln=$_POST['bln'];
if($bln<10){
	$blns="0".$bln;
}
else{
	$blns=$bln;
}
$thn=$_POST['thn'];
$bulan=$thn."-".$blns;
?>


	<h2 align="center">WAROENG BERSAMA</h2>
	<H2 align="center">LAPORAN PENJUALAN BULANAN</H2>
	<H2 align="center">PERIODE <?= $bulan ?></H2>
	<hr>
<?php
include "config.php";
?>
<table class="table table-bordered  border-dark">
  <thead class="table-dark">
<tr>
<th width="30px">No</th>
<th>Id</th>
<th>Tanggal Penjualan</th>
<th>Total Harga</th>
<th>Nama Pelanggan</th>
</tr>
</thead>
<tbody>
<?php
date_default_timezone_set('Asia/Jakarta');
$nama=$_GET['id'];
$sql="select * from penjualan where TanggalPenjualan like '$bulan%' order by PenjualanID";
$result=mysqli_query($koneksi,$sql);
$no=1;
$tot=0;
while($data=mysqli_fetch_array($result))
{
    $langgan = $data['PelangganID'];
$pel = mysqli_query($koneksi, "select * from pelanggan where PelangganID='$langgan'");
$pelanggan=mysqli_fetch_array($pel);
?>
<td><?= $no ?>.</td>
<td><?= $data['PenjualanID'] ?></td>
<td><?= $data['TanggalPenjualan'] ?></td>
<td><?= number_format($data['TotalHarga'],0 , ',', '.') ?></td>
<td><?= $pelanggan['NamaPelanggan'] ?></td>

</tr>

<?php
$no++;
$tot=$tot+$data['TotalHarga'];
$id=$data['TanggalPenjualan'];
}
?>
<tr>
	<td colspan="2">Total :</td>
	<td colspan="3" align="right"><?= number_format($tot,0 , ',', '.') ?></td>
</tr>
</tbody>
<tfoot>
</tfoot>
</table>
<p align="right">
	Majalengka,<?php echo date('Y-m-d') ?><br>Petugas <br><br><br>
	<?= $nama ?>
</p>
</body>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


</html>