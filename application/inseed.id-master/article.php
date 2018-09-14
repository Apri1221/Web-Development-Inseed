<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="assets/image/icon/icon.png">
  <title>inseed.id - Seaweed Article</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleCSS.css">
  <link rel="stylesheet" href="css/jcarousel.responsive.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="js/jcarousel.responsive.js"></script>
  <script src="js/jquery.jcarousel.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#loading").fadeOut("slow");
});
</script>
</head>
<body>
<div id="loading"></div>
<section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white" id="header">
 <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style="  padding: 0 20px 0 20px;
    height: 75px;
    width: 250px;"></a>  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

    <div class="collapse navbar-collapse " id="navbarSupportedContent" >
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL::to('welcome')}}">HOME <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{URL::to('invest')}}">SEAWEED INVEST</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('mart')}}">SEAWEED MART</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('article')}}">SEAWEED ARTICLE</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="{{URL::to('about_us')}}">TENTANG KAMI</a>
      </li>
     <li class="nav-item">
        <a class="nav-link" href="{{URL::to('login')}}">MASUK</a>
      </li>
    </ul>
  </div>
</nav>
  </section>

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





      <section id="contact-us">
        <div class="container">
          <div class="row">
           <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 logo_footer">
               <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style="width: 280px; height: auto;"></a>
               <h6 >Invest Seaweed in Indonesia</h6>
           </div>
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 contact" style="text-align: center; ">
               <h4>CONTACT US</h4>
               <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Address: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6> Universitas Brawijaya, Kota Malang, Jawa Timur 61553</h6>
               </div>
            </div>
              <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Phone: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6>08561729xx (Apri)</h6>
               </div>
            </div>
           <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Email: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6>inseed@ub.ac.id</h6>
               </div>
            </div>
             
           </div>
              <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 socialmedia" style="text-align: center;">
                <h4>OUR SOCIAL MEDIA</h4>
              <span class="fab fa-facebook-square fa-3x socmed-icon"></span><span class="fab fa-twitter-square fa-3x socmed-icon"></span><span class="fab fa-instagram fa-3x socmed-icon"></span>
           </div>
          </div> 
      </div>
      </section>
