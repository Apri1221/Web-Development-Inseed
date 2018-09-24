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
                  <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
                </div>      
            <?php elseif($this->session->userdata('level') === '2'):?>
                style="background-color: #167c85;">KOPERASI DASHBOARD</li>
                <!-- koperasi -->
                <div id="sidebarKoperasi">
                  <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
                  <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item active"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/kelolaProyek'); ?>"> <li class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
                  <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
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

              <form action="<?=base_url()?>index.php/auth/cairkan" method="POST">

              <input type="hidden" name="nominalAwal" value="<?php echo $result->saldo; ?>">
              <input type="hidden" name="tglTarik" value="
              <?php 
                  date_default_timezone_set('Asia/Jakarta');
                  $date = date("Y-m-d");  
                  echo $date; ?>">
              
              <div class="row">
                <div class="col-md-5" style="text-align: center;">
                  <h5 style="margin-top: 20%;">Saldo Anda: <span>Rp <?php echo $result->saldo; ?>,-</span></h5>
                  <?php if($result->saldo <= 100000): ?>
                    <p>Waduh kamu butuh pemasukan, kami akan bantu!</p>
                    <br>
                    <a href="<?php echo base_url ('index.php/Invest'); ?>" class="shiny-btn" >Klik Disini</a>
                  <?php else: ?>
                    <p>Sepertinya kamu cakap dalam berinvestasi, ayo tingkatkan lagi!</p>
                    <br>
                    <a href="<?php echo base_url ('index.php/Invest'); ?>" class="orange-btn" >Klik Disini</a>
                  <?php endif; ?>
                </div>
                
                <div class="col-md-7 text-left editProfile">
                  <h6>Jumlah Penarikan Dana (Minimal Rp 50.000)</h6>
                  <input type="number" name="nominal" class="form-control" placeholder="Nominal kurang dari <?php echo $result->saldo; ?>" max="<?php echo $result->saldo; ?>" min="50000">
                  <br>

                  <h6>Pilih Bank</h6>
                  <select class="form-control" id="jenisBank" name="bank">
                    <option value="Mandiri">Mandiri</option>
                    <option value="BRI">BRI</option>
                    <option value="BNI">BNI</option>
                    <option value="BCA">BCA</option>
                  </select>
                  
                  <br>
                  <h6>Masukkan Nomor Rekening</h6>
                  <input type="text" name="norek" class="form-control">
                  
                  <br>

                  <h6>Password</h6>
                    <input type="password" id="pw1" name="pw1" class="form-control" autocomplete="off" required minlength="8"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    
                    <br>
                    <h6>Konfirmasi Password</h6>
                    <input type="password" id="pw2" class="form-control" required minlength="8"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                    
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
                  
                  <button type="submit" class="btn btn-outline-primary" 
                  <?php if((int)$result->saldo < '50000'): ?>
                  disabled 
                  <?php endif;?>
                  style="width: 25%; margin-left: 10%;">Proses</button>
                  
                  <?php if(null !== $this->session->userdata('bank')): ?>
                  <a type="submit" class="btn btn-outline-success" style="-webkit-appearance:none;" target="_blank" href="<?php echo base_url ('index.php/Laporan/');?>">Cetak Invoice</a>
                  <?php endif;?>

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