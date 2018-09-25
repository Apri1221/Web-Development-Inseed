<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
    <title>inseed.id - Pembayaran Produk</title>
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
    <section id="formPembayaranProduk">
      <div class="container-fluid" style="padding: 5%;">
        <div class="row">
          <div class="col-md-7">
            <h2 style="text-align: center;">Form Pembayaran Produk</h2>
            <hr class="col-md-4">
            <br>
            <?php
            foreach ($this->cart->contents() as $items) :
            ?>
            <form class="form-horizontal" method = "post" action="<?php echo base_url();?>index.php/mart/thanks/<?php echo $items['id'];?>/<?php echo MD5($items['id'] . $items['buyer']);?>">
              <?php endforeach ?>
              <div class="form-group">
                <label class="control-label col-md-4" for="produk">Metode Pembayaran</label>
                <div class="col-md-12">
                  <select class="form-control" id="sel1" placeholder="Metode Pembayaran">
                    <option>ATM</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4" for="deskripsi">Pilih Bank</label>
                <div class="col-md-12">
                  <select class="form-control" id="sel1" placeholder="Kategori">
                    
                    <option>CIMB NIAGA</option>
                  </select>
                </div>
              </div>
              
              <br>
              <h2>Pengiriman</h2>
              <br>
              <div class="form-group">
                <label class="control-label col-md-4" for="produk">Alamat Pengiriman</label>
                <div class="col-md-12">
                  <input type="text" name="alamat" id="alamat" class="form-control" required> </input>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-4" for="produk">Pilih Propinsi</label>
                <div class="col-md-12">
                  <select class="form-control" id="provinsi" placeholder="Jasa Pengiriman">
                    
                    <option>Jawa Timur</option>
                    <option>Jawa Barat</option>
                    <option>Jawa Tengah</option>
                    <option>DKI Jakarta</option>
                    <option>DI Yogyakarta</option>
                    <option>Banten</option>
                  </select>
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-4" for="produk">Pilih Jasa Pengiriman</label>
                <div class="col-md-12">
                  <select class="form-control" id="sel1" placeholder="Jasa Pengiriman">
                    <option>JNE</option>
                    <option>TIKI</option>
                    <option>J&T</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-4" for="produk">Paket Pengiriman</label>
                <div class="col-md-12">
                  <select class="form-control" id="sel1" placeholder="Paket Pengiriman">
                    <option>REG</option>
                    <option>YES</option>
                    <option>OKE</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-md-12">
                  <button type="submit" href="<?php echo base_url();?>index.php/mart/thanks/<?php echo $items['id'];?>/<?php echo $items['rowid'];?>" class="btn btn-primary">Bayar Sekarang</button>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-header text-center" style="background-color: green; color:white;">
                <h3> Detail Pembelian</h3>
              </div>
              <div class="card-body descProdukDetail" style="border:0;">
                <h5 class="card-title">Sub Total (<?php echo $this->cart->total_items(); ?> Items) :  <span>Rp <?php echo $this->cart->total(); ?></span></h5>
                <h5 class="card-title">Biaya Pengiriman :  <span>Rp 5.000</span></h5>
                <h5 class="card-title">Total : <span>Rp <?php echo ($this->cart->total()+5000); ?></span></h5>
              </div>
            </div>
          </div>
          
        </section>
        <?php include_once("template/footer.php"); ?>
        
      </body>
    </html>