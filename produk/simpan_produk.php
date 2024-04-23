<?php
if(isset($_POST['simpan'])){
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$harga=$_POST['harga'];
$stok=$_POST['stok'];
include "config.php";
$sqls="insert into produk (ProdukID,kode_produk, NamaProduk,
Harga, Stok) values (null ,'$kode', '$nama', '$harga','$stok')";
$simpan=mysqli_query($koneksi,$sqls);
if($simpan){
echo "<script>alert('Data Berhasil
Disimpan')</script>";
}else{
echo "<script>alert('Data Gagal Disimpan')</script>";
}
}
?>
<meta http-equiv="refresh" content="1;url=tampil_produk.php">