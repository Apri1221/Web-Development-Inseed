<html>
  <head>
    
    <?php include_once("template/header.php"); ?>
    <title>inseed.id - Dashboard</title>
    
  </head>
  <body style="background-color:#F5F5F5">
    <div id="loading"></div>
    
    <!-- ISI NAVBAR DISINI YA!!!! -->
    <?php include_once("template/navbar.php"); ?>
    <section id="">
      <div class="col-md-12">
        
      </div>
    </section>
    <div class="container" style="margin-top: 80px; margin-bottom: 80px;">
      <div class="row">
        <div class="col-md-3" >
          <ul class="list-group menuDashboard" >
            <li class="list-group-item judulMenuDashboard" style="background-color: black;">ADMINISTRATOR</li>
            <!-- Admin-->
            <div id="sidebarAdmin" >
              <a href="<?php echo base_url ('index.php/Dashboard/');?>"> <li style="margin-top: 10%;" class="list-group-item active"><i class="fas fa-user"></i>Kelola Pengguna</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaArticle');?>""> <li class="list-group-item"><i class="fas fa-shopping-cart" ></i>Kelola Article</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/adminkelolaProyek');?>""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Kelola Proyek</li></a>
              <a href="<?php echo base_url ('index.php/Dashboard/kelolaProduk');?>""> <li class="list-group-item"><i class="fas fa-dollar-sign" ></i>Kelola Produk</li></a>
            </div>
            
          </ul>
        </div>
        <div class="col-md-9">
          <div class="card">
            <div class="card-header" style="background-color: white;">
              <h4 style="font-weight: bold;"> Kelola User Inseed.id</h4>
              <h6> Kelola semua data pengguna terdaftar inseed.id</h6>
            </div>
            <div class="card-body ">
              <div class="row">
                <div class="col-md-12" style="text-align: center;">
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr class="headerKeranjang">
                          <th scope="col">Username</th>
                          <th scope="col" >Nama </th>
                          <th scope="col" class="text-left">Email</th>
                          <th scope="col" class="text-left">Nomor Telepon</th>
                          <th scope="col" class="text-left">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                         <?php foreach ($result as $var):?>
                        <tr class="produkKeranjang">
                          <td><?php echo $var->namaAkun ?> </td>
                          <td><?php echo $var->namaBelakang; ?></td>
                          
                          <td><?php echo $var->email; ?></td>
                          <td class="text-left"><?php echo $var->noHP;  ?></td>
                          
                          <td class="text-left"><a href="<?php echo base_url ('index.php/Dashboard/adminDeleteUser/'.$var->namaAkun); ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
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