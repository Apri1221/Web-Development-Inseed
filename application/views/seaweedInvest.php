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
  <section id="etalase">
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
      <h2>Seaweed <b>Invest</b></h2>
    </div>
    <div class="container-fluid">
      <div class="judulSeaweedMart">
        <h2>Cari proyek yang ingin anda modali sekarang!</h2>
        <hr>
        <div class="btn-group filterProyek" role="group" style="margin: 2% 0;">
          <button type="button" class="btn disabled" style="opacity: 1;">Sortir Proyek Berdasarkan:</button>
          <button type="button" class="btn btn-info active" href="<?php echo base_url('invest/sortir/untung');?>"><i class="fas fa-percentage"></i>Ekspektasi Keuntungan</button>
          <button type="button" class="btn btn-info" href="<?php echo base_url('invest/sortir/waktu');?>"><i class="far fa-calendar-alt"></i>Waktu Proyek</button>
          <button type="button" class="btn btn-info" href="<?php echo base_url('invest/sortir/progress');?>"><i class="fas fa-money-bill-alt"></i>Progress Pendanaan</button>
        </div>
      </div>
      <div class="row">
	 <?php 
		$no = $this->uri->segment('3') + 1;
		foreach($proyek as $a){
		?>
        <div class="col-xl-3 col-md-5 col-sm-5 col-xs-12 produkSeaweedMart">
          <div class="card cardProduk">
            <div class="card-body cardInvest">
              <h5 class="card-title " style="font-weight: bold;"> <?php echo $a->namaProyek ?> </h5>
              <p class="card-text ">Expektasi Keuntungan : <span> <?php echo $a->ekspUntung ?> %</span></p>
              <p class="card-text ">Lama Proyek : <span><?php echo $a->lamaProyek?> Hari</span></p>
              <p class="card-text ">Penanggung Jawab : <span><?php echo $a->penanggungJawab?></span></p>
              <p class="card-text ">Lokasi : <span><?php echo $a->lokasi?></span></p>
              <div class="bagianDanaInvest" style="">
                <div class="progress" style="margin-bottom: 8%;">
                  <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">75%</div>
                </div>
                <p class="card-text ">Dana Terkumpul : <span >Rp <?php echo $a->danaTerkumpul?></span></p>
                <p class="card-text ">Sisa Waktu : <span ><?php echo $a->sisaWaktu?> Hari</span></p>
                <a href="<?=base_url()?>index.php/invest/detail/<?php echo $a->idProyek?>" class="btn btn-info buttonProdukInvest">Lihat Proyek</a>
              </div>
            </div>
          </div>
        </div>
		<?php } ?>
		</div>		
      <div class="paginationProduk">
        <nav>
          <ul class="pagination justify-content-center text-center">
            
<?php 
echo $this->pagination->create_links();?>
	</li>
          
		  </ul>
        </nav>
      </div>
    </div>
  </section>
  <?php include_once("template/footer.php"); ?> 
</body>
</html>