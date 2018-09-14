<!DOCTYPE html>
<html lang="en">
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
    <title>inseed.id - Selamat Datang</title>
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
    <script type="text/javascript">
    $(window).load(function() {
    $("#loading").fadeOut("slow");
    });
    </script>
  </head>
  <body>
    <div id="loading"></div>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="headline">
      <div class="container-fluid">
        <h2 style="text-align: center; margin-top: 2%;">SEAWEED ARTICLES</h2>
        <div class="row barisArtikelAtas" >
          <div class="col-xl-7 col-md-10 col-sm-12 col-xs-12 boxHeadline" >
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators" style="position: relative; margin-top: 5%;">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" id="carouselArticle" >
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/image/petani/petani1.jpg" alt="First slide">
                  
                  <h5 class="caption">Kisah Petani Bone memulai Budidaya Rumput Laut</h5>
                  
                  
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/image/petani/petani2.jpg" alt="Second slide">
                  <h5 class="caption">Ditemukan rumput laut langka menghebohkan netizen</h5>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/image/petani/petani3.jpg" alt="Third slide">
                  <h5 class="caption">Bapak ini menemukan harta karun isinya rumput laut</h5>
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-xl-4 col-md-10 topArticle">
            <h2>TOP ARTICLE</h2>
            <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12" >
              
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="assets/image/produk/produk1.jpg" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="assets/image/produk/produk1.jpg" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="assets/image/produk/produk1.jpg" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </section>
      <section id="artikelBawah">
        <div class="container">
          <h3 class="JudulSectionArtikel">ARTIKEL TERKINI</h3>
          
          <div class="jcarousel-wrapper">
            <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
            <hr class="col-lg-12 col-xs-12 separator-multi-item">
            <div class="jcarousel">
              <ul style="padding-top: 4%;">
                <li>
                  <img class="artikelTerbaru" src="assets/image/produk/produk2.jpg" alt="Image 1">
                  <h5 class="judulArtikel">10 resep budidaya rumput laut</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="assets/image/produk/produk2.jpg" alt="Image 1">
                  <h5 class="judulArtikel">Makanan Rumput Laut Enaa</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="assets/image/produk/produk2.jpg" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="assets/image/produk/produk2.jpg" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="assets/image/produk/produk2.jpg" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                
                <li>
                  <img class="artikelTerbaru" src="assets/image/produk/produk2.jpg" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <?php include_once("template/footer.php"); ?> 