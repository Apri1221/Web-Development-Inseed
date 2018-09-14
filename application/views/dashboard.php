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
          <!-- User -->
          <li class="list-group-item judulMenuDashboard" style="background-color: green;">USER DASHBOARD</li>
          <div id="sidebarUser">
            <a href="dashboard.php" > <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user" ></i>Profilku</li> </a>
            <a href="dashboard_user_cairkan.php"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
            <a href="dashboard_user_pesanan.php"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
            <a href="dashboard_user_investasi.php"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
          </div>
          <!-- Admin-->
          <div id="sidebarAdmin" style="display: none;">
            <a href=""> <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user"></i>Kelola Pengguna</li></a>
            <a href=""> <li class="list-group-item"><i class="fas fa-newspaper" ></i>Seaweed Article</li></a>
            <a href=""> <li class="list-group-item"><i class="fas fa-shopping-cart" ></i>Seaweed Mart</li></a>
            <a href=""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Seaweed Invest</li></a>
          </div>
          <!-- koperasi -->
          <div id="sidebarKoperasi" style="display: none;">
            <a href=""> <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
          </div>
          
          <!-- UMKM -->
          <div id="sidebarUMKM" style="display: none;">
            <a href=""> <li style="margin-top: 10%;" class="list-group-item"><i class="fa fa-box-open"></i>Kelola Produk</li></a>
          </div>
          
        </ul>
      </div>
      <div class="col-md-9">
        <div class="card">
          <div class="card-header" style="background-color: white;">
            <h4 style="font-weight: bold;"> Profilku</h4>
            <h6> Kelola informasi akun anda disini</h6>
          </div>
          <div class="card-body ">
            <div class="row">
              <div class="col-md-5" style="text-align: center;">
                <img src="assets/image/boy.png" class="profilePictureDashboard">
                
                <form action="#" method="POST">
                  
                  <div class="upload-btn-wrapper">
                    <button class="btn">Pilih gambar</button>
                    <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png">
                  </div>
                </div>
                
                <div class="col-md-7 text-left editProfile">
                  <h6>Nama:
                  <input type="text" id="account" class="form-control" pattern="^[A-Za-z0-9_]{1,15}$" maxlenght="15"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong atau mengandung spasi')" oninput="setCustomValidity('')" value="Julian" >
                  
                  </h6>
                  <br>
                  <h6>Email:
                  <input type="email" id="email" class="form-control" pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" value="timothy_julian@ymail.com">
                  
                  </h6>
                  <br>
                  <h6>No. Telepon:
                  <input type="tel" id="phone" class="form-control" pattern="[0-9]+" required minlength="8" maxlenght="13"
                  oninvalid="this.setCustomValidity('Input hanya boleh angka!')" oninput="setCustomValidity('')" value="08777xxx">
                  
                  </h6>
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