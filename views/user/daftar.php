@extends('master')

@section('content')


    <section id="signup Page" >
      <div class="headSignUp">
        <h1>YUK GABUNG KITA SEKARANG!</h1>
        <h5>Daftarkan akun anda secara gratis!</h5>
      </div>
      
      <div class = "container">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
          <div class ="card" id="cardDaftar">
            <div class="card-body" id="abu">
              <h5 style="text-align: center; padding: 2%; ">Hai, masukkan data pada kolom tersedia!</h5><br>
              <form role="form" method="POST"> 
                <div class="form-group col-md-12 col-sm-12 col-xs-12" style="float: left;">
                  <input type="text" class="form-control" placeholder="Nama Depan" name="firstname" required="required">
                  <input type="text" class="form-control" placeholder="Nama Belakang" name="lastname">
                  <input type="date" class="form-control" name="birthday" min="1980-01-01" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" width="20"/>
                  <select class="form-control" id="JenisKelamin" required="required">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                  </select>
                  <input type="text" class="form-control" placeholder="Nama Akun" name="account" required="required">
                  <input type="email" class="form-control" placeholder="Email" name="email" required="required">
                  <input type="password" class="form-control" placeholder="Password" name="password" id="pw1">
                  <input type="password" class="form-control" placeholder="Ulangi Password" name="password2" id="pw2">
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
                  <input type="text" class="form-control" placeholder="No. Handphone" name="phone">
                  <p style="text-align: justify;">
                    Dengan menekan Daftar Sekarang, saya mengonfirmasi telah menyetujui <a href="#">Syarat dan Ketentuan</a>, serta <a href="#">Kebijakan Privasi</a> inseed.id</p>
                  <div class="col-xl-12 col-md-12 col-xs-12 col-sm-12" style="text-align: center;">
                    <button type="submit" class="btn btn-outline-primary" style="padding: 2% 20%; margin: 5% 0">DAFTAR SEKARANG</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </section>

    @include('components.footer')