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
            <li class="nav-item <?php if($this->uri->segment(1)=="" || $this->uri->segment(1)==""){echo " active";}?>">
              <a class="nav-link" href="<?php echo base_url(); ?>">HOME</a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(1)=="Invest" || $this->uri->segment(1)=="invest"){echo " active";}?>">
              <a class="nav-link" href="<?=base_url()?>index.php/invest">SEAWEED INVEST</a>
            </li>
            <?php if($this->session->userdata('level') !== '2'):?>
            <li class="nav-item <?php if($this->uri->segment(1)=="Mart" || $this->uri->segment(1)=="mart"){echo " active";}?>">
              <a class="nav-link" href="<?=base_url()?>index.php/mart">SEAWEED MART</a>
            </li>
            <?php endif;?>
            <li class="nav-item <?php if($this->uri->segment(1)=="Article" || $this->uri->segment(1)=="article"){echo " active";}?>">
              <a class="nav-link" href="<?=base_url()?>index.php/article">SEAWEED ARTIKEL</a>
            </li>
            <li class="nav-item <?php if($this->uri->segment(2)=="about_us" || $this->uri->segment(1)=="About_us"){echo " active";}?>">
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
                  <div class="dropdown-divider"></div>
                  <?php if($this->session->userdata('level') !== '2'):?>
                  <a class="dropdown-item" href="<?=base_url()?>index.php/cart/show_cart">Cart</a>
                  <div class="dropdown-divider"></div>
                  <?php endif; ?>
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