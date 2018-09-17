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
            <!-- User -->
            <li class="list-group-item judulMenuDashboard" 
            <?php if($this->session->userdata('level') === '0'):?>
                style="background-color: green;">USER DASHBOARD</li>
                <div id="sidebarUser">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item active"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/investasi');?>"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
                </div>      
            <?php elseif($this->session->userdata('level') === '2'):?>
                style="background-color: #167c85;">KOPERASI DASHBOARD</li>
                <!-- koperasi -->
                <div id="sidebarKoperasi">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item active"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/kelolaProyek'); ?>"> <li class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
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
              <h4 style="font-weight: bold;"> Cairkan Dana</h4>
              <h6> Cairkan dana hasil investasi ke rekening anda</h6>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-5" style="text-align: center;">
                  <h5 style="margin-top: 50%;">Saldo Anda: <span>Rp 100.000</span></h5>
                </div>
                
                <div class="col-md-7 text-left editProfile">
                  <h6>Jumlah Penarikan Dana (Minimal Rp 50.000)
                  <input type="text" name="nominal" class="form-control">
                  </h6>
                  <br>
                  <h6>Pilih Bank
                  <select class="form-control" id="jenisBank">
                    <option value="Mandiri">Mandiri</option>
                    <option value="BRI">BRI</option>
                    <option value="BNI">BNI</option>
                    <option value="BCA">BCA</option>
                  </select>
                  
                  </h6>
                  <br>
                  <h6>Masukkan Nomor Rekening:
                  <input type="text" name="norek" class="form-control">
                  
                  </h6>
                  <br>
                  
                  
                  <button type="submit" class="btn btn-outline-primary" style="width: 25%; margin-left: 25%;">Proses</button>
                  
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