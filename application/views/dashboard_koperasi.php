<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
  </head>
  <body style="background-color:#F5F5F5">

    <?php include_once("template/navbar.php"); ?>

    <section id="headerDashboard">
    <div id="loading"></div>
      <div class="col-md-12">
        
      </div>
    </section>
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
      <div class="row">
        <div class="col-md-3" >
          <ul class="list-group menuDashboard" >
            <!-- User -->
            <li class="list-group-item judulMenuDashboard" style="background-color: #167c85;">KOPERASI</li>
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
            <div id="sidebarKoperasi">
              <a href=""> <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
            </div>
            
            <!-- UMKM -->
            <div id="sidebarUMKM" style="display: none;" >
              <a href=""> <li style="margin-top: 10%;" class="list-group-item"><i class="fa fa-box-open"></i>Kelola Produk</li></a>
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Kelola Proyek</h4>
              <h6> Kelola & tambahkan proyek anda di sini</h6>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12" style="text-align: left;">
                  <a href="dashboard_admin_tambahArtikel.php" class="btn btn-primary" style="margin-bottom: 5%;">Tambah Proyek</a>
                  <div class="table-responsive" >
                    <table class="table table-striped">
                      <thead>
                        <tr class="headerKeranjang">
                          <th scope="col">ID</th>
                          <th scope="col" class="text-center">Nama Proyek </th>
                          <th scope="col" class="text-left">Lokasi Proyek</th>
                          <th scope="col" class="text-left">Tanggal Mulai</th>
                          <th scope="col" class="text-left">Tanggal Selesai</th>
                          <th scope="col" class="text-left">Nominal Dana Sementara</th>
                          <th scope="col" class="text-left">Edit</th>
                          <th scope="col" class="text-left">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="produkKeranjang">
                          <td>0001</td>
                          <td>Proyek Sumenep</td>
                          <td>Sumenep</td>
                          <td>31/12/18</td>
                          <td>1/01/19</td>
                          <td>Rp 25.000.000
                            <td class="text-left"><button class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> </button> </td>
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