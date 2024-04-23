<?php
$id=$_GET['id'];
include "config.php";
$dtl =mysqli_query($koneksi, "SELECT * FROM detailpenjualan where kode_produk = '$id'");
$show = mysqli_fetch_array($dtl);
$produk =mysqli_query($koneksi, "SELECT * FROM produk where kode_produk = '$id'");
$show2 = mysqli_fetch_array($produk);
$st = $show2['Stok']+$show['JumlahProduk'];
$update =mysqli_query($koneksi, "update produk set Stok='$st' where kode_produk = '$id'");
$sqld="delete from detailpenjualan where kode_produk='$id'";
$hapus=mysqli_query($koneksi,$sqld);
if($hapus){
echo "<script>alert('Data Berhasil Di
Hapus')</script>";
}else{
echo "<script>alert('Data Gagal Di Hapus')
</script>";
}
?>
<meta http-equiv="refresh" content="1;url=detail.php">