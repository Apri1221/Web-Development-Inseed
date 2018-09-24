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
              <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
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
                  
					<?php foreach ($result as $row) : ?>
                  <form action="<?php echo base_url()."index.php/dashboard/updateproduk/" . $row->idProduk?>" method="POST">
                    <br>
                    <div class="upload-btn-wrapper">
                      <button class="btn">Ganti gambar</button>
                      <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png">
                    </div>
                  </div>
                  
                  <div class="col-md-5 text-left editProdukUMKM">
                    <div class="row">
                      <h6>Nama Produk<h6>
                      <input type="text" name="namaProduk" class="form-control" value="<?php echo $row->namaProduk?>">                    
					  <h6>Harga:
                      <input type="text" name="hargaProduk" class="form-control" value="<?php echo $row->hargaProduk ?>">
                      
                      </h6>
                      <h6>Stok:
                      <input type="text" name="stokProduk" class="form-control" value="<?php echo $row->stok ?>">
                      
                      </h6>
                      <h6>Detail Produk:
                      <input type="text" name="detailProduk" class="form-control" value="<?php echo $row->detail ?>"></textarea>
                      
                      </h6>
                    <br>       
					<br>
                    <button type="submit" class="btn btn-outline-primary" style="width: 50%;">Simpan</button>
                    
                  </form>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>