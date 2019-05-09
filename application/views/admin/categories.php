<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

   <?php $this->load->view("admin/import"); ?>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
  <?php $this->load->view('admin/include/sidebar'); ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
      <?php $this->load->view('admin/include/header'); ?>
   

        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Kategoriler
              <a class="btn btn-primary btn-xs" style="color:white" href="<?php echo base_url('categories/categoriesAddGet') ;?>">Kategori Ekle</a>
              </h6>
            
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>Kategori Adı</th>
                      <th>Işlemler</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach($categories as $categori): ?>
                  <tr>
                  <td> <?php echo $categori->cname ; ?></td>
                  <td>
                   <a class="btn btn-danger" href="<?php echo base_url('categories/removeCategori/');?><?php echo $categori->cid; ?> ">
                   Sil
                   </a>
                   <a class="btn btn-primary"  href="<?php echo base_url('categories/categoriesAddGet/update/');?><?php echo $categori->cid; ?> ">
                       Güncelle
                   </a>
                  </td>
                  </tr>
                   <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

 <?php $this->load->view("admin/footerimport") ; ?>

</body>

</html>
