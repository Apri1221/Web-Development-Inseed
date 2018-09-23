<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
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
            <!-- User -->
            <li class="list-group-item judulMenuDashboard"
              <?php if($this->session->userdata('level') === '0'):?>
            style="background-color: green;">USER DASHBOARD</li>
            <div id="sidebarUser">
              <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
              <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item active"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/investasi');?>"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
            </div>
            <?php elseif($this->session->userdata('level') === '2'):?>
          style="background-color: #167c85;">KOPERASI DASHBOARD</li>
          <!-- koperasi -->
          <div id="sidebarKoperasi">
            <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
            <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
            <a href="<?php echo base_url ('index.php/Dashboard/kelolaProyek'); ?>"> <li class="list-group-item active"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
          </div>
          <?php elseif($this->session->userdata('level') === '3'):?>
        style="background-color: blue;">UMKM DASHBOARD</li>
        <!-- UMKM -->
        <div id="sidebarUMKM">
          <a href="dashboard.php" > <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user" ></i>Profilku</li> </a>
          <a href=""> <li class="list-group-item"><i class="fa fa-box-open"></i>Kelola Produk</li></a>
        </div>
        <?php endif;?>
        
      </ul>
    </div>
    <?php foreach ($result as $row ) {
      # code...
    } ?>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header" style="background-color: white;">
          <h4 style="font-weight: bold;"> Proyek saya</h4>
          
        </div>
        <div class="card-body ">
          <div class="row">
            <div class="col-md-4 editProyekDashboard" style="text-align: center;">
              <img src="">
              
              <form action="<?php echo base_url ('index.php/Dashboard/updateProyek'); ?>" method="POST">
                 <img id="profilePicture" 
                  src="$result->foto" class="profilePictureDashboard">
                <br><br>
                <div class="upload-btn-wrapper">
                  <button class="btn">Ganti gambar</button>
                  <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png" onchange="preview_image(event)">
                </div>
              </div>
              
              <div class="col-md-8 col-sm-8 text-left editProyekDashboard">
                <div class="col-md-12 col-sm-12">
                  <h6>Nama Proyek:
                  <input type="text" name="namaProyek" class="form-control" value="<?php echo $row->namaProyek ?>">
                  </h6>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h6>Kebutuhan Dana
                  <input type="text" name="kebutuhanDana" class="form-control" value="<?php echo $row->minimalDana ?>">
                  
                  </h6>
                </div>
                <div class="col-md-12 col-sm-12">
                  
                  <h6>Lokasi Proyek
                  <input type="text" name="lokasiProyek" class="form-control" value="<?php echo $row->lokasi ?>">
                  
                  </h6>
                </div>
                <div class="col-md-12 col-sm-12">
                   <h6>Penanggung Jawab:
                  <input type="text" name="penanggungJawab" class="form-control" value="<?php echo $row->penanggungJawab ?>">
                  
                  </h6>
                </div>
                 
                <div class="col-md-12 col-sm-12">
                  
                  <h6>Awal Proyek
                  <input type="date" name="awalProyek" class="form-control" value="<?php echo $row->startProjek ?>">
                  
                  </h6>
                </div>
                <div class="col-md-12 col-sm-12">
                  <h6>Akhir Proyek
                  <input type="date" name="akhirProyek" class="form-control" value="<?php echo $row->endProjek?>" >
                  
                  </h6>
                </div>
                <br>
                
                <button type="submit" class="btn btn-outline-primary" style="width: 25%; margin-left: 25%;">Simpan</button>
                
              </form>
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