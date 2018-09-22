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
    <?php
    $id = $this->uri->segment(3);
    ?>
  <section id="pembayaran">
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
      <h2><b>Terima Kasih</b></h2>
    </div>
    <div class="container-fluid">
      <div class="row kontenPembayaran">
	          <div class="col-xl-4 col-md-8 col-sm-12 col-xs-12">
			  <img src="<?php echo base_url('asset/assets/image/done.png');?>" style="width: 50%; margin-left:25%"</img></div>
        <div class="col-xl-8 col-md-8 col-sm-10"  >
		  <div class="alert alert-success">
            <h4>Data tersimpan! <br>Terima kasih sudah melakukan investasi pada proyek kami <br></h4>
			 </div>
            <p style="text-align: justify;">Jika sudah melakukan transaksi, maka projek akan langsung masuk dashboard anda.<br>
              Untuk mengecek dashboard anda, silahkan klik <a href="<?=base_url()?>index.php/dashboard/investasi/">Di sini</a><br></p>
           <a type="submit" class="btn btn-outline-success" style="-webkit-appearance:none;" target="_blank" href="<?php echo base_url ('index.php/Laporan/investasi/'.$id);?>">Cetak Invoice Investasi</a>
          </div>
        </div>
      </div>
      </section>
       <?php include_once("template/footer.php"); ?>
	  </body>
	  </html>
	  