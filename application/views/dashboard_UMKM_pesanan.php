<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Seaweed Invest</title>
    
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
            <!-- User -->
            <li class="list-group-item judulMenuDashboard"
              <?php if($this->session->userdata('level') === '0'):?>
            style="background-color: green;">USER DASHBOARD</li>
            <div id="sidebarUser">
              <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
              <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item <?php if($this->uri->segment(2)=="pesanan"){echo " active";}?>"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/investasi');?>"> <li class="list-group-item"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
            </div>
            <?php elseif($this->session->userdata('level') === '2'):?>
          style="background-color: #167c85;">KOPERASI DASHBOARD</li>
          <!-- koperasi -->
          <div id="sidebarKoperasi">
            <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user" ></i>Profilku</li> </a>
            <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
            <a href="<?php echo base_url ('index.php/Dashboard/kelolaProyek'); ?>"> <li class="list-group-item"><i class="fas fa-project-diagram"></i>Kelola Proyek</li></a>
            <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
          </div>
          <?php elseif($this->session->userdata('level') === '3'):?>
        style="background-color: #12a8bb;">UMKM DASHBOARD</li>
        <!-- UMKM -->
        <div id="sidebarUMKM">
          <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
          <a href="<?php echo base_url ('index.php/Dashboard/tambahProduk');?>"> <li class="list-group-item"><i class="fa fa-plus"></i>Tambah Produk</li></a>
          <a href="<?php echo base_url ('index.php/Dashboard/produk');?>"> <li class="list-group-item"><i class="fa fa-box-open" ></i>Kelola Produk</li></a>
          <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item active"><i class="fas fa-file-invoice"></i>Kelola Pesanan</li></a>
          <a href="<?php echo base_url ('index.php/Dashboard/komplain'); ?>"> <li class="list-group-item"><i class="fa fa-exclamation-triangle"></i>Laporkan Komplain</li></a>
        </div>
        <?php endif;?>
      </ul>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-header" style="background-color: white;">
          <h4 style="font-weight: bold;"> Pesanan produk anda</h4>
          <h6> Kelola pesanan produk yang anda jual di sini</h6>
        </div>
        <div class="card-body ">
          <div class="row">
            <?php if($this->session->userdata('level') === '3'):?>
            <div class="col-md-16 text-center" style="text-align: center;">
              <h4>Pesanan yang masuk</h4>
              <hr style="border-bottom: 2px solid #12a8bb; margin-bottom: 5%; width: 20%;">
              <div class="col-md-12 col-sm-12">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr class="headerKeranjang">
                        <th scope="col"> No</th>
                        <th scope="col" style="width: 20%;">Nama Produk</th>
                        <th scope="col" style="width: 20%;" class="text-left">Nama Pembeli</th>
                        <th scope="col" class="text-left">Kuantitas</th>
                        <th scope="col" style="width: 30%;" class="text-left">Alamat Pengiriman</th>
                        <th scope="col" class="text-left">Konfirmasi</th>
                        <th scope="col" class="text-left">Batalkan</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php $i = 0;
                      foreach ($detail as $var) :
                      if ($var->status == 0) :
                      
                      $i++; ?>
                      <tr class="produkKeranjang">
                        <td>
                          <?php echo $i;?>
                        </td>
                        <td style="width: 20%;"><?php echo $var->idProduk; ?></td>
                        <td style="width: 20%;"><?php echo $var->namaPembeli; ?> buah</td>
                        <td class="text-left"><?php echo $var->jumlah; ?></td>
                        <td style="width: 30%;" class="text-left"><?php echo $var->alamatTujuan; ?></td>
                        <td class="text-center"><a href="<?=base_url()?>index.php/mart/ubahStatusTrans/<?php echo $var->idTransaksi ?>" class="btn btn-sm btn-primary"><i class="fas fa-check"></i> </a></td>
                        <td class="text-center"><a href="#" class="btn btn-sm btn-danger"><i class="fas fa-times"></i> </a></td>
                      </tr>
                      <?php endif ?>
                      <?php endforeach; ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <?php endif;?>
            
            <div class="col-md-12" style="text-align: center; margin-top: 2%;">
              <h4>Pesanan yang sudah dikonfirmasi</h4>
              <hr style="border-bottom: 2px solid #12a8bb; margin-bottom: 5%; width: 20%;">
              <div class="table-responsive">
                <table class="table table-striped">
                  <thead>
                    <tr class="headerKeranjang">
                      <th scope="col"> No</th>
                      <th scope="col" style="width: 20%;">Nama Produk</th>
                      <th scope="col" style="width: 20%;" class="text-left">Nama Pembeli</th>
                      <th scope="col" class="text-left">Kuantitas</th>
                      <th scope="col" style="width: 30%;" class="text-left">Alamat Pengiriman</th>
                      
                      <th scope="col" class="text-left">Hapus</th>
                    </tr>
                  </thead>
                  <?php $i = 0;
                  foreach ($detail as $var):
                  if ($var->status == 1) :
                  
                  $i++; ?>
                  <tr class="produkKeranjang">
                    <td>
                      <?php echo $i;?>
                    </td>
                    <td><?php echo $var->idProduk ?></td>
                    
                    <td><?php echo $var->jumlah ?> buah</td>
                    <td class="text-left">Rp <?php echo $var->total ?></td>
                    <td class="text-left"> <?php echo $var->tglTrans ?></td>
                    <td class="text-left"><a href="<?=base_url()?>index.php/cart/hapusTrans/<?php echo $var->idTransaksi ?>" class="btn btn-sm btn-primary"><i class="fas fa-trash"></i> </a></td>
                  </tr>
                  <?php endif ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
</body>
</html>