<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/css/jcarousel.responsive.js');?>"></script>
    <title>inseed.id - Login</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/styleCSS.css');?>" rel="stylesheet">
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
              <h6 id="daftarNow" style=""><a href="<?=base_url()?>index.php/welcome/daftar">Buat akun</a></h6>
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