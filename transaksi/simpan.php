<?php
include "config.php";
if(isset($_POST['save'])){
    $id=$_POST['id'];
$pelid=$_POST['id_pelanggan'];
$kd=$_POST['kd'];
$produk =mysqli_query($koneksi, "SELECT * FROM produk where kode_produk = '$kd'");
$show = mysqli_fetch_array($produk);
$jm=$_POST['jm'];
$st=$show['Stok'] - $jm;
$sub=$_POST['jm'] * $show['Harga'];
$del=mysqli_query($koneksi,"update produk set Stok='$st' where kode_produk = '$kd'");
$insert=mysqli_query($koneksi,"insert into detailpenjualan (DetailID, PenjualanID, kode_produk, JumlahProduk, subtotal) values('null', '$id', '$kd', '$jm', '$sub')");
}
?>
<meta http-equiv="refresh" content="1;url=detail.php">