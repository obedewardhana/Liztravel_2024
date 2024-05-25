<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url('');?>">
        <img height="60" src="<?php echo base_url(); ?>/img/<?= $this->company_info->get_company_logo();?>">
        LIZ<span>RENTCAR</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item <?= $pageTitle == 'LIZRENTCAR - Solusi Rental Mobil Anda' ? 'active' : '' ?>"><a href="<?php echo base_url('');?>" class="nav-link">Rental Mobil</a></li>
          <li class="nav-item <?= $pageTitle == 'Taxi & Cargo' ? 'active' : '' ?>"><a href="<?php echo base_url('taxi');?>" class="nav-link">Taxi & Cargo</a></li>
          <li class="nav-item <?= $pageTitle == 'Penginapan' ? 'active' : '' ?>"><a href="<?php echo base_url('penginapan');?>" class="nav-link">Penginapan</a></li>
          <li class="nav-item <?= $pageTitle == 'Tempat Wisata' ? 'active' : '' ?>"><a href="<?php echo base_url('travel');?>" class="nav-link">Tempat wisata</a></li>
          <li class="nav-item "><a href="https://wa.me/<?= $this->company_info->get_company_whatsapp();?>?text=Halo%20saya%20ingin%20bertanya%20tentang%20LIZRENTCAR" target="_blank" class="nav-link">Hubungi kami</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->