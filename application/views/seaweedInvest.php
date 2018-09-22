<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
    <title>inseed.id - Seaweed Invest</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="<?php echo base_url('asset/css/styleCSS.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/css/jcarousel.responsive.js');?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/css/jquery.jcarousel.min.js');?>"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  </head>
  <body>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <?php include("template/apri.php"); ?>
    <section id="etalase">
      <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
        <h2>Seaweed <b>Invest</b></h2>
      </div>
      <div class="container-fluid">
        <div class="judulSeaweedMart">
          <h2>Temukan proyek yang ingin anda modali sekarang!</h2>
          <hr><br><br>
        </div>
        <div class="row">

          <?php
            $no = $this->uri->segment('3') + 1;
            foreach($proyek as $a){
          ?>

          <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
            <div class="card cardProduk" style=" height:900px;">
              <div class="card-body cardInvest">
                <img class="card-img-top fotoProduk" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $a->foto ); ?>">
                <div style="padding: 5%;">
                  <h5 class="card-title " style="font-weight: bold;"> <?php echo $a->namaProyek ?> </h5>
                  
                  <p class="card-text ">Expektasi Keuntungan :<br> <span style="font-weight: bold; font-size: 1.2rem;"> 
                    <?php getPersentase($a->lokasi, $a->ekspUntung);
                    ?> %
                  </span></p>
                  <p class="card-text ">Lama Proyek : <br> <span><?php echo $a->lamaProyek?> Hari</span></p>
                  <p class="card-text ">Penanggung Jawab :<br> <span><?php echo $a->penanggungJawab?></span></p>
                  <p class="card-text ">Lokasi : <br><span><?php echo $a->lokasi?></span></p>
                  <div class="bagianDanaInvest" style="">
                    <div class="progress" style="margin-bottom: 8%;">
                      <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $a->progress?> %;"><?php echo $a->progress?> %</div>
                    </div>
                    <p class="card-text ">Dana Terkumpul :<br> <span >Rp <?php echo $a->danaTerkumpul?></span></p>
                    <p class="card-text ">Dana yang Dibutuhkan : <br><span >Rp <?php echo $a->minimalDana?></span></p>
                    <p class="card-text ">Sisa Waktu : <br><span >
                      <?php
                      date_default_timezone_set('Asia/Jakarta');
                      $dateSkrng = time(); 
                      $dateEnd = strtotime($a->endProjek);
                      $datediff = $dateEnd - $dateSkrng;
                      echo round($datediff / (60 * 60 * 24)); ?> 
                     Hari</span></p>
                    <a href="<?=base_url()?>index.php/invest/detail/<?php echo $a->idProyek?>" class="btn btn-info buttonProdukInvest">Lihat Proyek</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php } ?>
        
        </div>
        <nav>
          <div class="col-xl-12 col-md-5 col-sm-5 col-xs-12 paginationProduk text-center">
            <ul class="pagination content-center">
              <?php
              echo $this->pagination->create_links();?>
            </ul>
          </nav>
        </div>
      </div>
    </section>
    <?php include_once("template/footer.php"); ?>
  </body>
</html>