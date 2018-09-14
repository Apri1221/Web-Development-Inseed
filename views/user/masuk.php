@extends('master')

@section('content')


  <body style="background:url(image/petani/bg.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
    
    <section id="login Page">
      <div class = "container">
        <div class="col-md-6 col-sm-12 col-xs-12" style="margin: 10% auto;">
          <div class ="card" id="cardLogin">
            <div class="card-body">
              <h2 style="text-align: center;">Masuk Ke inseed.id</h2>
              <form action="insert.php" method="POST" class="col-md-10 col-sm-10 col-xs-10" style="float: left;">
                <div class="form-group" >
                  <input type="email" class="form-control" placeholder="Email" name="email" >
                  <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <button type="submit" class="btn btn-outline-primary">Masuk</button>
              </form>
            </div>
            <div class="col-md-12" style="text-align: center;">
              <a href="#"><h6>Lupa Password?</h6></a>
              <h6 id="daftarNow" style="">Belum memiliki akun? <a href="{{URL::to('daftar')}}">Daftar Sekarang!</a></h6>
            </div>
          </div>
        </div>
      </div>
    </section>