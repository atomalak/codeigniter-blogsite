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


  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo base_url('assets/frontend/'); ?>img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1><?php echo $announcement->title ; ?></h1>
           </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <p>
          <?php echo $announcement->description ; ?>
          </p>
      </div>
    </div>
  </article>

  
  <script src="<?php echo base_url('assets/frontend/'); ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/frontend/'); ?>js/clean-blog.min.js"></script>


</body>

</html>
