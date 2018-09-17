<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Selamat Datang</title>
    
  </head>
  <body id="page-top">
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    
   <section id="fiturKami" style="padding: 4% 0; height: 100%; ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center" id="featur">
            <h1 class="text-uppercase text-center" >
            <h2>Kisah Petani Bone memulai Budidaya Rumput Laut</h2>
            </h1>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <img class="col-lg-12 col-md-12 col-sm-12 d-block w-100" src="<?php echo base_url('asset/assets/image/petani/petani1.jpg'); ?>">
        </div>
        <br>
        <div class="row">
          <p class="col-lg-12 col-md-12 col-sm-12" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-8 text-center" style="margin: 0 15% 0;">
            <hr class="my-4">
            <div class="card">
              <div class="card-body row">
               <div class="col-md-3">
                 <img src="<?php echo base_url('asset/assets/image/petani/petani1.jpg'); ?>" style="max-width: 80px; height: auto;">
               </div>
               <div class="col-md-9" style="text-align: justify;">
                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                   tempor incididunt ut labore et dolore magna aliqua. .</p>
                   <footer class="blockquote-footer">Julian</footer>
               </div>
              
             </div>
             
               
            </div>
          </div>
        <div class="row">
          <div class="col-lg-8 col-md-8 col-sm-8 text-center" style="margin: 0 15% 0;">
            <hr class="my-4">
            <form action="#" method="POST" id="formArtikel">
              
              <h6>Berikan Komentar anda:</h6>
              <textarea name="isiArtikel" form="formArtikel" class="form-control"></textarea>
              <br>
              
              <div class="upload-btn-wrapper">
                <button type="submit" class="btn btn-outline-primary">Simpan</button>
              </div>
              <br>
              <br>
              
            </form>
          </div>
          

        </div>
      </div>
    </section>
    
    
    <?php include_once("template/footer.php"); ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('asset/js/creative.min.js');?>"></script>
  </body>
</html>