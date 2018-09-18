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
   <section id="detailProduk">
  
  <div class="container-fluid" style="margin:3% 0">
    <div class="row" >
      <div class="col-lg-4 col-md-5 col-sm-11" style=" margin: 2%; ">
   <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner slideshowProduk">
    <div class="carousel-item active tab-pane" id="pic-1">
      <img class="d-block w-100" src="assets/image/produk/produk1.jpg" alt="First slide" id="pic-1">
    </div>
    <div class="carousel-item tab-pane" id="pic-2">
      <img class="d-block w-100" src="assets/image/produk/produk2.jpg" alt="Second slide" id="pic-2">
    </div>
    <div class="carousel-item tab-pane" id="pic-3">
      <img class="d-block w-100" src="assets/image/produk/produk3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <ul class="preview-thumbnail nav nav-tabs">
              <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="assets/image/produk/produk1.jpg" /></a></li>
              <li><a data-target="#pic-2" data-toggle="tab"><img src="assets/image/produk/produk2.jpg" /></a></li>
              <li><a data-target="#pic-3" data-toggle="tab"><img src="assets/image/produk/produk3.jpg" /></a></li>
            </ul>
<<<<<<< HEAD
        </div>
        <div class=" col-lg-3 col-md-5 col-sm-10 descProdukDetail">
		<?php 
		foreach($detail as $row){
		?>
          <h2><?php echo $row->namaProyek;?></h2>
            <h5>Mulai dari:<span > Rp 15.000</span></h5>
            <h5>Lokasi Proyek: <span > <?php echo $row->lokasi;?></span></h5>
              <h5>Ekspektasi Profit: <span > <?php echo $row->ekspUntung;?>%</span></h5>
               <h5>Waktu pengerjaan proyek: <br> <span> 1 Oktober 2018 - 1 November 2018</span></h5>
                <h6>Deskripsi:</h6>
                  <p>Proyek ini merupakan proyek pengadaan rumput laut dari para petani rumput laut yang ada di <?php echo $row->lokasi;?>
         </p>
            
            <div class="progress" style="margin-bottom: 8%;">
              <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>

            </div>
            <p class="card-text ">Dana Terkumpul :<span >Rp <?php echo $row->danaTerkumpul;?></span></p>
                    <p class="card-text ">Sisa Waktu :<span ><?php echo $row->sisaWaktu;?> hari</span></p>
                    <div class="text-center">
                      <a href="<?php echo base_url();?>index.php/invest/bayar/<?php echo $row->idProyek;?>" class="btn btn-success buttonProdukInvest">Danai Proyek</a>
                    </div>
                    
          
     </div>
         <div class="col-lg-3 col-md-8 col-sm-10 descSeller" >
        <h2 style="color: green;">Penanggung jawab:</h2><br>
        <img src="assets/image/user.png"><br><br>
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