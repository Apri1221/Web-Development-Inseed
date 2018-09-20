<!DOCTYPE html>
<html>
  <head>
    <?php include_once("template/header.php"); ?>
    <link rel="icon" href="assets/image/icon/icon.png">
    <title>inseed.id - Keranjang</title>
  </head>
  <body>
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <div class="col-xl-12 col-md-12 col-sm-12 col-xs-12 header text-center">
      <h2>Keranjang <b>Belanja Anda</b></h2>
    </div>
    <section id="Keranjang" style="margin: 3%; margin-bottom: 10%;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">
            <div class="table-responsive" style="margin-top: 2%;">
              <table class="table table-striped">
                <thead>
                  <tr class="headerKeranjang">
                    <th scope="col" style="width: 10%;" class="text-center"> No</th>
                    <th scope="col" style="width: 40%;" >Nama Produk</th>
                    <th scope="col" style="width: 15%;" >Jumlah</th>
                    <th scope="col" style="width: 20%;" class="text-center">Harga</th>
                    <th scope="col" style="width: 20%;" class="text-center">Hapus</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $i=0;
                    foreach ($this->cart->contents() as $items) :
                    $i++;
                  ?>
                  <tr class="produkKeranjang">
                    
                    <td class="text-center"><?php echo $i ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><input class="form-control" type="text" value="<?php echo $items['qty'] ?>" /></td>
                    <td class="text-center">Rp <?php echo $items['price'] ?></td>
                    <td class="text-center"><a href="<?=base_url()?>index.php/cart/update_cart/<?php echo $items['rowid'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                    <?php endforeach; ?>
                    <br>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row keranjangBawah">
          <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4 ringkasanPesananKeranjang text-center" >
            <h4>Ringkasan Pesanan</h4>
            <h6>Jumlah barang : <span class="subtotalKeranjang"><?php echo $this->cart->total_items();?> item</span></h6>
            <h4>Total: <span class="totalHargaKeranjang">Rp <?php echo $this->cart->total(); ?></span></h6>
            <a href="<?=base_url()?>index.php/mart/bayar" class="btn btn-success btn-lg btn-block text-uppercase" style="margin-top: 10%;">
              <i class="fas fa-money-bill-alt"></i> Beli Sekarang
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php include_once("template/footer.php"); ?>
  </body>
</html>