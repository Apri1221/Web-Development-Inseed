<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Selamat Datang</title>
    
  </head>
  <body id="page-top">
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
  
  <section id="headerHome" style="height: 100%;">
    <div class="carousel slide" id="controlCarousel" data-ride="carousel" >
      <div class="carousel-inner" style="width: 100%; text-align: center; ">
        <div class="carousel-item active carousel-item-1">
          <h1 class="text-uppercase text-white" ><strong>Tahukah anda?</strong></h1>
          <p class="text-faded text-white mb-5">Potensi rumput laut yang dimiliki Bangsa Indonesia?</p>
          <a href="#anchorService" class="shiny-btn" >Fakta Rumput Laut</a> <!-- INI HARUSNYA NGELINK KE SECTION FAKTA2 RUMPUT LAUT, kasih animasi-->
        </div>
        <div class="carousel-item carousel-item-2">
          <h1 class="text-uppercase text-white" ><strong>inseed.id</strong></h1>
          <p class="text-faded text-white mb-5">Invest Seaweed in Indonesia</p>
          <a href="#anchorAbout" class="shiny-btn" >Who Are We?</a> <!-- INI HARUSNYA NGELINK KE SECTION INSEED.ID, kasih animasi-->
        </div>
        <div class="carousel-item carousel-item-3">
          <h1 class="text-uppercase text-white" ><strong>FITUR KAMI</strong></h1>
          <p class="text-faded text-white mb-5">Ingin tau layanan yang ada di inseed.id? </p>
          <a href="#anchorFeatures" class="shiny-btn" >Layanan kami</a> <!-- INI HARUSNYA NGELINK KE SECTION FITUR KITA, kasih animasi-->
        </div>
        <div class="carousel-item carousel-item-4">
          <h1 class="text-uppercase text-white" ><strong>MENGAPA INSEED.ID?</strong></h1>
          <p class="text-faded text-white mb-5">Alasan anda memilih kami sebagai tempat berinvestasi</p>
          <a href="#anchorWhyUs" class="shiny-btn" >Yuk cekidot</a> <!-- INI HARUSNYA NGELINK KE SECTION FITUR KITA, kasih animasi-->
        </div>
      </div>
      <a class="carousel-control-prev" href="#controlCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#controlCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
  </section>
  <div id="anchorService"></div>
  
  <section id="services" style=" height:100%; padding: 10% 0;">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h1 class="text-uppercase text-center">
          <strong >TAHUKAH ANDA?</strong>
          </h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container" style="padding-top: 30px">
      <div class="row">
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img src="<?php echo base_url('asset/assets/image/untitled-1.png');?>" style="width: 50%"</img>
            <h4 class="mb-3 text-white">Seaweed</h4>
            <p class="text-muted mb-0">Sebanyak 555 jenis rumput laut tumbuh di perairan laut Indonesia. Salah satu jenis yang dibudidayakan adalah <i>Euchuema cotonii.</i></p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img src="<?php echo base_url('asset/assets/image/2.png');?>" style="width: 50%"</img>
            <h4 class="mb-3 text-white">Seaweed</h4>
            <p class="text-muted mb-0">Produk rumput laut luar biasa karena sekitar 85 persen pasokan rumput laut dunia dari Indonesia.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img src="<?php echo base_url('asset/assets/image/3.png');?>" style="width: 50%"</img>
            <h3 class="mb-3 text-white">Seaweed</h3>
            <p class="text-muted mb-0">Setiap tahunnya, ekspor rumput laut Indonesia dapat meraup keuntungan ekspor sebesar US$ 300 juta.</p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img src="<?php echo base_url('asset/assets/image/4.png');?>" style="width: 50%"</img>
            <h3 class="mb-3 text-white">Seaweed</h3>
            <p class="text-muted mb-0">Rumput laut sangat bermanfaat bagi kesehatan. Baik untuk penderita diabetes dan kolesterol.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="anchorAbout"></div>
  <section class="bg-primary" id="about" style="padding: 12% 0; height: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img id="jempol" src="<?php echo base_url('asset/assets/image/5.png');?>" style="width:70%"</img>
          </div>
        </div>
        <div class="col-lg-6 col-md-10">
          <h1 class="text-uppercase text-white">
          <strong>INSEED.ID</strong>
          </h1>
          <p class="text-faded text-white mb-4" style="padding-top: 30px">Inseed.id merupakan sebuah web yang menyediakan tempat untuk investasi pada budidaya rumput laut di Indonesia.
            Selain itu, inseed.id juga membantu membuka potensi produk rumput laut dengan cara memasarkan hasil produksi para UMKM kepada masyarakat umum untuk bisa melihat dan membelinya.</br>
          </br>Dengan demikian, inseed.id diharapkan dapat membawa inovasi teknologi yang positif bagi para petani maupun masyarakat dan juga menjadi salah satu usaha untuk memajukan potensi rumput laut.</br></p>
        </div>
      </div>
    </div>
  </section>
  <div id="anchorFeatures"></div>
  <section id="fiturKami" style="padding: 10% 0; height: 100%; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center" id="featur">
          <h1 class="text-uppercase text-center" >
          <strong>fitur utama kami</strong>
          </h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa fa-money text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Seaweed Invest</h3>
            <p class="text-muted mb-0">Tempat bagi masyarakat untuk berinvestasi pada budidaya rumput laut dengan sistem bagi hasil di akhir proyek.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa fa-shopping-cart text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Seaweed Mart</h3>
            <p class="text-muted mb-0">Mempertemukan UMKM produk olahan rumput laut dengan pembeli untuk berjual beli produk dengan harga terjangkau.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
            <h3 class="mb-3">Seaweed Article</h3>
            <p class="text-muted mb-0">Menyediakan artikel-artikel menarik mengenai rumput laut untuk menambah wawasan masyarakat.</br></br></br></br></p>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <div id="anchorWhyUs"></div>
  <section class="bg-primary" id="whyUs" style="height: 100%; padding: 10% 0; ">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img id="jempol" src="<?php echo base_url('asset/assets/image/thumb.png');?>" style="width:70%"</img>
          </div>
        </div>
        <div class="col-lg-6 col-md-10">
          <h1 class="text-uppercase text-white">
          <strong>MENGAPA ANDA HARUS MEMILIH KAMI?</strong>
          </h1>
          <p class="text-faded text-white mb-4" style="padding-top: 30px">Kami menawarkan banyak hal menarik :</br></br>
            <i class="fa fa-1x fa-check mb-2 sr-icons text-white"></i> Sistem bagi hasil sangat menguntungkan petani dan investor</br>
            <i class="fa fa-1x fa-check mb-2 sr-icons text-white"></i> Mulai dari Rp 15.000,00 saja, anda sudah bisa berinvestasi!</br>
            <i class="fa fa-1x fa-check mb-2 sr-icons text-white"></i> Proyek - proyek unggulan tersebar di seluruh Indonesia</br>
            <i class="fa fa-1x fa-check mb-2 sr-icons text-white"></i> Resiko berinvestasi pada budidaya rumput laut tergolong rendah</br>
            <i class="fa fa-1x fa-check mb-2 sr-icons text-white"></i> Produk olahan rumput laut terbaik tersedia di sini</br>
            <i class="fa fa-1x fa-check mb-2 sr-icons text-white"></i> Bekerja sama dengan koperasi-koperasi terpercaya</br>
          </p>
        </div>
      </div>
    </div>
  </section>
  
  <section id="testimoni" style="padding-top: 60px; padding-bottom: 60px">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h1 class="text-uppercase text-center">
          <strong>KATA MEREKA ...</strong>
          </h1>
          <hr class="my-4">
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 text-center">
          <div class="service-box mt-5 mx-auto">
            <img style="width: 40%" src="<?php echo base_url('asset/assets/image/boy.png');?>"></img>
            <h3 class="mb-3">YOAN SUTRISNO</h3>
            <p class="text-muted mb-0"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i></p>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 text-center" >
          <div class="service-box mt-5 mx-auto">
            <img src="<?php echo base_url('asset/assets/image/girl.png');?>" style="width: 40%"></img>
            <h3 class="mb-3">AVI WIJAYA</h3>
            <p class="text-muted mb-0"><i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</i></p>
          </div>
        </div>
        <div class="container text-center" style=" margin-top: 5%;">
          <hr class="my-4" >
          <h4 class="mb-4"></br></br>Berminat? Yuk gabung di inseed.id !</h4>
          <a class="btn btn-success btn-xl sr-button" href="<?=base_url()?>index.php/auth/daftar">Bergabung sekarang!</a>
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
  <script type="text/javascript">
  
  // Select all links with hashes
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .not('[href="#controlCarousel"]')
  .click(function(event) {
  // On-page links
  if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
  &&
  location.hostname == this.hostname
  ) {
  // Figure out element to scroll to
  var target = $(this.hash);
  target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
  // Does a scroll target exist?
  if (target.length) {
  // Only prevent default if animation is actually gonna happen
  event.preventDefault();
  $('html, body').animate({
  scrollTop: target.offset().top
  }, 1000, function() {
  // Callback after animation
  // Must change focus!
  var $target = $(target);
  $target.focus();
  if ($target.is(":focus")) { // Checking if the target was focused
  return false;
  } else {
  $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
  $target.focus(); // Set focus again
  };
  });
  }
  }
  });
  </script>
</body>
</html>