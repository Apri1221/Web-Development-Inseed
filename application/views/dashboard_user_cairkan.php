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
            <li class="list-group-item judulMenuDashboard" style="background-color: green;">USER DASHBOARD</li>
            <a href="dashboard.php" > <li style="margin-top: 10%;" class="list-group-item "><i class="fas fa-user" ></i>Profilku</li> </a>
            <a href="dashboard_user_cairkan.php"> <li class="list-group-item active"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
            <a href="dashboard_user_pesanan.php"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
            <a href="dashboard_user_investasi.php"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
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