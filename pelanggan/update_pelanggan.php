<?php
if(isset($_POST['ubah'])){
$id=$_POST['id'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telp=$_POST['telp'];
include "config.php";
$sqle="update pelanggan set
NamaPelanggan='$nama', alamat='$alamat' , NomorTelepon='$telp' where
PelangganID='$id'";
$simpan=mysqli_query($koneksi,$sqle);
if($simpan){
echo "<script>alert('Data Berhasil Di
Edit')</script>";
}else{
echo "<script>alert('Data Gagal Di Edit')</script>";
}
}
?>
<meta http-equiv="refresh" content="1;url=tampil_pelanggan.php">