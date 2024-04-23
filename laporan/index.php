
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg bg-dark text-light">
    <hr>
<form method="POST" action="harian.php?id=<?php echo $_SESSION['nama'] ?>" target="lap" class="form-report">
	<?php
$id=$_GET['id'];
$_SESSION['nama']=$id;
	?>
	<h2>Laporan Harian</h2>
	<div class="col-md-3 m-2" style="float:left">
    <select class="form-select" id="validationCustom04" name="tgl">
      <option value="1">Pilih Tanggal</option>
	  <?php
		for($a=1;$a<=31;$a++){
		?>
      <option value="<?= $a ?>"><?= $a ?></option>
	  <?php	
		} 
		?>
    </select>
    <div class="invalid-feedback">
      Pilih Yang Sesuai!
    </div>
  </div>
	<div class="col-md-3 m-2" style="float:left">
    <select class="form-select" id="validationCustom04" name="bln">
      <option value="1">Pilih Bulan</option>
	  <?php
		for($b=1;$b<=12;$b++){
		?>
      <option value="<?= $b ?>"><?= $b ?></option>
	  <?php	
		} 
		?>
    </select>
    <div class="invalid-feedback">
      Pilih Yang Sesuai!
    </div>
  </div>
	<div class="col-md-3 m-2"style="float:left">
    <select class="form-select" id="validationCustom04" name="thn">
      <option value="1">Pilih Tahun</option>
	  <?php
		$thnskr=date("Y");
		$mulai=$thnskr-6;
		for($c=$mulai;$c<=$thnskr;$c++){
		?>
      <option value="<?= $c ?>"><?= $c ?></option>
	  <?php	
		} 
		?>
    </select>
    <div class="invalid-feedback">
      Pilih Yang Sesuai!
    </div>
  </div>
  <div class="col-12 m-2">
    <button class="btn btn-warning" type="submit" name="tglproses" value="OK">Simpan</button>
  </div>
</form>
<hr>
<form method="POST" action="bulanan.php?id=<?php echo $_SESSION['nama'] ?>" target="lap" class="form-report">
	<h2>Laporan Bulanan</h2>
	<div class="col-md-3 m-2" style="float:left">
    <select class="form-select" id="validationCustom04" name="bln">
      <option value="1">Pilih Bulan</option>
	  <?php
		for($b=1;$b<=12;$b++){
		?>
      <option value="<?= $b ?>"><?= $b ?></option>
	  <?php	
		} 
		?>
    </select>
    <div class="invalid-feedback">
      Pilih yang sesuai!
    </div>
  </div>
	<div class="col-md-3 m-2" style="float:left">
    <select class="form-select" id="validationCustom04" name="thn">
      <option value="1">Pilih Tahun</option>
	  <?php
		$thnskr=date("Y");
		$mulai=$thnskr-6;
		for($c=$mulai;$c<=$thnskr;$c++){
		?>
      <option value="<?= $c ?>"><?= $c ?></option>
	  <?php	
		} 
		?>
    </select>
    <div class="invalid-feedback">
      Pilih Yang Sesuai!
    </div>
  </div>
  <div class="col-12 m-2">
    <button class="btn btn-warning" type="submit" name="tglproses" value="OK">Simpan</button>
  </div>
</form><hr>
<button class="btn-print btn btn-info m-2" type="button" onclick="frames['lap'].print();">
      Print  
      </button>
<iframe name="lap" frameborder="0" width="100%" height="500px"></iframe>
</body>
</html>