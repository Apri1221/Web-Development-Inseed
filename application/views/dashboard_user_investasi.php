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
            <li class="list-group-item judulMenuDashboard" style="background-color: green;">USER DASHBOARD</li>
            <a href="<?php echo base_url ('index.php/Dashboard/');?>" > <li style="margin-top: 10%;" class="list-group-item"><i class="fas fa-user" ></i>Profilku</li> </a>
            <a href="<?php echo base_url ('index.php/Dashboard/cairkan'); ?>"> <li class="list-group-item"><i class="fas fa-money-bill"></i>Cairkan Dana</li></a>
            <a href="<?php echo base_url ('index.php/Dashboard/pesanan');?>"> <li class="list-group-item"><i class="fas fa-file-invoice" ></i>Kelola Pesanan</li></a>
            <a href="<?php echo base_url ('index.php/Dashboard/investasi');?>"> <li class="list-group-item  <?php if($this->uri->segment(2)=="investasi"){echo " active";}?>"><i class="far fa-file-alt" ></i>Kelola Investasi</li></a>
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;">Investasi Anda</h4>
              <h6> Kelola proyek yang anda telah investasikan di sini</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12 text-center" style="text-align: center;">
                  <h4>Proyek investasi saya:</h4>
                  <hr style="border-bottom: 2px solid #12a8bb; margin-bottom: 5%; width: 20%;">
                  <div class="col-md-12 col-sm-12">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <thead>
                          <tr class="headerKeranjang">
                            <th scope="col"> No.</th>
                            <th scope="col" style="width: 20%;">Nama Proyek</th>
                            <th scope="col" class="text-left">Lokasi</th>
                            <th scope="col" style="width: 25%;" class="text-left">Nominal Investasi</th>
                            <th scope="col" class="text-left">Lihat Proyek</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i = 0;
                          foreach ($proyek as $a) :
                          $i++;
                          ?>
                          <tr class="produkKeranjang">
                            <td><?php echo $i?> </td>
                            <td><?php echo $a->namaProyek ?></td>
                            <td><?php echo $a->lokasi ?></td>
                            <td class="text-left">Rp <?php echo $a->nominalInvest?></td>
                            <td class="text-left"><a href="" class="btn btn-sm btn-primary"><i class="far fa-eye"></i></a></td>
                          </tr>
                          <?php endforeach; ?>
                          
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-center" style="margin-bottom: 5%;">
              <h5>Anda ingin berinvestasi lagi?</h5>
              <a href="<?=base_url()?>index.php/invest" class="btn btn-primary">Klik Disini!</a>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>