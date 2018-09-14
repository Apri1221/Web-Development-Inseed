<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="assets/image/icon/icon.png">
    <title>inseed.id - Keranjang</title>
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
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="Keranjang">
      
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="table-responsive" style="margin-top: 2%;">
              <table class="table table-striped">
                <thead>
                  <tr class="headerKeranjang">
                    <th scope="col"> Foto Produk</th>
                    <th scope="col" style="width: 25%;">Nama Produk</th>
                    
                    <th scope="col" class="text-center">Jumlah</th>
                    <th scope="col" class="text-right">Harga</th>
                    <th scope="col" class="text-right">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="produkKeranjang">
                    <td><img src="assets/image/petani/petani1.jpg"/> </td>
                    <td>Rumput laut X</td>
                    
                    <td><input class="form-control" type="text" value="1" /></td>
                    <td class="text-right">Rp 40.000</td>
                    <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                  </tr>
                  <tr class="produkKeranjang">
                    <td><img src="assets/image/petani/petani2.jpg" /> </td>
                    <td>Rumput laut Y</td>
                    
                    <td><input class="form-control" type="text" value="1" /></td>
                    <td class="text-right">Rp 25.000</td>
                    <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                  </tr>
                  <tr class="produkKeranjang">
                    <td><img src="assets/image/petani/petani3.jpg" /> </td>
                    <td>Rumput laut Z</td>
                    
                    <td><input class="form-control" type="text" value="1" /></td>
                    <td class="text-right">Rp 35.000</td>
                    <td class="text-right"><a href="#" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                  </tr>
                  
                </tbody>
              </table>
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
            <h6>Subtotal (3 item): <span class="subtotalKeranjang">Rp 100.000</span></h6>
            <h6 class="biayaPengirimanKeranjang">Biaya Pengiriman: <span>Rp 5.000</span></h6>
            <h4>Total: <span class="totalHargaKeranjang">Rp 105.000</span></h6>
            <br>
            <a href="#" class="buttonBuatPesananKeranjang">Lanjut Ke Pembayaran</a>
          </div>
        </div>
      </div>
    </section>
    <?php include_once("template/footer.php"); ?> 