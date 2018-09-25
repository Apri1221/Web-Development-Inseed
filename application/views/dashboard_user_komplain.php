<html>
  <head>
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard User Komplain</title>
    <script type='text/javascript'>
    function preview_image(event)
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('profilePicture');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
    }
    </script>
  </head>
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>
    
    <?php include_once("template/navbar.php"); ?>
    <section id="">
      <div class="col-md-12">
        
      </div>
    </section>
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
      <div class="row">
        <div class="col-md-3" >
          <ul class="list-group menuDashboard" >
            <li class="list-group-item judulMenuDashboard" 
            <?php if($this->session->userdata('level') === '0'):?>
                style="background-color: green;">USER DASHBOARD</li>
                <div id="sidebarUser">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item <?php if($this->uri->segment(2)=="pesanan"){echo " active";}?>"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/investasi');?>"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item active"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
                </div>      
            <?php elseif($this->session->userdata('level') === '2'):?>
                style="background-color: #167c85;">KOPERASI DASHBOARD</li>
                <!-- koperasi -->
                <div id="sidebarKoperasi">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item "><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/kelolaProyek'); ?>"> <li class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item active"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
                </div>
            <?php elseif($this->session->userdata('level') === '3'):?>
                style="background-color: #12a8bb;">UMKM DASHBOARD</li>
                <!-- UMKM -->
                <div id="sidebarUMKM">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/tambahProduk');?>"> <li class="list-group-item"><i class="fa fa-plus"></i>Tambah Produk</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/produk');?>"> <li class="list-group-item"><i class="fa fa-box-open" ></i>Kelola Produk</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item"><i class="fas fa-file-invoice"></i>Kelola Pesanan</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item active"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
                </div>
            <?php endif;?>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Komplain Anda</h4>
              
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-8" style="margin-left: 15%;">
                  <form action="<?php echo base_url ('index.php/Dashboard/tambahkomplainDB');?>" 
                    method="POST" id="formArtikel">
                    <input type="hidden" name="tglKomplain" value="<?php 
                    date_default_timezone_set('Asia/Jakarta');
                    $date = date("Y-m-d");  
                    echo $date; ?>" class = "form-control">

                    <h6>Judul Komplain:</h6>
                    <input type="text" name="judulKomplain" class="form-control">
                    
                    <br>
                    <h6>Isi Komplain:</h6>
                    <textarea name="isiKomplain" form="formArtikel" class="form-control"></textarea>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-outline-primary" style="width: 25%; margin-left: 40%;">Simpan</button>
                    
                  </form>
                  <script>
                    CKEDITOR.replace( 'isiKomplain' );
                  </script>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>