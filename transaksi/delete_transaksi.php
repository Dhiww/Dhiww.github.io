<?php
$id=$_GET['id'];
include "config.php";
$sqld="delete from detailpenjualan where PenjualanID='$id'";
$del="delete from penjualan where PenjualanID='$id'";
$hapus=mysqli_query($koneksi,$sqld);
$delete=mysqli_query($koneksi,$del);

if($hapus){
echo "<script>alert('Data Berhasil Di
Hapus')</script>";
}else{
echo "<script>alert('Data Gagal Di Hapus')
</script>";
}
?>
<meta http-equiv="refresh" content="1;url=tampil_transaksi.php?id=admin">