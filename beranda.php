<?php
	session_start();
?>
<!doctype html>
<html lang="en">
  <head>
  	<title>WAROENG BERSAMA</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bg bg-secondary">
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="p-4 pt-5">
		  		<a href="home.php" target="frame" class="img logo rounded-circle mb-5" style="background-image: url(img/logo2.png);"></a>
	        <ul class="list-unstyled components mb-5">
	          <li class="active">
	            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
	            <ul class="collapse list-unstyled" id="homeSubmenu"> 
                <?php
		$level= $_SESSION['level']=='petugas';
		if($level){
		?>
		<li>
        <a href="produk/tampil_produk.php" target="frame">Data Produk</a>
    </li>
		<li>
        <a href="pelanggan/tampil_pelanggan.php" target="frame"> Data Pelanggan</a>
    </li>
		<li>
        <a href="transaksi/tampil_transaksi.php?id=<?= $_SESSION['level'] ?>" target="frame">Transaksi</a>
    </li>
		<?php } else{ ?>
		<li>
            <a href="petugas/tampil_petugas.php" target="frame">Daftar Petugas</a>
        </li>
		<li>
        <a href="pelanggan/tampil_pelanggan.php" target="frame">Data Pelanggan</a>
    </li>
		<li>
        <a href="produk/tampil_produk.php" target="frame">Data Produk</a>
    </li>
		<li>
        <a href="transaksi/tampil_transaksi.php?id=<?= $_SESSION['level'] ?>" target="frame">Transaksi</a>
    </li>
		<li>
        <a href="laporan/index.php?id=<?php echo $_SESSION['nama_petugas'] ?>" target="frame">Laporan</a>
    </li>


		<?php } ?>
        </ul>
        </li>
	          <li>
	              <a href="profil.php" target="frame">Tentang Kami</a>
	          </li>
	          <li>
              <a href="https://wa.me/0895617497196">Kontak</a>
	          </li>
	        </ul>

	        <div class="footer">
	        	<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						  Copyright &copy;<script>document.write(new Date().getFullYear());</script><i class="icon-heart" aria-hidden="true"></i> by Kelompok 6
						  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	        </div>

	      </div>
    	</nav>

        <!-- Page Content  -->
      <div id="content" class="">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">

            <button type="button" id="sidebarCollapse" class="btn btn-primary">
              <i class="fa fa-bars"></i>
              <span class="sr-only">Toggle Menu</span>
            </button>
            <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        <iframe src="home.php" name="frame" frameborder="0" width="100%" height="80%"></iframe>
      </div>
		</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>