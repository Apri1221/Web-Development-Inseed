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
    <?php include_once("template/apri.php"); ?>
    <section id="detailProduk">
      <?php
      foreach($detail as $row){
      ?>
      <div class="container-fluid" style="margin:3% 0">
        <div class="row" >
          <div class="col-lg-4 col-md-5 col-sm-11 slideshowProduk" style=" margin: 2%; ">
            <div class="text-center">
              <h2>Foto Proyek:</h2>
            </div>
            
            <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $row->foto ); ?>">
            
          </div>
          <div class=" col-lg-3 col-md-5 col-sm-10 descProdukDetail">
            
            <h2><?php echo $row->namaProyek;?></h2>
            <h5>Mulai dari:<span > Rp 15.000</span></h5>
            <h5>Lokasi Proyek: <span > <?php echo $row->lokasi;?></span></h5>
            <h5>Ekspektasi Profit: <span style="font-size: 1.2rem;">  
              <?php getPersentase($row->lokasi, $row->ekspUntung); ?> %
            </span></h5>
            <h5>Waktu pengerjaan proyek: <br>
            <span>
              <?php
              echo date("d-m-20y",strtotime($row->startProjek)). "  ~  " .date("d-m-20y",strtotime($row->endProjek));
              ?>
            </span>
            </h5>
            <h6>Deskripsi:</h6>
            <p>Proyek ini merupakan proyek pengadaan rumput laut dari para petani rumput laut yang ada di <?php echo $row->lokasi;?>
            </p>
            
            <div class="progress" style="margin-bottom: 8%;">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo ($row->danaTerkumpul / $row->minimalDana)*100 ?>%;"><?php echo round((($row->danaTerkumpul / $row->minimalDana)*100),2) ?> % </div>
            </div>
            <p class="card-text ">Dana Terkumpul : <span >Rp <?php echo $row->danaTerkumpul;?></span></p>
            <p class="card-text ">Sisa Waktu : <span >

              <?php
              date_default_timezone_set('Asia/Jakarta');
              $dateSkrng = time(); 
              $dateEnd = strtotime($row->endProjek);
              $datediff = $dateEnd - $dateSkrng;
              echo round($datediff / (60 * 60 * 24)); ?> 

            hari</span></p>
            <div class="text-center">
              <a href="<?php echo base_url();?>index.php/invest/bayar/<?php echo $row->idProyek;?>" class="btn btn-success buttonProdukInvest">Danai Proyek</a>
            </div>
            
          </div>
          <div class="col-lg-3 col-md-8 col-sm-10 descSeller" >
            <h2 style="color: green;">Penanggung jawab:</h2><br>
            <img src="<?php echo base_url('asset/assets/image/uc.png');?>"><br><br>
            <h4><?php echo $row->penanggungJawab;?></h4>
            <span class="fas fa-star"><span class="fas fa-star" ><span class="fas fa-star"><span class="fas fa-star"></span></span></span></span>
            <p>Lokasi: <?php echo $row->lokasi;?></p>
          </div>
        </div>
        <?php
            }
        ?>
      </div>
    </div>
  </section>
  <?php include_once("template/footer.php"); ?>
  
</body>
</html>