<html>
  <head>
    
    <script src="https://cdn.ckeditor.com/4.10.1/standard/ckeditor.js"></script>
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
            <li class="list-group-item judulMenuDashboard" style="background-color: black;">ADMINISTRATOR</li>
            <!-- Admin-->
            <div id="sidebarAdmin" >
              <a href="<?php echo base_url ('index.php/Dashboard/');?>"> <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user"></i>Kelola Pengguna</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaArticle');?>""> <li class="list-group-item active"><i class="fas fa-shopping-cart" ></i>Kelola Article</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/adminkelolaProyek');?>""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Kelola Proyek</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaProduk');?>""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Kelola Produk</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/adminKomplain'); ?>"> <li class="list-group-item"><i class="glyphicon glyphicon-search"></i>Laporkan Komplain</li></a>
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Tambah artikel</h4>
              
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-8" style="margin-left: 15%;">
                  <form action="<?php echo base_url ('index.php/Dashboard/updateArticleDB/'). $result->idArtikel;?>" 
                    method="POST" id="formArtikel">
                    <input type="hidden" name="tglArtikel" value="<?php 
                  date_default_timezone_set('Asia/Jakarta');
                  $date = date("Y-m-d");  
                  echo $date; ?>" class = "form-control">

                    <h6>Judul Artikel:</h6>
                    <input type="text" name="judulArtikel" value="<?php echo $result->judulArtikel; ?>" class="form-control">
                    
                    <br>
                    <h6>Isi Artikel:</h6>
                    <textarea name="isiArtikel" form="formArtikel" class="form-control"><?php echo $result->isiArtikel; ?></textarea>
                    <br>
                    <img id="profilePicture"  class="profilePictureDashboard">
                    <br>
                    <br>
                    <div class="upload-btn-wrapper">
                      <button class="btn">Pilih gambar artikel</button>
                      <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png" onchange="preview_image(event)">
                    </div>
                    <br>
                    <br>
                    <button type="submit" class="btn btn-outline-primary" style="width: 25%; margin-left: 40%;">Simpan</button>
                    
                  </form>
                  <script>
                    CKEDITOR.replace( 'isiArtikel' );
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>