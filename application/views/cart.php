<!DOCTYPE html>
<html>
  <head>
    <link rel="icon" href="assets/image/icon/icon.png">
    <title>inseed.id - Keranjang</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/bootstrap.css'?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link href="<?php echo base_url('asset/css/styleCSS.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('asset/css/jcarousel.responsive.js');?>"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" >
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('asset/css/jquery.jcarousel.min.js');?>"></script>
    <script src="js/jquery.jcarousel.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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
                    <th scope="col"> No</th>
                    <th scope="col" style="width: 25%;">Nama Produk</th>
                    <th scope="col" class="text-center">Jumlah</th>
                    <th scope="col" class="text-right">Harga</th>
                    <th scope="col" class="text-right">Hapus</th>
                  </tr>
                </thead>
                <tbody>
				
                  <tr class="produkKeranjang">
				  <?php 
					$i=0;
					foreach ($this->cart->contents() as $items) : 
					$i++;
				?>
                    <td><?php echo $i ?></td>
                    <td><?php echo $items['name'] ?></td>
                    <td><input class="form-control" type="text" value="<?php echo $items['qty'] ?>" /></td>
                    <td class="text-right">Rp <?php echo $items['price'] ?></td>
                    <td class="text-right"><a href="<?=base_url()?>index.php/cart/update_cart/<?php echo $items['rowid'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
					<?php endforeach; ?>				  
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="row keranjangBawah">
          <div class="col-xl-8 col-md-5 col-sm-5 col-xs-5 ringkasanPesananKeranjang" >
		   <h4>Ringkasan Pesanan</h4>
            <h6>Subtotal (3 item): <span class="subtotalKeranjang">Rp 100.000</span></h6>
            <h6 class="biayaPengirimanKeranjang">Biaya Pengiriman: <span>Rp 5.000</span></h6>
            <h4>Total: <span class="totalHargaKeranjang">Rp <?php echo $this->cart->total(); ?></span></h6>
            
          </div>
        </div>
      </div>
    </section>
    <?php include_once("template/footer.php"); ?> 