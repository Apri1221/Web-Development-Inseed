<!DOCTYPE html>
<html>
  <head>
    <title>inseed.id - Pembayaran</title>
    <?php include_once("template/header.php"); ?>
  </head>
  <body>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="pembayaran">
      <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
        <h2><b>Terima Kasih</b></h2>
      </div>
      <div class="container-fluid" style="margin-top: 8%">
        <div class="row kontenPembayaran">
          <div class="col-xl-4 col-md-8 col-sm-12 col-xs-12" style="text-align: center;">
            <img src="<?php echo base_url('asset/assets/image/done.png');?>" style="width: 40%;margin-bottom: 10%;">
          </div>
          <div class="col-xl-8 col-md-12 col-sm-12 col-xs-12"  >
            <div class="alert alert-success">
              <h4>Terima kasih! <br>Anda telah melakukan pembelian produk kami <br></h4>
            </div>
            <div class="row">
              <div class="col-md-2" style="text-align: center;">
                <img src="<?php echo base_url('asset/assets/image/bank.jpg');?>" style="width: 100%; height:auto;">
                
              </div>
              <div class="col-md-6" style="margin-top: 3%;">
                
                <h5> Harap membayar ke rekening 8038-8391-xxxx A/N inseed CIMB NIAGA<br>Maksimal <b> 3 hari </b>     setelah pemesanan</h5>
              </div>
              <div class="col-md-4" style="text-align: center; margin-top: 5%;">
                <a type="submit" class="btn btn-outline-success" style="-webkit-appearance:none;" target="_blank" href="<?php echo base_url ('index.php/Laporan/produk/').$idTransaksi; ?>">Cetak Invoice Pembelian</a>
              </div>
            </div>
            
            
          </div>
        </div>
      </section>
   
    </body>
  </html>