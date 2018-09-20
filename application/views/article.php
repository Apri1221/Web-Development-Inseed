<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Seaweed Article</title>

  </head>
  <body>
    <div id="loading"></div>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="headline">
      
        <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
          <h2>Seaweed <b>Artikel</b></h2>
        </div>
        <div class="container-fluid">
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
                  <a href="<?=base_url()?>index.php/article/detail"> 
                    <img class="d-block w-100" src="<?php echo base_url('asset/assets/image/petani/petani1.jpg'); ?>" alt="First slide">
                    <h5 class="caption">Jenis dan Manfaat Rumput Laut di Indonesia</h5>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="<?=base_url()?>index.php/article/detail"> 
                    <img class="d-block w-100" src="<?php echo base_url('asset/assets/image/petani/petani2.jpg'); ?>" alt="Second slide">
                    <h5 class="caption">Ditemukan rumput laut langka menghebohkan netizen</h5>
                  </a>
                </div>
                <div class="carousel-item">
                  <a href="<?=base_url()?>index.php/article/detail"> 
                    <img class="d-block w-100" src="<?php echo base_url('asset/assets/image/petani/petani3.jpg'); ?>" alt="Third slide">
                    <h5 class="caption">Bapak ini menemukan harta karun isinya rumput laut</h5>
                  </a>
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
                  <img src="<?php echo base_url('asset/assets/image/produk/produk1.jpg'); ?>" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Harga Rumput Laut Melonjak!</h6>
                </div>
              </div>
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="<?php echo base_url('asset/assets/image/petani/petani2.jpg'); ?>" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6> Rumput laut demi Indonesia</h6>
                </div>
              </div>
              <div class="row berita">
                <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12">
                  <img src="<?php echo base_url('asset/assets/image/produk/produk3.jpg'); ?>" >
                </div>
                <div class="col-xl-7 col-md-11 col-sm-12 col-xs-12 judul" >
                  <h6>Rumput Laut Sebagai Bahan Bakar Nabati Masa depan</h6>
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
                  <img class="artikelTerbaru" src="<?php echo base_url('asset/assets/image/rumput-laut.jpg'); ?>" alt="Image 1">
                  <h5 class="judulArtikel">10 resep budidaya rumput laut</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="<?php echo base_url('asset/assets/image/produk/produk3.jpg'); ?>" alt="Image 1">
                  <h5 class="judulArtikel">Manfaat Rumput Laut, dari Pangan, Antioksidan, hingga Biofuel</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="<?php echo base_url('asset/assets/image/petani/petani4.jpg'); ?>" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="<?php echo base_url('asset/assets/image/petani/petani5.jpg'); ?>" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                <li>
                  <img class="artikelTerbaru" src="<?php echo base_url('asset/assets/image/produk/produk2.jpg'); ?>" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </li>
                
                <li>
                  <img class="artikelTerbaru" src="<?php echo base_url('asset/assets/image/produk/produk2.jpg'); ?>" alt="Image 1">
                  <h5 class="judulArtikel">Rumput laut ditemukan di teluk Malang</h5>
                  <a href="#" class="btn btn-primary">Lihat Detail</a>
                </ul>
              </div>
            </div>
          </div>
        </section>
        <?php include_once("template/footer.php"); ?> 