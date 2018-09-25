<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Lupa Password</title>
    
  </head>
  <body id="page-top">
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>




<div class="container" style="padding: 5% 28%;">
	<div class="row" style="text-align: center;  margin-left: 10%;">
		<h3> Lupa Password Anda?</h3>
	</div>
	<br>
	 <div class="card">
  <div class="card-body" style="text-align: justify;">
    <h6 class="card-title">Masukkan email anda untuk kami proses penggantian password akun anda</h6>
    <h6 class="card-text">Lalu ikuti instruksi yang ada di email anda</h6>
    <input type="text" name="emailForget" class="form-control">
    <br><br>
    <a href="<?=base_url()?>index.php" class="btn btn-success" style="margin-left: 5%;">Kirim untuk reset password</a>
  </div>
</div>
</div>
   

