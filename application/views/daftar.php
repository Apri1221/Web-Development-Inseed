<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="<?php echo base_url('asset/assets/image/icon/icon.png');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/css/jcarousel.responsive.js');?>"></script>
    <title>inseed.id - Login</title>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('asset/css/styleCSS.css');?>" rel="stylesheet">
  </head>
  <body>
    <div id="loading"></div>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="signup Page" >
      <div class="headSignUp">
        <h1>YUK GABUNG KITA SEKARANG!</h1>
        <h5>Daftarkan akun anda secara gratis!</h5>
      </div>
      <div class = "container">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
          <div class ="card" id="cardDaftar">
            <div class="card-body" id="abu">
              <h5 style="text-align: center;">Hai, masukkan data pada kolom tersedia!</h5><br>
              <form action="<?php echo base_url()."index.php/auth/register"; ?>" method="POST" class="col-md-12 col-sm-12 col-xs-12" style="float: left;">
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="firstname">Nama depan</label>
                  <input type="text" id="firstname" name="firstname" class="form-control" pattern="^[A-Za-z0-9_]{1,15}$" maxlenght="15" required
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong atau mengandung spasi')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="lastname">Nama belakang</label>
                  <input type="text" id="lastname" name="lastname" class="form-control" pattern="^[A-Za-z0-9_]{1,15}$" maxlenght="15" required
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong atau mengandung spasi')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="Tgl_lahir">Tanggal Lahir</label>
                  <input type="date" class="form-control" name="birthday" min="1980-01-01" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
                </div>
                <label class="form-control-placeholder-1" for="JK">Jenis Kelamin</label>
                <select class="form-control" id="JenisKelamin" name="JenisKelamin">
                  <option value="Pria">Pria</option>
                  <option value="Wanita">Wanita</option>
                </select>
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="account">Nama akun</label>
                  <input type="text" id="account" name="account" class="form-control" pattern="^[A-Za-z0-9_]{1,15}$" maxlenght="15" required
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong atau mengandung spasi')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="account">Email</label>
                  <input type="email" id="email" name="email" class="form-control" pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}" required
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="account">Password</label>
                  <input type="password" id="pw1" name="pw1" class="form-control" required minlength="8"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                  
                </div>
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="account">Ulangi Password</label>
                  <input type="password" id="pw2" class="form-control" required minlength="8"
                  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                  
                </div>
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
                <div class="form-group">
                  <label class="form-control-placeholder-1" for="account">No. Handphone</label>
                  <input type="tel" id="phone" name="phone" class="form-control" pattern="[0-9]+" required minlength="8" maxlenght="13"
                  oninvalid="this.setCustomValidity('Input hanya boleh angka!')" oninput="setCustomValidity('')">
                  
                </div>
                <p style="text-align: justify;">Dengan menekan Daftar Sekarang, saya mengonfirmasi telah menyetujui <a href="#" style="color: #12a8bb;">Syarat dan Ketentuan</a>, serta <a href="#" style="color: #12a8bb;">Kebijakan Privasi</a> inseed.id</p>
                <div class="col-xl-12 col-md-12 col-xs-12 col-sm-12" style="text-align: center;">
                  <button type="submit" class="btn btn-outline-primary" style="padding: 2% 20%; margin: 5% 0">DAFTAR SEKARANG</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </section>
    <?php include_once("template/footer.php"); ?> 
  </body>