<?php
if(isset($_POST['simpan'])){
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$lvl=$_POST['level'];
include "config.php";
$sqls="insert into petugas (id_petugas, nama_petugas,
username, password,telp,level) values (null, '$nama', '$username','$password','$telp', '$lvl')";
$simpan=mysqli_query($koneksi,$sqls);
if($simpan){
echo "<script>alert('Data Berhasil
Disimpan')</script>";
}else{
echo "<script>alert('Data Gagal Disimpan')</script>";
}
}
?>
<meta http-equiv="refresh" content="1;url=tampil_petugas.php">