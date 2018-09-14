@extends('master')

@section('content')


    <section id="pendahuluan">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-xs-12" >
            <img src="image/logo.png">
            <h2>Invest Seaweed in Indonesia</h2>
            <p>inseed.id merupakan website yang mewadahi masyarakat untuk ikut berkontribusi pada budidaya rumput laut di Indonesia melalui cara investasi. Dengan ini, masyarakat secara tidak langsung ikut meningkatkan kesejahteraan para petani rumput laut dengan memberikan bantuan berupa modal sehingga petani dapat memiliki kekuatan tawar menawar yang tinggi di pasar.  </p>
            <p>inseed.id juga membantu membuka potensi produk rumput laut dari bahan mentah menjadi hasil olahan yang bervariatif dengan cara memasarkan hasil produksi para UMKM kepada masyarakat umum untuk bisa melihat dan membelinya. Dengan demikian, inseed.id diharapkan dapat membawa inovasi teknologi yang positif bagi para petani maupun masyarakat.</p>
          </div>
        </div>
      </div>
    </section>
    <section id="fitur">
      <div class="container-fluid">
        <div class="row cyan-background">
          <div class="col-lg-12 col-xs-12">
            <div class="col-lg-4 col-sm-12 fitur-right-side">
              <img src="Assets/Fakultas/logo_ub.png" class="fitur-img">
            </div>
            <div class="col-lg-8 col-sm-12 fitur-left-side text-fitur-white">
              <h2 class="text-fitur-title">Seaweed Invest</h2>
              <p class="text-fitur-content">fitur utama kami adalah menyediakan tempat bagi masyarakat untuk membantu para petani rumput laut di Indonesia dengan cara menginvestasikan sejumlah uangnya agar dikelola oleh para petani serta menjadi tempat masyarakat belajar berinvestasi sejak dini. Dalam berinvestasi, kami menggunakan sistem bagi hasil, dimana para investor dan petani rumput laut akan mendapat hasil keuntungan maupun kerugian yang akan ditanggung bersama di akhir proyek sesuai dengan kesepakatan. </p>
            </div>
          </div>
        </div>
        <div class="row white-background">
          <div class="col-lg-12 col-xs-12">
            <div class="col-lg-4 col-sm-12 fitur-left-side">
              <img src="Assets/gembok.png" class="fitur-img">
            </div>
            <div class="col-lg-8 col-sm-12 fitur-right-side text-fitur-cyan">
              <h2 class="text-fitur-title">Seaweed Mart</h2>
              <p class="text-fitur-content">Pada website inseed.id, kami menyediakan tempat untuk para UMKM yang mengelola dan menjual produk-produk hasil olahan rumput laut untuk memasarkan produk nya di website kami sehingga dapat menjangkau pasar yang lebih luas lagi. Untuk keamanan transaksi juga dapat dijamin dengan adanya sistem pembayaran menggunakan rekening bersama, dimana dana yang dibayarkan oleh pembeli akan diterima terlebih dahulu oleh pihak inseed.id dan setelah itu diteruskan ke penjual setelah pembeli menerima produknya dengan baik..</p>
            </div>
          </div>
        </div>
        <div class="row cyan-background">
          <div class="col-lg-12 col-xs-12">
            <div class="col-lg-4 col-sm-12 fitur-right-side">
              <img src="Assets/Motor-Ojek.png" class="fitur-img">
            </div>
            <div class="col-lg-8 col-sm-12 fitur-left-side text-fitur-white">
              <h2 class="text-fitur-title">Seaweed Article</h2>
              <p class="text-fitur-content">Kami juga menyediakan halaman khusus yang memuat artikel - artikel mengenai rumput laut agar menambah wawasan para pengunjung terhadap manfaat dan potensi rumput laut di Indonesia, keanekaragaman rumput laut Indonesia, dan informasi menarik lainnya.</p>
            </div>
          </div>
        </div>
        <div class="row white-background">
          <div class="col-lg-12 col-xs-12">
            <div class="col-lg-4 col-sm-12 fitur-left-side">
              <img src="Assets/home.png" class="fitur-img">
            </div>
            <div class="col-lg-8 col-sm-12 fitur-right-side text-fitur-cyan">
              <h2 class="text-fitur-title">Dashboard User</h2>
              <p class="text-fitur-content">Setiap pengguna yang telah terdaftar pada website inseed.id akan memiliki halaman dashboard yang di dalamnya terdapat pusat pengelolaan produk yang ingin dijual, status pesanan dan pengiriman, riwayat produk yang telah dibeli, serta informasi mengenai perkembangan proyek yang telah diinvestasikan sebelumnya.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    @include('components.footer')