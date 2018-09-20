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
        <div class="col-md-12" style="margin: 5% auto; text-align: center;">
          <h1 style="font-size: 2.5rem">Hai, selamat datang di inseed.id !</h1>
          <h3 style="margin-bottom: 5%;">Silahkan Mendaftarkan diri anda secara gratis</h3>
          <div class="row">
            <div class="col-md-6 col-sm-10" style="margin-bottom: 10%; ">
              <a href="<?php echo base_url()."index.php/auth/asUser"; ?>">
                <img src="<?php echo base_url('asset/assets/image/pengguna.png');?>" style="width:100px;margin-right:25px;margin-bottom: 1%"></img>
                <h4>Daftar sebagai pengguna<h2>
              </a>
            </div>
            <div class="col-md-6 col-sm-10">
              <a href="<?php echo base_url()."index.php/auth/asSeller"; ?>">
                <img src="<?php echo base_url('asset/assets/image/seller.svg');?>" style="width:100px;margin-right:25px;margin-bottom: 1%"></img>
                <h4>Daftar sebagai penjual</h4>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include_once("template/footer.php"); ?>