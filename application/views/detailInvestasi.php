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
          </div>
          <div class=" col-lg-3 col-md-5 col-sm-10 descProdukDetail">
            <h2>Proyek Rumput Laut Sidoarjo</h2>
            <h5>Harga:<span > Rp 100.000</span></h5>
            <h5>Stok Produk:<span > 10 pcs</span></h5>
            <h6>Deskripsi:</h6>
            <p>Produk ini merupakan produk rumput laut pilihan yang disediakan terbaik untuk anda
            </p>
            <form method="get" action="cart.html">
              <div class="form-group">
                <label for="colors">Variasi:</label>
                <select class="custom-select" id="colors">
                  <option value="200 gram">200 Gram</option>
                  <option value="400 gram">400 Gram</option>
                  
                </select>
              </div>
              <div class="form-group">
                <label>Kuantitas: </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                    <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <input type="text" class="form-control"  id="quantity" name="quantity" min="1" max="100" value="1" style="text-align: center;">
                  <div class="input-group-append">
                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                    <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <a href="cart.html" class="btn btn-success btn-lg btn-block text-uppercase" style="margin-top: 10%;">
                <i class="fa fa-shopping-cart"></i> Beli Sekarang
              </a>
            </form>
          </div>
          <div class="col-lg-3 col-md-8 col-sm-10 descSeller" >
            <h2 style="color: green;">Produk Oleh:</h2><br>
            <img src="assets/image/girl.png"><br><br>
            <h4>Bu Marji</h4>
            <span class="fas fa-star"><span class="fas fa-star" ><span class="fas fa-star"><span class="fas fa-star"></span></span></span></span>
            <p style="margin-top: 2%;">Tahun Bergabung: 2018</p>
            <p>Lokasi Penjual: Sidoarjo, Jawa Timur</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  <?php include_once("template/footer.php"); ?> 
  <script>
  $(document).ready(function(){
  var quantity = 1;
  $('.quantity-right-plus').click(function(e){
  e.preventDefault();
  var quantity = parseInt($('#quantity').val());
  $('#quantity').val(quantity + 1);
  });
  $('.quantity-left-minus').click(function(e){
  e.preventDefault();
  var quantity = parseInt($('#quantity').val());
  if(quantity > 1){
  $('#quantity').val(quantity - 1);
  }
  });
  });
  </script>
</body>
</html>