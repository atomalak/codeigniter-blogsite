<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Duyuru Ekle</title>
   <?php $this->load->view("admin/import"); ?>
</head>
<body id="page-top">
  <div id="wrapper">
       <?php $this->load->view('admin/include/sidebar'); ?>
       <div id="content-wrapper" class="d-flex flex-column">
           <div id="content">
                <?php $this->load->view('admin/include/header'); ?>
                <div class="container-fluid">
                    <h3 class="text-center">Duyuru Ekle</h3>
                    <?php echo validation_errors(); ?>
                    <form action="<?php echo base_url('announcement/update_announcement_post'); ?>" method="POST">
                         <div class="form-group">
                             <label>Duyuru Başlık</label>
                             <input type="text" class="form-control" name="title" value="<?php echo $announcement->title ; ?>"/>
                          </div>
                          <div class="form-group">
                             <label>Kategoriler</label>
                              <select name="categories" class="form-control">
                                  <option value="">Seçiniz</option>
                                  <?php foreach($categories as $categori) : ?>
                                   <option <?php if( $announcement->csafeUrl ==$categori->csefurl)  echo "selected"; ?>  value="<?php echo $categori->csefurl; ?>"><?php echo $categori->csefurl; ?></option> 
                                  <?php endforeach; ?> 
                              </select>
                          </div>

                          <div class="form-group">
                             <label>Içerik</label>
                             <textarea class="form-control" name="description">
                                <?php echo $announcement->description ; ?>
                              </textarea>
                          </div>
                          <input type="hidden" value="<?php echo $announcement->id; ?>" name="id"/>
                          <button type="submit" class="btn btn-primary">
                             Güncelle
                           </button>
                          <?php
                                  echo $this->session->flashdata("info");
                          ?>


                     </form>
                
                
                </div>
           </div>
       </div>
  </div>
    
</body>
</html>