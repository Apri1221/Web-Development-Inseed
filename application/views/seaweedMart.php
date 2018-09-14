<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
    <title>inseed.id - Seaweed Mart</title>
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
  <section id="etalase">
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
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
              <a href="<?=base_url()?>index.php/mart/detail" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
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
  <?php include_once("template/footer.php"); ?>
</body>
</html>