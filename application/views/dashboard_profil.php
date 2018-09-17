<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
  </head>
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>
    <!-- ISI NAVBAR DISINI YA!!!! -->
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
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/investasi');?>"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
                </div>      
            <?php elseif($this->session->userdata('level') === '1'):?>
                style="background-color: grey;">ADMIN DASHBOARD</li>
                <!-- Admin-->
                <div id="sidebarAdmin">
                  <a href=""> <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user active"></i>Kelola Pengguna</li></a>
                  <a href=""> <li class="list-group-item"><i class="fas fa-newspaper" ></i>Seaweed Article</li></a>
                  <a href=""> <li class="list-group-item"><i class="fas fa-shopping-cart" ></i>Seaweed Mart</li></a>
                  <a href=""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Seaweed Invest</li></a>
                </div>
            <?php elseif($this->session->userdata('level') === '2'):?>
                style="background-color: grey;">KOPERASI DASHBOARD</li>
                <!-- koperasi -->
                <div id="sidebarKoperasi">
                  <a href="dashboard.php" > <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="dashboard_user_cairkan.php"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href=""> <li class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
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
                  
                  <form action="<?=base_url()?>index.php/auth/update" method="POST">
                    <input type="hidden" name="username1" value="<?php echo $this->session->userdata('username'); ?>" name="id_i">
                    <div class="upload-btn-wrapper">
                      <button class="btn">Pilih gambar</button>
                      <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png">
                    </div>
                  </div>
                  
                  <div class="col-md-7 text-left editProfile">
                    <h6>Nama:
                    <input type="text" id="account" name="account" class="form-control" pattern="^[A-Za-z0-9_]{1,15}$" maxlenght="15"
                    oninvalid="this.setCustomValidity('Data tidak boleh kosong atau mengandung spasi')" oninput="setCustomValidity('')" placeholder="Nama Anda">
                    
                    </h6>
                    <br>
                    <h6>Email:
                    <input type="email" id="email" name="email" class="form-control" pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}"
                    oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')" placeholder="EmailAnda@email.com">
                    
                    </h6>
                    <br>
                    <h6>No. Telepon:
                    <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]+" required minlength="8" maxlenght="13"
                    oninvalid="this.setCustomValidity('Input hanya boleh angka!')" oninput="setCustomValidity('')" placeholder="Nomor Telepon/HP Anda">
                    
                    </h6>
                    <br>

                    <h6>Password:
                    <input type="password" id="pw1" name="pw1" class="form-control" required minlength="8"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    
                    </h6>
                    <br>
                    <h6>Konfirmasi Password:
                    <input type="password" id="pw2" class="form-control" required minlength="8"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    
                    </h6>
                    <script type="text/javascript">
                    window.onload = function () {
                    document.getElementById("pw1").onchange = validatePassword;
                    document.getElementById("pw2").onchange = validatePassword;
                    }
                    function validatePassword(){
                    var pass2=document.getElementById("pw2").value;
                    var pass1=document.getElementById("pw1").value;
                    if(pass1!=pass2)
                    document.getElementById("pw2").setCustomValidity("Passwords Tidak Sama, Coba Lagi");
                    else
                    document.getElementById("pw2").setCustomValidity('');
                    }
                    </script>
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