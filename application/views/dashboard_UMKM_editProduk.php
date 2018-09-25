<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
     <script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('profilePicture');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>
  </head>
  
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>

    <?php include_once("template/navbar.php"); ?>

    <section id="">
      <div class="col-md-12">
        
      </div>
    </section>
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
      <div class="row">
        <div class="col-md-3" >
          <ul class="list-group menuDashboard" >
            <li class="list-group-item judulMenuDashboard" style="background-color: #12a8bb;">UMKM DASHBOARD</li>
            
            <!-- UMKM -->
            <div id="sidebarUMKM">
              <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item "><i class="fas fa-user" ></i>Profilku</li> </a>
              <a href="<?php echo base_url ('index.php/Dashboard/tambahProduk');?>"> <li class="list-group-item "><i class="fa fa-plus"></i>Tambah Produk</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/produk');?>"> <li class="list-group-item active"><i class="fa fa-box-open"></i>Kelola Produk</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Edit Produk</h4>
              
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-4 editProdukUMKM" style="text-align: center;">
				<?php foreach ($result as $row) : ?>
                  <img id="profilePicture"  class="profilePictureDashboard"  src="<?php echo base_url('asset/assets/image/produk/') . $row->foto;?>">
                  
					
                  <form action="<?php echo base_url()."index.php/dashboard/updateproduk/" . $row->idProduk?>" method="POST" enctype="multipart/form-data">
                    <br>
                    <div class="upload-btn-wrapper">
                      <button class="btn">Ganti gambar</button>
                      <input type="file" name="profilePicture" accept=".jpg, .jpeg, .png" onchange="preview_image(event)">
                    </div>
                  </div>
                  
                  <div class="col-md-8 text-left editProdukUMKM">
                    <div class="col-md-12">
                      <h6>Nama Produk</h6>
                      <input type="text" name="namaProduk" class="form-control" value="<?php echo $row->namaProduk?>"> 
                      </div>   
                      <div class="col-md-12">
                        <h6>Harga:
                      <input type="text" name="hargaProduk" class="form-control" value="<?php echo $row->hargaProduk ?>">
                      
                      </h6>
                      </div>                
					            <div class="col-md-12">
                        <h6>Stok:
                      <input type="text" name="stokProduk" class="form-control" value="<?php echo $row->stok ?>">
                      
                      </h6>
                      </div>
                      
                      <div class="col-md-12">
                        <h6>Detail Produk:
                      <input type="text" name="detailProduk" class="form-control" value="<?php echo $row->detail ?>"></textarea>
                      
                      </h6>
                      </div>
                      
                    <br>       
					          <br>
                    <button type="submit" class="btn btn-outline-primary" style="width: 40%; margin-left: 20%; ">Simpan</button>
                    
                 </div>
               </form>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>