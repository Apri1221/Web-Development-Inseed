<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>inseed.id - Seaweed Article</title>
    <!-- fevicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php include_once('components.header'); ?>
  </head>
  <body>

    <section class="cd-auto-hide-header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white" id="header">
        <a href="index.php"><img src="image/logo.png" style=" padding: 0 10px 0 10px;
          height: 55px;
        width: 200px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto" id="cd-navigation">
            <li class="nav-item active">
              <a class="nav-link" href="{{URL::to('beranda')}}">HOME</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('invest')}}">SEAWEED INVEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('mart')}}">SEAWEED MART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('artikel')}}">SEAWEED ARTICLE <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL::to('tentang')}}">TENTANG KAMI</a>
            </li>

            @if (Route::has('login'))
                @auth
                  <li class="nav-item dropdown hidden-md-down">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      AKUN</a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Pengaturan</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Keluar') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                    </div>
                  </li>
                @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{URL::to('login')}}">MASUK</a>
                    </li>
                 @endauth
            @endif

            
          </ul>
        </div>
      </nav>
    </section>
    <?php include_once() ?>

  </body>
</html>