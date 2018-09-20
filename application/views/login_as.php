<!DOCTYPE html>
<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Daftar</title>
  
  </head>
  <body>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
 <section id="signup_as" >
    
  <div class="container-fluid">
    
      <div class="col-md-12" style="margin: 10% auto; text-align: center;">
        <h1>Hai, selamat datang di inseed.id !</h1>
        <h3 style="margin-bottom: 12%;">Silahkan Mendaftarkan diri anda secara gratis</h3>
        <div class="row">
          <div class="col-md-6 col-sm-12" style="margin-bottom: 5%; ">
            <a href="<?php echo base_url()."index.php/auth/asUser"; ?>">
          <img src="<?php echo base_url('asset/assets/image/pengguna.png');?>" style="width:100px;margin-right:25px"></img>
     <a href="<?php echo base_url()."index.php/auth/asUser"; ?>">Daftar sebagai pengguna</a>
        </div>
</a>

<a href="<?php echo base_url()."index.php/auth/asSeller"; ?>">
      <div class="col-md-6 col-sm-12">
            <img src="<?php echo base_url('asset/assets/image/seller.svg');?>" style="width:100px; margin-right: 25px;"></img>
          <a href="<?php echo base_url()."index.php/auth/asSeller"; ?>">Daftar sebagai penjual</a>
      </div>
      </a>
        </div>
        
        </div>
        </div>
        
      </div>
 
  </div>

  </section>
      <?php include_once("template/footer.php"); ?> 