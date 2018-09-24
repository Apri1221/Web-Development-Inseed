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
        <form class="form-wrapper" action="<?php echo base_url();?>index.php/cart/cari">
          <input type="text" name="search" id="search" placeholder="Cari Produk" required>
          <input type="submit" value="Cari" id="submit">
        </form>
        
        
        <div class="container"><br/>
          <div class="row">
            <?php
              $no = $this->uri->segment('3') + 1;
              foreach($produk as $row){
            ?>
            <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
              <div class="card cardProduk" style="height: 500px;">
                <a href="<?php echo base_url();?>index.php/mart/detail/<?php echo $row->idProduk; ?>"><img class="card-img-top fotoProduk" src="<?php echo 'data:image/jpeg;base64,'.base64_encode( $row->foto ); ?>"></a>
                <div class="card-body" style="text-align: center;">
                  <h5 class="card-title judulProduk"><?php echo $row->namaProduk; ?></h5>
                  <p class="card-text "><i class="fas fa-store" ></i><span ><?php echo $row->idPenjual; ?></span></p>
                  <p class="card-text "><i class="fas fa-box-open"></i>Stok : <span ><?php echo $row->stok; ?> pcs</span></p>
                  <p class="card-text "><i class="fas fa-money-bill-alt" ></i><span>Rp <?php echo $row->hargaProduk; ?></span></p>
                  <a href="<?php echo base_url();?>index.php/mart/detail/<?php echo $row->idProduk; ?>" class="btn btn-success buttonProdukInvest"><i class="fas fa-shopping-cart"></i> Lihat Detail</a>
                </div>
              </div>
            </div>
            <?php }?>
          </div>
          <nav>
            <div class="col-xl-12 col-md-5 col-sm-5 col-xs-12 paginationProduk text-center">
              <ul class="pagination justify-content-center">
                <?php
                echo $this->pagination->create_links();?>
              </ul>
            </nav>
          </div>
        </div>
      </section>
      <?php include_once("template/footer.php"); ?>
    </body>
  </html>