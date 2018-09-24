<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Artikel </title>
    
  </head>
  <body id="page-top">
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    
    <section id="fiturKami" style="padding: 4% 0; height: 100%; ">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 text-center" id="featur">
            <h1 class="text-uppercase text-center" >
            <h2><?php echo $result->judulArtikel; ?></h2>
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
          <p class="col-lg-12 col-md-12 col-sm-12" style="text-align: justify;"><?php echo $result->isiArtikel ?></p>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-8 text-center" style="margin: 0 15% 0;">
          <hr class="my-4">
          <?php foreach ($result2 as $var):?>
          <div class="card">
            <div class="card-body row">
              <div class="col-md-3">
                <img src="<?php echo $var->foto; ?>" style="max-width: 80px; height: auto;">
              </div>
              <div class="col-md-9" style="text-align: justify;">
                <p><?php echo $var->isiKomentar ?></p>
              <footer class="blockquote-footer"><?php echo $var->namaAkun ?> , <?php echo date("d-m-20y",strtotime($var->tglKomentar)); ?></footer>
            </div>
          </div>
        </div>
        <br>
        <?php endforeach; ?>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 text-center" style="margin: 0 15% 0;">
          <hr class="my-4">
          <form action="<?=base_url()?>index.php/article/tambahKomentar/<?php echo $var->idArtikel; ?>" method="POST" id="formArtikel">
            <input type="hidden" name="namaAkun" value="<?php echo $this->session->userdata('username'); ?>">
            <input type="hidden" name="tglKomentar" value="
              <?php 
                  date_default_timezone_set('Asia/Jakarta');
                  $date = date("Y-m-d");  
                  echo $date; ?>">
            <h6>Berikan Komentar anda:</h6>
            <textarea name="isiKomentar" form="formArtikel" class="form-control"></textarea>
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