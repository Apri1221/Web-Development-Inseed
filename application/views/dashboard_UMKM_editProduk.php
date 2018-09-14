<html>
  <head>
    <link rel="icon" href="assets/image/icon/icon.png">
    <title>inseed.id - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleCSS.css">
    <link rel="stylesheet" href="css/jcarousel.responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="js/jcarousel.responsive.js"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
    $("#loading").fadeOut("slow");
    });
    </script>
    <style type="text/css">
    .menuDashboard li:hover{
    background-color: #2890ff;
    }
    </style>
  </head>
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>
    <section id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style="  padding: 0 20px 0 20px;
          height: 75px;
        width: 250px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{URL::to('welcome')}}">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('invest')}}">SEAWEED INVEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('mart')}}">SEAWEED MART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('article')}}">SEAWEED ARTICLE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('about_us')}}">TENTANG KAMI</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('login')}}">MASUK</a>
            </li>
          </ul>
        </div>
      </nav>
    </section>
    <section id="headerDashboard">
      <div class="col-md-12">
        
      </div>
    </section>
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
      <div class="row">
        <div class="col-md-3" >
          <ul class="list-group menuDashboard" >
            <!-- User -->
            <li class="list-group-item judulMenuDashboard" style="background-color: #12a8bb;">UMKM</li>
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
              <a href=""> <li style="margin-top: 10%;" class="list-group-item active"><i class="fa fa-box-open"></i>Kelola Produk</li></a>
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
                    <div class="row">
                      <h6>Lokasi Produk
                      <input type="text" name="lokasiProduk" class="form-control">
                      
                      </h6>
                      <h6>Varian
                      <select class="form-control" id="varianProduk" name="varianProduk">
                        <option value="200 gram">200 Gram</option>
                        <option value="400 gram">400 gram</option>
                        
                      </select>
                      
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