<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
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
            <li class="list-group-item judulMenuDashboard" style="background-color: #12a8bb;">UMKM DASHBOARD</li>
            
            <!-- UMKM -->
            <div id="sidebarUMKM">
              <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item "><i class="fas fa-user" ></i>Profilku</li> </a>
              <a href="<?php echo base_url ('index.php/Dashboard/tambahProduk');?>"> <li class="list-group-item "><i class="fa fa-plus"></i>Tambah Produk</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/produk');?>"> <li class="list-group-item active"><i class="fa fa-box-open"></i>Kelola Produk</li></a>
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Edit Produk</h4>
              
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-4 editProdukUMKM" style="text-align: center;">
                  <img src="assets/image/produk/produk1.jpg">
                  
                  <form action="#" method="POST">
                    <br>
                    <div class="upload-btn-wrapper">
                      <button class="btn">Ganti gambar</button>
                      <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png">
                    </div>
                  </div>
                  
                  <div class="col-md-8 text-left editProdukUMKM">
<<<<<<< HEAD
                    <div class="row">
					<?php foreach ($produk as $row) : ?>
                      <h6>Nama Produk:
<<<<<<< HEAD
                      <input type="text" name="namaProduk" class="form-control" value="<?php echo $row?>">
=======
                      <input type="text" name="namaProduk" class="form-control" value="<?php echo $result->namaProduk ?>">
>>>>>>> 2718b0e86d4a66086a15517839a4dd098d00450a
=======
                    
                      <div class="col-md-12">
                         <h6>Nama Produk:
                      <input type="text" name="namaProduk" class="form-control"  value="<?php echo $result->namaProduk ?>" >
>>>>>>> 7185fd772d82f4a3c4f29d892f66de393e681ec5
                      </h6>
                      </div>
                     
                      
                    
                    <div class="col-md-12">
                      
                      <h6>Harga:
                      <input type="text" name="hargaProduk" class="form-control" value="<?php echo $result->hargaProduk ?>">
                      
                      </h6>
                    </div>
                    <div class="col-md-12">
                      <h6>Stok:
                      <input type="text" name="stokProduk" class="form-control" value="<?php echo $result->stok ?>">
                      
                      </h6>
                    </div>
                      
                      <div class="col-md-12">
                      <h6>Detail Produk:
                      <textarea form="" name="detailProduk" class="form-control" value="<?php echo $result->detail ?>"></textarea>
                      
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
</body>
</html>