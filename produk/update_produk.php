<?php
if(isset($_POST['ubah'])){
$id=$_POST['id'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
include "config.php";
$sqle="update produk set ProdukID='$id',kode_produk='$kode',
NamaProduk='$nama', Harga='$harga', Stok='$stok'  where
ProdukID='$id'";
$simpan=mysqli_query($koneksi,$sqle);
if($simpan){
echo "<script>alert('Data Berhasil Di
Edit')</script>";
}else{
echo "<script>alert('Data Gagal Di Edit')</script>";
}
}
?>
<meta http-equiv="refresh" content="1;url=tampil_produk.php">