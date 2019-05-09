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
                    <h3 class="text-center">Kategori Ekle</h3>
                    <?php echo validation_errors(); ?>
                    
                      <?php  if($operationType=="update") : ?>
                              <form action="<?php echo base_url("categories/categoriesUpdate"); ?>" method="POST">
                                   <div class="form-group">
                                   <label>Kategori Adı</label>
                                   <input type="text" class="form-control" name="name" value="<?php echo $categori->cname; ?>"/>
                                   </div>
                                   <input type="hidden" name="cid" value="<?php echo $categori->cid; ?>"/>
                                   
                                   <button type="submit" class="btn btn-primary">
                                      Güncelle
                                   </button>
                                   <?php
                                        echo $this->session->flashdata("info");
                                   ?>
                              </form>
                         <?php endif; ?>
                         <?php  if($operationType=="insert") : ?>
                              <form action="<?php echo base_url("categories/categoriesSave"); ?>" method="POST">
                                   <div class="form-group">
                                   <label>Kategori Adı</label>
                                   <input type="text" class="form-control" name="name"/>
                                   </div>
                                   
                                   <button type="submit" class="btn btn-primary">
                                        Ekle
                                   </button>
                                   <?php
                                        echo $this->session->flashdata("info");
                                   ?>
                              </form>
                         <?php endif; ?>
                </div>
           </div>
       </div>
  </div>
    
</body>
</html>