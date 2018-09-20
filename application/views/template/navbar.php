<section id="header">
      <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url('asset/assets/image/logo.png');?>" style="  padding: 0 20px 0 20px;
          height: 75px;
        width: 250px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse " id="navbarSupportedContent" >
          <ul class="text-uppercase navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo base_url(); ?>">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>index.php/invest">SEAWEED INVEST</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>index.php/mart">SEAWEED MART</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>index.php/article">SEAWEED ARTIKEL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=base_url()?>index.php/welcome/about_us">TENTANG KAMI</a>
            </li>
            <!-- Authentication Links -->
            
            <?php if(null !== $this->session->userdata('level')):?>
            
            <li class="nav-item dropdown hidden-md-down">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php $username = $this->session->userdata('username');
                $sesdata['username']=$username; 
                echo $username ?></a>
                <div class="dropdown-menu dropdown-menu-right" style="background-color: #fcfffe;" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="<?=base_url()?>index.php/dashboard">Dashboard</a>
<<<<<<< HEAD
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?=base_url()?>index.php/cart">Cart</a>
=======
                  <a class="dropdown-item" href="<?=base_url()?>index.php/cart/show_cart">Cart</a>
>>>>>>> f77914b7946e1f8e7a08f1dd014bd2403306137c
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?=base_url()?>index.php/auth/logout">Keluar</a>
                </div>
            </li>

            <?php else:?>
            
            <li class="nav-item">
              <a id="masukdulu" class="nav-link" href="<?=base_url()?>index.php/auth/login">MASUK</a>
            </li>
            
            <?php endif;?>          
        </ul>
      </div>
    </nav>
  </section>