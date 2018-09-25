<!DOCTYPE html>
<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Login</title>
    
  </head>
  <body>
    <div id="loading"></div>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="signup Page" >
      <div
        <?php if ($user_level == '0'):?>
          class="headSignUpOrange">
        <?php elseif ($user_level == '2'):?>
          style="background-color: #116d1d;
          height: 50%;
          color: white;
          text-align: center;
          padding: 7%;">
        <?php else: ?>
          class="headSignUp">
        <?php endif; ?>
        <h1>
        <?php
        if ($user_level == '3'){
          echo "Kamu sebagai UMKM, silahkan isi data diri disini";
        } else if ($user_level == '2') {
          echo "Selamat datang pengurus koperasi, silakan isi data anda di sini";
        } else {
          echo "Hai, masukkan data pada kolom tersedia!";
        }
        ?>
        </h1>
        <h5>Daftarkan akun anda secara gratis!</h5>
      </div>
      <div class = "container">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
          <div class ="card" id="cardDaftar">
            <div class="card-body" id="abu">
              <h5 style="text-align: center;">Hai, masukkan data pada kolom tersedia!</h5><br>
              <form action="<?php echo base_url()."index.php/auth/register"?>" method="POST" class="col-md-12 col-sm-12 col-xs-12" style="float: left;">
                <div class="form-group">
                  <input type="hidden" name="user_level" value="<?php echo $user_level ?>">
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
                  <label class="form-control-placeholder-1" for="account">Konfirmasi Password</label>
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