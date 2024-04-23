<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Penjualan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<?php
include "config.php";
date_default_timezone_set('Asia/Jakarta');
		if (isset($_POST['simpan'])) {
			$hp =$_POST['hp'];
			$tgl =$_POST['tgl'];
			$data_user =mysqli_query($koneksi, "SELECT * FROM pelanggan where NomorTelepon = '$hp'");
			$r = mysqli_fetch_array($data_user);
            
			$telp =$r['NomorTelepon'];
			$id= $r['PelangganID'];
            $nama = $r['NamaPelanggan'];
            $insert=mysqli_query($koneksi, "insert into penjualan (PenjualanID, TanggalPenjualan,
            PelangganID) values (null, '$tgl', '$id')");
			if($hp==$telp){
				$_SESSION['PelangganID'] = $id;
                $_SESSION['NamaPelanggan'] = $nama;
                $_SESSION['NomorTelepon'] = $telp;
            }else{
                echo 'gagal';
            }
        }
        ?>
<hr>
<?php
		$sql="select * from penjualan ORDER BY PenjualanID DESC";
$result=mysqli_query($koneksi,$sql);
$data=mysqli_fetch_assoc($result);
$_SESSION['id']=$data['PenjualanID'];

		?>

        <form action="simpan.php" method="POST">
            <table class="m-2">
                <tr>
            <input type="hidden" name="id" value="<?= $data['PenjualanID'] ?>">
            <td><label for="tg">Tanggal </td><td>: <?php echo date('d-m-Y'); ?></td></label>
        <tr>
            <td><label for="ip">Id Pelanggan</label></td>
        <td><input type="text" name="id_pelanggan" value="<?php echo $_SESSION['PelangganID'] ?>" id="ip"></td>
        </tr>
        <tr>
        <td><label for="np">Nama Pelanggan</label></td>
        <td><input type="text" name="nama" value="<?php echo $_SESSION['NamaPelanggan'] ?>" id="np"></td>
        </tr>  
        <tr><td><label for="hp">Nomor Telepon</label></td>
        <td><input type="text" name="telp" value="<?php echo $_SESSION['NomorTelepon'] ?>" id="hp"></td></tr>
        <tr>
        <td><label for="kd">Kode Produk</label></td>
        <td><select name="kd" id="kd">
        <?php
        $sel=mysqli_query($koneksi, "select * from produk order by NamaProduk asc");
        while($pr=mysqli_fetch_array($sel))
        {
        ?>
        <option value="<?= $pr['kode_produk'] ?>"><?= $pr['kode_produk'] ?> | <?= $pr['NamaProduk'] ?> | Rp.<?= $pr['Harga'] ?> </option>
            <?php
        }
        ?>
        </select>
        </td>
        </tr>
        <br>
        <tr>
        <td><label for="jm">Jumlah Produk</label></td>
        <td><input type="number" name="jm" value="1" id="jm"></td>
        </tr>
        
        <tr><td><input class="btn btn-success m-2" type="submit" name="save" value="save"></td>
        </tr>
        </table>
        </form>
        <hr>
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Aksi</th>
    </tr>
        <?php

$id = $_SESSION['id'];
$jual =mysqli_query($koneksi, "select detailpenjualan.kode_produk, produk.NamaProduk, produk.Harga, detailpenjualan.JumlahProduk, produk.harga * detailpenjualan.JumlahProduk as subtot from detailpenjualan, produk where produk.kode_produk=detailpenjualan.kode_produk and detailpenjualan.PenjualanID='$id'");
$no=1;
    $tot=0;
while($detail = mysqli_fetch_array($jual)){
    
?>



    <tr>
        <td><?= $no ?></td>
        <td><?= $detail['NamaProduk'] ?></td>
        <td><?= $detail['kode_produk'] ?></td>
        <td><?= $detail['JumlahProduk'] ?></td>
        <td><?= number_format($detail['subtot'], 0, ',', '.'); ?></td>
        <td align="center" width="80px">
<a href="keranjang-del.php?id=<?=$detail['kode_produk'] ?>" 
	onclick="return confirm('Apakah Anda Yakin data petugas <?= $detail['NamaProduk'] ?> akan dihapus?')" class="btn btn-danger">Del</a>
</td>
    </tr>
    
    <?php 
    $no++;
    $tot=$tot+$detail['subtot'];
}
?>
<tr>
    <td colspan="4">Total Harga</td>
    <td><?= number_format($tot, 0, ',', '.'); ?></td>
</tr>
<?php 
if(isset($_GET['save'])) {
	// code...

$total_harga=$_SESSION['tot'];
$bayar=$_SESSION['byr'];
$kembali=$_SESSION['kembali'];
?>
<tr>
    <td colspan="4">Bayar</td>
    <td><?= number_format($bayar, 0, ',', '.'); ?></td>
</tr>
<tr>
    <td colspan="4">Kembali</td>
    <td><?= number_format($kembali, 0, ',', '.'); ?></td>
</tr>
<br>
<a href="tampil_transaksi.php?id=petugas" class="m-2 btn btn-success">Selesai</a>
<a href="nota.php?id=<?= $id ?>" class="btn btn-warning">Cetak</a>
<?php } ?>
</table>

<form method="POST" action="hitung.php">
total harga : <input type="hidden" name="tot" value="<?= $tot ?>"><?= number_format($tot, 0, ',', '.'); ?><br>
bayar : <input type="number" name="bayar">
<input type="submit" name="save" value="OK">	
</form>
</body>
</html>