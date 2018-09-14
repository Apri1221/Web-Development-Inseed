@extends('master')

@section('content')


    <section id="Keranjang">
      <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header">
        <h2>Keranjang <b>Belanja</b></h2>
      </div>
      <div class="container-fluid">
        <div class="row indikatorKeranjang">
          <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 kontenIndikatorKeranjang">
            <div class="row" style="padding:1% 0;">
              <div class="col-xl-5 col-md-5 col-sm-5 col-xs-5">
                <h6>Produk</h6>
              </div>
              <div class="col-xl-3 col-md-2 col-sm-2 col-xs-2">
                <h6>Harga</h6>
              </div>
              <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2">
                <h6>Kuantitas</h6>
              </div>
              <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2">
                <h6>Aksi</h6>
              </div>
            </div>
          </div>
        </div>
        <div class="row strukturKeranjang">
          <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 keranjangTengah">
            <div class="row">
              <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 keranjangTengahPenjual">
                <h6 class="namaPenjualKeranjang"><i class="fas fa-store" style="margin-right: 1%;"></i>Nama Penjual</h6>
              </div>
              <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 keranjangTengah" >
                <div class="row">
                  <div class="col-xl-5 col-md-5 col-sm-5 col-xs-5">
                    <div class="row">
                      <div class="col-xl-6 col-md-6 col-sm-8 col-xs-8">
                        <img src="assets/image/petani/petani1.jpg" class="fotoProdukKeranjang" >
                      </div>
                      <div class="col-xl-6 col-md-6 col-sm-4 col-xs-4" style="margin-top: 8%;">
                        <h6>Rumput laut NaruTOP</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2 kontenKeranjangTengah" >
                    <h6>Rp 100.000</h6>
                  </div>
                  <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2 kontenKeranjangTengah" >
                    <h6>1 pcs</h6>
                  </div>
                  <div class="col-xl-2 col-md-2 col-sm-2 col-xs-2 kontenKeranjangTengah">
                    <a href="#">Batalkan Pesanan</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row keranjangBawah">
          <div class="col-xl-6 col-md-6 col-sm-6 col-xs-6 pengirimanProdukKeranjang">
            <h4>Pengiriman Produk</h4>
            <h6 style="color: grey;">Pengiriman ke</h6>
            <h6>Timothy Julian</h6>
            <h6>Danau Bogor Raya Blok I-5 No.9, Bogor, Jawa Barat 16155</h6>
            <h6>+6287778174700</h6>
          </div>
          <div class="col-xl-5 col-md-5 col-sm-5 col-xs-5 ringkasanPesananKeranjang" >
            <h4>Ringkasan Pesanan</h4>
            <h6>Subtotal (1 item): <span style="margin-left: 2%; font-weight: bold;">Rp 100.000</span></h6>
            <h6 style="border-bottom: 1px solid grey; padding-bottom: 2%;">Biaya Pengiriman: <span style="margin-left: 2%; font-weight: bold;">Rp 5.000</span></h6>
            <h4>Total: <span class="totalHargaKeranjang">Rp 105.000</span></h6>
            <br>
            <a href="#" class="buttonBuatPesananKeranjang">Buat Pesanan</a>
          </div>
        </div>
      </div>
    </section>

    