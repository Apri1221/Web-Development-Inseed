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
          <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4 ringkasanPesananKeranjang" >
		   <h4>Ringkasan Pesanan</h4>
            <h6>Jumlah barang : <span class="subtotalKeranjang"><?php echo $this->cart->total_items();?> item</span></h6>
            <h4>Total: <span class="totalHargaKeranjang">Rp <?php echo $this->cart->total(); ?></span></h6>
			<?php 
					foreach ($this->cart->contents() as $items) : 
			?>
            <a href="<?=base_url()?>index.php/mart/bayar/<?php echo $items['id']?>" class="btn btn-success btn-lg btn-block text-uppercase" style="margin-top: 10%;">
               <i class="fas fa-money-bill-alt"></i> Beli Sekarang
              </a>  
			<?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <?php include_once("template/footer.php"); ?> 
	</body>
	</html>