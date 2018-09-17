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
              <a href=""> <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user"></i>Kelola Pengguna</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaUser');?>"> <li class="list-group-item"><i class="fas fa-newspaper" ></i>Buat Article</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaArticle');?>""> <li class="list-group-item"><i class="fas fa-shopping-cart" ></i>Kelola Article</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaProyek');?>""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Kelola Proyek</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaProduk');?>""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Kelola Produk</li></a>
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Kelola User Inseed.id</h4>
              <h6> Kelola semua data pengguna terdaftar inseed.id</h6>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12" style="text-align: center;">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="headerKeranjang">
                          <th scope="col">Username</th>
                          <th scope="col" >Nama </th>
                          <th scope="col" class="text-left">Email</th>
                          <th scope="col" class="text-left">Nomor Telepon</th>
                          <th scope="col" class="text-left">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="produkKeranjang">
                          <td>apri0498</td>
                          <td>Apriyanto</td>
                          
                          <td>timothy@yahoo.co.id</td>
                          <td class="text-left">0877781477</td>
                          
                          <td class="text-left"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        <tr class="produkKeranjang">
                          <td>tj_julian </td>
                          <td>Timothy</td>
                          
                          <td>julian@ymail.com</td>
                          <td class="text-left">081828238</td>
                          
                          <td class="text-left"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                        </tr>
                        <tr class="produkKeranjang">
                          <td>tj_julian98 </td>
                          <td>Julian</td>
                          
                          <td>inseed.id@ub.ac.id</td>
                          <td class="text-left">0828182828</td>
                          
                          <td class="text-left"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
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