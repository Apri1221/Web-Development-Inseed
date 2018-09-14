<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="icon" href="assets/image/icon/icon.png">
  <title>inseed.id - Seaweed Mart</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styleCSS.css">
  <link rel="stylesheet" href="css/jcarousel.responsive.css">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
<nav class="navbar navbar-expand-lg navbar-light bg-white">
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

<section id="etalase">
   <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header">
      <h2>Seaweed <b>Market</b></h2>
</div>
<div class="container-fluid">
<div class="judulSeaweedMart">
    <h2>Cari produk rumput laut  yang kamu inginkan</h2>
    <hr>
</div>
 <form class="form-wrapper">
    <input type="text" id="search" placeholder="Cari Produk" required>
    <input type="submit" value="Cari" id="submit">
</form>
  

<div class="row">
  <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
    <div class="card cardProduk">
  <img class="card-img-top fotoProduk" src="assets/image/produk/produk3.jpg" alt="Card image cap">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title judulProduk">Dodol Rumput Laut</h5>
        <p class="card-text "><i class="fas fa-store" ></i>Toko <span >Bu Marji</span></p>
         <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span >25 pcs</span></p>
    <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span   > Rp 100.000</span></p>

    <a href="#" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
  </div>
</div>
  </div>

  <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
    <div class="card cardProduk">
  <img class="card-img-top fotoProduk" src="assets/image/produk/produk3.jpg" alt="Card image cap">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title judulProduk">Dodol Rumput Laut</h5>
        <p class="card-text "><i class="fas fa-store" ></i>Toko <span >Bu Marji</span></p>
         <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span >25 pcs</span></p>
    <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span   > Rp 100.000</span></p>

    <a href="#" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
  </div>
</div>
  </div>

  <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
    <div class="card cardProduk">
  <img class="card-img-top fotoProduk" src="assets/image/produk/produk3.jpg" alt="Card image cap">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title judulProduk">Dodol Rumput Laut</h5>
        <p class="card-text "><i class="fas fa-store" ></i>Toko <span >Bu Marji</span></p>
         <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span >25 pcs</span></p>
    <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span   > Rp 100.000</span></p>

    <a href="#" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
  </div>
</div>
  </div>

   <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
    <div class="card cardProduk">
  <img class="card-img-top fotoProduk" src="assets/image/produk/produk3.jpg" alt="Card image cap">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title judulProduk">Dodol Rumput Laut</h5>
        <p class="card-text "><i class="fas fa-store" ></i>Toko <span >Bu Marji</span></p>
         <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span >25 pcs</span></p>
    <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span   > Rp 100.000</span></p>

    <a href="#" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
  </div>
</div>
  </div>

  <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
    <div class="card cardProduk">
  <img class="card-img-top fotoProduk" src="assets/image/produk/produk3.jpg" alt="Card image cap">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title judulProduk">Dodol Rumput Laut</h5>
        <p class="card-text "><i class="fas fa-store" ></i>Toko <span >Bu Marji</span></p>
         <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span >25 pcs</span></p>
    <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span   > Rp 100.000</span></p>

    <a href="#" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
  </div>
</div>
  </div>

   <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
    <div class="card cardProduk">
  <img class="card-img-top fotoProduk" src="assets/image/produk/produk3.jpg" alt="Card image cap">
  <div class="card-body" style="text-align: center;">
    <h5 class="card-title judulProduk">Dodol Rumput Laut</h5>
        <p class="card-text "><i class="fas fa-store" ></i>Toko <span >Bu Marji</span></p>
         <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span >25 pcs</span></p>
    <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span   > Rp 100.000</span></p>

    <a href="#" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
  </div>
</div>
  </div>

</div>
 <div class="paginationProduk">
   <nav>
  <ul class="pagination justify-content-center">
     <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
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
  </body>
</html>
