<!DOCTYPE html>
<html>
<head>
   <link rel="icon" href="assets/image/icon/icon.png">
  <title>inseed.id -  Daftar</title>
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
</head>

<body>
<div id="loading"></div>
  <section id="header">
<nav class="navbar navbar-expand-lg navbar-light bg-white" >
 <a href="{{URL::to('welcome')}}"><img src="assets/image/logo.png" style=" padding: 0 20px 0 20px;
    height: 75px;
    width: 250px;"></a> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
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
        <form action="insert.php" method="POST" class="col-md-12 col-sm-12 col-xs-12" style="float: left;">
  <div class="form-group">
     <label class="form-control-placeholder-1" for="firstname">Nama depan</label>
  <input type="text" id="firstnane" class="form-control" required pattern="[a-zA-Z]"
  oninvalid="this.setCustomValidity('Data tidak boleh kosong dan hanya boleh berisi abjad')" oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label class="form-control-placeholder-1" for="lastname">Nama belakang</label>
  <input type="text" id="laststname" class="form-control" required pattern="[a-zA-Z]"
  oninvalid="this.setCustomValidity('Data tidak boleh kosong dan hanya boleh berisi abjad')" oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label class="form-control-placeholder-1" for="Tgl_lahir">Tanggal Lahir</label>
	<input type="date" class="form-control" name="birthday" min="1980-01-01" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"/>
</div>
<label class="form-control-placeholder-1" for="JK">Jenis Kelamin</label>
      <select class="form-control" id="JenisKelamin">
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
   </select>
   <div class="form-group">
    <label class="form-control-placeholder-1" for="account">Nama akun</label>
  <input type="text" id="account" class="form-control" pattern="^[A-Za-z0-9_]{1,15}$" maxlenght="15" required
  oninvalid="this.setCustomValidity('Data tidak boleh kosong atau mengandung spasi')" oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
      <label class="form-control-placeholder-1" for="account">Email</label>
  <input type="email" id="email" class="form-control" pattern="[^ @]*@[^ @]*.[a-zA-Z]{2,}" required
  oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label class="form-control-placeholder-1" for="account">Password</label>
  <input type="password" id="pw1" class="form-control" required minlength="8"
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
  <input type="tel" id="phone" class="form-control" pattern="[0-9]+" required minlength="8" maxlenght="13"
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
  <section id="contact-us">
        <div class="container">
          <div class="row">
           <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 logo_footer">
               <a href="index.php"><img src="assets/image/logo.png" style="width: 280px; height: auto;"></a>
               <h6 >Invest Seaweed in Indonesia</h6>
           </div>
        <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 contact" style="text-align: center; ">
               <h4>CONTACT US</h4>
               <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Address: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6> Universitas Brawijaya, Kota Malang, Jawa Timur 61553</h6>
               </div>
            </div>
              <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Phone: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6>08561729xx (Apri)</h6>
               </div>
            </div>
           <div class="row">
               <div class="col-xl-4 col-md-4 col-sm-6 col-xs-6">
                 <h6><b>Email: </b></h6>
               </div>
               <div class="col-xl-8 col-md-8 col-sm-6 col-xs-6">
                  <h6>inseed@ub.ac.id</h6>
               </div>
            </div>
             
           </div>
              <div class="col-xl-4 col-md-12 col-sm-12 col-xs-12 socialmedia" style="text-align: center;">
                <h4>OUR SOCIAL MEDIA</h4>
              <span class="fab fa-facebook-square fa-3x socmed-icon"></span><span class="fab fa-twitter-square fa-3x socmed-icon"></span><span class="fab fa-instagram fa-3x socmed-icon"></span>
           </div>
          </div> 
      </div>
      </section>
</body>
