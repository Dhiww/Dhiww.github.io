<?php
if(isset($_POST['simpan'])){
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
include "config.php";
$sqls="insert into pelanggan (PelangganID, NamaPelanggan,
Alamat, NomorTelepon) values (null, '$nama', '$alamat','$telp')";
$simpan=mysqli_query($koneksi,$sqls);
if($simpan){
echo "<script>alert('Data Berhasil
Disimpan')</script>";
}else{
echo "<script>alert('Data Gagal Disimpan')</script>";
}
}
?>
<meta http-equiv="refresh" content="1;url=tampil_pelanggan.php">