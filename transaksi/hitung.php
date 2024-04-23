<?php 
session_start();
$id=$_SESSION['id'];
$tot=$_POST['tot'];
$bayar=$_POST['bayar'];
$_SESSION['tot']=$tot;
$_SESSION['byr']=$bayar;
$kembali=$bayar-$tot;
$_SESSION['kembali']=$kembali;
include "config.php";
$sqls="update penjualan set TotalHarga='$tot', Bayar='$bayar', Kembali='$kembali'  where PenjualanID='$id'";
$simpan=mysqli_query($koneksi,$sqls);
?>
<meta http-equiv="refresh" content="1;url=detail.php?save=1">