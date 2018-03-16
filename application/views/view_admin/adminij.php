<!DOCTYPE html>
<html lang="en">
<head>
<title><?= $title ?></title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/fullcalendar.css" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/select2.css" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/uniform.css" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/matrix-style.css" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/matrix-media.css" />
<link href="<?= base_url() ?>admin-matrix/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="<?= base_url() ?>admin-matrix/css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="<?= base_url()?>ijournal/favicon.ico"/>
<link rel="apple-touch-icon" href="<?= base_url()?>ijournal/apple-touch-icon.png">
</head>
<body>

  <?php if ($content=="error-404-page") {
    $this->load->view('404');
  } else { ?>
    <!--Header-part-->
  <div id="header">
    <h1><a href="<?= site_url('adminij') ?>">iJournal Admin</a></h1>
  </div>
  <!--close-Header-part--> 


  <!--top-Header-menu-->
  <?php $this->load->view('view_admin/header') ?>
  <!--end-top-header-menu-->

  <!--sidebar-menu-->
  <?php $this->load->view('view_admin/sidebar'); ?>
  <!--end-sidebar-menu-->

  <!--main-container-part-->
  <div id="content">
  <!--breadcrumbs-->
    <div id="content-header">
      <div id="breadcrumb"> <a href="<?= site_url('adminij'); ?>" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    </div>
  <!--End-breadcrumbs-->
    <div class="container-fluid">


  <?php
    if($content=='box-administrator'){
        $this->load->view('view_admin/box');
    }

    else if($content=='box-operator'){
        $this->load->view('view_admin/box');
    }

    else if($content=="tabel-data-sekolah") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="tabel-data-sekolah2") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="add-data-sekolah") {
        $this->load->view('view_admin/form');
    }

    else if($content=="edit-data-sekolah") {
        $this->load->view('view_admin/form');
    }

    else if($content=="view-data-sekolah") {
        $this->load->view('view_admin/view');
    }

    else if($content=="tabel-data-user") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="add-data-user") {
        $this->load->view('view_admin/form');
    }

    else if($content=="edit-data-user") {
        $this->load->view('view_admin/form');
    }

    else if($content=="view-data-user") {
        $this->load->view('view_admin/view');
    }

    else if($content=="tabel-data-siswa") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="tabel-data-siswa2") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="add-data-siswa") {
        $this->load->view('view_admin/form');
    }

    else if($content=="edit-data-siswa") {
        $this->load->view('view_admin/form');
    }

    else if($content=="view-data-siswa"){
        $this->load->view('view_admin/view');
    }

    else if($content=="tabel-data-masukan") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="add-data-masukan") {
        $this->load->view('view_admin/form');
    }

    else if($content=="view-data-masukan") {
        $this->load->view('view_admin/view');
    }

    else if($content=="tabel-data-pendaftar") {
        $this->load->view('view_admin/tabel');
    }
    
    else if($content=="tabel-data-pendaftar2") {
        $this->load->view('view_admin/tabel');
    }

    else if($content=="view-about-us") {
        $this->load->view('view_admin/view');
    }

    else if($content=="view-data-peserta-didik") {
        $this->load->view('view_admin/view');
    }
  ?>

    </div>
  </div>
<!--end-main-container-part-->

<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> <?= date('Y') ?> &copy; iJournal Admin.</div>
</div>
<!--end-Footer-part-->

<script src="<?= base_url() ?>admin-matrix/js/jquery.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.ui.custom.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/bootstrap.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.uniform.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/select2.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>admin-matrix/js/matrix.tables.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/matrix.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.flot.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.flot.resize.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.peity.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/fullcalendar.min.js"></script>
<script src="<?= base_url() ?>admin-matrix/js/matrix.dashboard.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.gritter.min.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/matrix.interface.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/matrix.chat.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/jquery.validate.js"></script> 
<script src="<?= base_url() ?>admin-matrix/js/matrix.form_validation.js"></script>
<script src="<?= base_url() ?>admin-matrix/js/jquery.wizard.js"></script>
<script src="<?= base_url() ?>admin-matrix/js/masked.js"></script>
<script src="<?= base_url() ?>admin-matrix/js/matrix.form_common.js"></script>
<script src="<?= base_url() ?>admin-matrix/js/maruti.js"></script>

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
  <?php } ?>
</body>
</html>