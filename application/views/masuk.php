<!DOCTYPE html>
<html>
  <head>

    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Login</title>
    
  </head>
  <body style="background:url(<?php echo base_url('asset/assets/image/petani/petani1.jpg');?>) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="login Page" >
      
      <div class = "container">
        <div class="col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
          <div class ="card" id="cardLogin">
            <div class="card-body">
              <h2 style="text-align: center;">Masuk Ke inseed.id</h2>
              <?php if(isset($error)) { echo $error; }; ?>
              <form action="<?php echo base_url()."index.php/auth/cek_login"; ?>" method="POST" class="col-md-10 col-sm-10 col-xs-10" style="float: left;">
                <div class="form-group">
                  <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus>
                  <?php echo form_error('username'); ?>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda">
                  <?php echo form_error('password'); ?>
                </div>
                <button type="submit" class="btn btn-outline-primary">Masuk</button>
              </form>
            </div>
            <div style="text-align: center;">
              <a href="#"><h6>Lupa Password?</h6></a>
              <h6 id="daftarNow" style=""><a href="<?=base_url()?>index.php/auth/daftar">Buat akun</a></h6>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  
  <section id="contact-us">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 logo_footer">
          <a href="<?=base_url()?>index.php/welcome/index"><img src="<?php echo base_url('asset/assets/image/logo.png');?>" style="width: 280px; height: auto;"></a>
          <h6 >Invest Seaweed in Indonesia</h6>
        </div>
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 contact" style="text-align: center; ">
          <h4>CONTACT US</h4>
          <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
              <h6><b>Address: </b></h6>
            </div>
            <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
              <h6> Universitas Brawijaya, Kota Malang, Jawa Timur 61553</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
              <h6><b>Phone: </b></h6>
            </div>
            <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
              <h6>08561729xx (Apri)</h6>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
              <h6><b>Email: </b></h6>
            </div>
            <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
              <h6>inseed@ub.ac.id</h6>
            </div>
          </div>
          
        </div>
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 socialmedia" style="text-align: center;">
          <h4>OUR SOCIAL MEDIA</h4>
          <span class="fab fa-facebook-square fa-3x socmed-icon"></span><span class="fab fa-twitter-square fa-3x socmed-icon"></span><span class="fab fa-instagram fa-3x socmed-icon"></span>
        </div>
      </div>
    </div>
  </section>