<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
  </head>
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>

    <?php include_once("template/navbar.php"); ?>

    <section id="headerDashboard">
      <div class="col-md-12">
        
      </div>
    </section>
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
      <div class="row">
        <div class="col-md-3" >
          <ul class="list-group menuDashboard" >
            <!-- User -->
            <li class="list-group-item judulMenuDashboard" style="background-color: #12a8bb;">UMKM DASHBOARD</li>
            <div id="sidebarUser" style="display: none;">
              <a href="dashboard.php" > <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user" ></i>Profilku</li> </a>
              <a href="dashboard_user_cairkan.php"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
              <a href="dashboard_user_pesanan.php"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
              <a href="dashboard_user_investasi.php"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
            </div>
            <!-- Admin-->
            <div id="sidebarAdmin" style="display: none;">
              <a href=""> <li style="margin-top: 10%;" class="list-group-item "><i class="fas fa-user"></i>Kelola Pengguna</li></a>
              <a href=""> <li class="list-group-item"><i class="fas fa-newspaper" ></i>Seaweed Article</li></a>
              <a href=""> <li class="list-group-item "><i class="fas fa-shopping-cart" ></i>Seaweed Mart</li></a>
              <a href=""> <li class="list-group-item active"><i class="fas fa-dollar-sign" ></i>Seaweed Invest</li></a>
            </div>
            <!-- koperasi -->
            <div id="sidebarKoperasi" style="display: none;">
              <a href=""> <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
            </div>
            
            <!-- UMKM -->
           <div id="sidebarUMKM">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item "><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/tambahProduk');?>"> <li class="list-group-item active"><i class="fa fa-plus"></i>Tambah Produk</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/produk');?>"> <li class="list-group-item "><i class="fa fa-box-open"></i>Kelola Produk</li></a>
                </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Tambah Produk</h4>
              
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-4 editProdukUMKM" style="text-align: center;">
                  
                  
                  <form action="#" method="POST">
                    <br>
                    <div class="upload-btn-wrapper">
                      <button class="btn">Pilih gambar</button>
                      <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png">
                    </div>
                  </div>
                  
                  <div class="col-md-8 text-left editProdukUMKM">
                    <div class="row">
                      <h6>Nama Produk:
                      <input type="text" name="namaProduk" class="form-control">
                      </h6>
                      <h6>Harga:
                      <input type="text" name="hargaProduk" class="form-control">
                      
                      </h6>
                    </div>
                    <div class="row">
                      
                      <h6>Stok:
                      <input type="text" name="stokProduk" class="form-control">
                      
                      </h6>
                      <h6>Detail Produk:
                      <textarea form="" name="detailProduk" class="form-control"></textarea>
                      
                      </h6>
                    </div>
                   
                    <br>
                    
                    <button type="submit" class="btn btn-outline-primary" style="width: 25%; margin-left: 25%;">Tambah</button>
                    
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