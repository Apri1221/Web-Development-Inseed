<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
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
            <!-- Koperasi -->
            <li class="list-group-item judulMenuDashboard" style="background-color: #12a8bb;">UMKM DASHBOARD</li>
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
              <h4 style="font-weight: bold;"> Kelola produk anda</h4>
              <h6> Kelola produk rumput laut anda di sini</h6>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12" style="text-align: center;">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="headerKeranjang">
                          <th scope="col">Nama Produk</th>
                          <th scope="col" >Harga </th>
                          <th scope="col" class="text-left">Stok</th>
                          <th scope="col" class="text-left">Edit</th>
                          <th scope="col" class="text-left">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php foreach ($produk as $row) : ?>
                        <tr class="produkKeranjang">
                          
                          <td><?php echo $row->namaProduk?></td>
                          <td>Rp <?php echo $row->hargaProduk?></td>
                          <td><?php echo $row->stok?></td>
                          <td class="text-left"><a href="<?php echo base_url ('index.php/Dashboard/editProduk/') . $row->idProduk;?>" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> </a> </td>
                          <td class="text-left"><a href="<?php echo base_url ('index.php/Dashboard/hapusProduk/') . $row->idProduk;?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                          
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>