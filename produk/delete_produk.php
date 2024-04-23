<?php
$id=$_GET['id'];
include "config.php";
$sqld="delete from produk where ProdukID='$id'";
$hapus=mysqli_query($koneksi,$sqld);
if($hapus){
echo "<script>alert('Data Berhasil Di
Hapus')</script>";
}else{
echo "<script>alert('Data Gagal Di Hapus')
</script>";
}
?>
<meta http-equiv="refresh" content="1;url=tampil_produk.php">