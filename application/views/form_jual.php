<!DOCTYPE html>
<html lang="en">
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Selamat Datang</title>
    
  </head>

<section id="formJual">
	
<div class="container">
	<div class="col-md-12">
  <h2>Informasi produk</h2>
  <br>
  <form class="form-horizontal" action="xxxx">
    <div class="form-group">
      <label class="control-label col-md-4" for="produk">Nama Produk</label>
      <div class="col-md-12">
        <input type="text" class="form-control" id="produk" placeholder="Masukkan Nama Produk" name="produk">
      </div>
    </div>

     <div class="form-group">
  		<label class="control-label col-md-4" for="deskripsi">Deskripsi Produk</label>
      	<div class="col-md-12">
  			<textarea class="form-control" rows="5" id="deskripsi" placeholder="masukkan keterangan produkmu"></textarea>
  		</div>
	</div>


    <div class="form-group">
      <label class="control-label col-md-4" for="sell">Kategori</label>
      <div class="col-md-12">          
        <select class="form-control" id="sel1" placeholder="Kategori">
        <option>Makanan & Minuman</option>
        <option>Kecantikan</option>
        <option>Lainnya</option>
      </select>
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-md-4" for="produk">Lokasi produk</label>
      <div class="col-md-12">
        <select class="form-control" id="sel1" placeholder="Lokasi">
        <option value="Banten">Banten</option>	
       <option value="Jakarta">Jakarta</option> 	
       <option value="Jawa Barat">Jawa Barat</option>
       <option value="Jawa Tengah">Jawa Tengah</option>
       <option value="Jawa Timur">Jawa Timur</option>
       <option value="Yogyakarta">Yogyakarta</option>

      </select>
      </div>
    </div>

    <div class="form-group">
		<label class="control-label col-md-4" for="foto">Upload Foto Barang</label>
      	 <div class="upload-btn-wrapper col-md-12">
               <button class="btn">Pilih gambar</button>
                 <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png" multiple>
              </div>
    </div>


  <br>
    <h2>Harga & Stok</h2>
   <br>
   <div class="form-group">
      <label class="control-label col-md-4" for="produk">Harga (Rp)</label>
      <div class="col-md-12">
        <input type="text" class="form-control" id="produk" placeholder="Masukkan Harga" name="harga">
      </div>
    </div>

     <div class="form-group">
      <label class="control-label col-md-4" for="produk">Variasi</label>
      <div class="col-md-12">
        <input type="text" class="form-control" id="produk" placeholder="Masukkan jenis variasi produk" name="harga">
      </div>
    </div>
	
   
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-md-12">
        <button type="button" class="btn btn-primary">
  			Simpan
		</button>

	</div>
</div>
</form>
</div>
</div>
</section>

    <?php include_once("template/footer.php"); ?>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url('asset/js/creative.min.js');?>"></script>
  </body>
</html>