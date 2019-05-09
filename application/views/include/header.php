<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.html">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('anasayfa'); ?>">Ana Sayfa</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('contact'); ?>">Iletişim</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url('assets/frontend/'); ?>img/home-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <span class="subheading"><?php echo $this->session->userdata("title")?></span>
          </div>
        </div>
      </div>
    </div>
  </header>