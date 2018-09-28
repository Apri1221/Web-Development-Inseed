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
              <?php if(isset($error)) 
              { echo $error; }; ?>
              <form action="<?php echo base_url()."index.php/auth/cek_login/"; ?>" method="POST" class="col-md-10 col-sm-10 col-xs-10" style="float: left;">
                <?php if(isset($error)): ?>
                  <input type="hidden" name="error" value="error">
                <?php endif; ?>
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
              <a href="<?=base_url()?>index.php/Auth/lupaPassword""><h6>Lupa Password?</h6></a>
              <h6 id="daftarNow" style=""><a href="<?=base_url()?>index.php/auth/daftar">Buat akun</a></h6>
            </div>
          </div>
        </div>
      </section>
    </body>
  </html>
  
 