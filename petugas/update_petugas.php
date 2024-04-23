<?php
if(isset($_POST['ubah'])){
    $id=$_POST['id'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telp=$_POST['telp'];
$lvl=$_POST['level'];
include "config.php";
$sqle="update petugas set
nama_petugas='$nama', username='$username', password='$password' , telp='$telp', level='$lvl' where
id_petugas='$id'";
$simpan=mysqli_query($koneksi,$sqle);
if($simpan){
echo "<script>alert('Data Berhasil Di
Edit')</script>";
}else{
echo "<script>alert('Data Gagal Di Edit')</script>";
}
}
?>
<meta http-equiv="refresh" content="1;url=tampil_petugas.php">