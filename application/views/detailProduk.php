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
    <?php include_once("template/navbar.php"); ?>
    <section id="detailProduk">
      <?php
            foreach ($detail as $a) {
            ?>
      <div class="container-fluid" style="margin:3% 0">
        <div class="row" >
          <div class="col-lg-4 col-md-5 col-sm-11 slideshowProduk" style=" margin: 2%; ">
            <div class="text-center">
              <h2>Foto Produk:</h2>
            </div>
            
                <img src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $a->foto ); ?>">
               
          </div>
          <div class=" col-lg-3 col-md-5 col-sm-11 descProdukDetail">
            
            <h2><?php echo $a->namaProduk?></h2>
            <h5>Harga:<span > Rp <?php echo $a->hargaProduk?></span></h5>
            <h5>Stok Produk:<span > <?php echo $a->stok?> pcs</span></h5>
            <h6>Deskripsi:</h6>
            <p><?php echo $a->detail?>
            </p>
            <form method="get" action="<?=base_url()?>index.php/cart/add_to_cart/<?php echo $a->idProduk?>">
              <div class="form-group">
                <label>Kuantitas: </label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                    <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <input type="text" class="form-control"  id="quantity" name="jum" min="1" max="100" value="1" style="text-align: center;">
                  <div class="input-group-append">
                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                    <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </div>
              <a href="<?=base_url()?>index.php/mart/bayar/<?php echo $a->idProduk?>" class="btn btn-success btn-lg btn-block text-uppercase" style="margin-top: 10%;">
                <i class="fas fa-money-bill-alt"></i> Beli Sekarang
              </a>
			  <input type="submit" value="Tambah ke Cart" class="btn btn-success btn-lg btn-block text-uppercase" style="margin-top: 10%;">
               
              </input>
            </form>
            <?php } ?>
          </div>
          <div class="col-lg-3 col-md-8 col-sm-11 descSeller" >
            <?php
            foreach ($detail as $a) {
            ?>
            <h2 style="color: green;">Produk Oleh:</h2><br>
            <img src="<?php echo base_url('asset/assets/image/seller.svg');?>"><br><br>
            <h4><?php echo $a->idPenjual?></h4>
            <span class="fas fa-star"><span class="fas fa-star" ><span class="fas fa-star"><span class="fas fa-star"></span></span></span></span>
            <?php } ?>
          </div>
        </div>
        
      </div>
    </section>
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
    <?php include_once("template/footer.php"); ?>
  </body>
</html>