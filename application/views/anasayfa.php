<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Clean Blog - Start Bootstrap Theme</title>
  <link href="<?php echo base_url('assets/frontend/'); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/frontend/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url('assets/frontend/'); ?>css/clean-blog.min.css" rel="stylesheet">

</head>

<body>
<?php $this->load->view('include/header'); ?>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
     <div class="col col-lg-3" style="margin-top:50px">
       <h4 class="text-center">Kategoriler</h4>
       
        <ul class="list-group">
        <?php 
          foreach ($categories as $categori):
         ?>
           <li class="list-group-item">
              <?php echo $categori->cname; ?> <span class="badge badge-danger"><a href="<?php echo base_url('anasayfa/getCategoriBlogs/'); ?><?php echo $categori->csefurl; ?>"><?php echo getCategoriCountSize( $categori->csefurl); ?></span></a>
           </li>
         <?php endforeach; ?>
        </ul>
     </div>
      <div class="col-lg-6 col-md-10 mx-auto">
      <?php foreach($announcements as $announcement): ?>
        <div class="post-preview">
          <a href="<?php echo base_url('anasayfa/detail/');?><?php echo  $announcement->url;?>">
            <h2 class="post-title">
              <?php echo $announcement->title ; ?>
            </h2>
            <h4 class="post-subtitle">
            <?php echo minimizeText($announcement->description) ; ?>
            </h4>
          </a>
          <p class="post-meta">
          <?php echo $announcement->desc_date ; ?>
          </p>
        </div>
        <?php endforeach; ?> 
        <ul class="pager">
        <?php echo $links; ?>
        </ul>
        
      </div>
    </div>
  </div>
  <?php $this->load->view('include/footer'); ?>
  <script src="<?php echo base_url('assets/frontend/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/'); ?>js/clean-blog.min.js"></script>
</body>

</html>
