<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
  </head>
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>
    
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>

    <section id="headerDashboard">
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
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Kelola Artikel inseed.id</h4>
              <h6> Kelola semua artikel di inseed.id</h6>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12" style="text-align: left;">
                  <a href="dashboard_admin_tambahArtikel.php" class="btn btn-primary" style="margin-bottom: 5%;">Tambah Artikel</a>
                  <div class="table-responsive"  style="max-height: 250px;">
                    <table class="table table-striped">
                      <thead>
                        <tr class="headerKeranjang">
                          <th scope="col">ID</th>
                          <th scope="col" class="text-center">Judul </th>
                          <th scope="col" class="text-left">Tanggal Terbit</th>
                          <th scope="col" class="text-left">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="produkKeranjang">
                          <td>0001</td>
                          <td>Ditemukan tambak rumput laut di sidoarjo</td>
                          
                          <td>31/12/18</td>
                          
                          <td class="text-left"><button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </button> </td>
                        </tr>
                        <tr class="produkKeranjang">
                          <td>0002</td>
                          <td>Manfaat Rumput Laut</td>
                          
                          <td>31/12/18</td>
                          
                          <td class="text-left"><button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </button> </td>
                        </tr>
                        <tr class="produkKeranjang">
                          <td>0003</td>
                          <td>Sumber rumput laut alami</td>
                          
                          <td>31/12/18</td>
                          
                          <td class="text-left"><button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </button> </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                
                
              </div>
            </div>
          </div>
        </div>
      </body>
    </html>