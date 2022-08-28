<!doctype html>
<html>

<head>
  <title>SPP Hemodialisa</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta property="og:title" content="SIKU V0.1 :. Sistem Informasi Keuangan" />
  <meta property="og:type" content="article" />
  <meta property="og:image" content="<?php echo base_url('assets/images/logo.png'); ?>" />
  <meta name="robot" content="noindex, nofollow">
  <meta NAME="Distribution" CONTENT="Global">
  <meta NAME="Rating" CONTENT="General">

  <link rel="icon" type="image/png" href="<?php echo base_url('assets/images/logo.png'); ?>" />
  <!-- bootstrap 3.0.2 -->
  <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
  <!-- font Awesome -->
  <link href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css" />
  <!-- Ionicons -->
  <link href="<?php echo base_url('assets/css/ionicons.min.css'); ?>" rel="stylesheet" type="text/css" />
  <!-- Theme style -->
  <link href="<?php echo base_url('assets/css/AdminLTE.css'); ?>" rel="stylesheet" type="text/css" />
  <!-- jQuery 2.0.2 -->
  <script src="<?php echo base_url('assets/js/jquery-1.8.3.min.js'); ?>"></script>
  <!-- Bootstrap -->
  <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>" type="text/javascript" )"></script>
  <script src="<?php echo base_url('assets/js/jquery.validate.js'); ?>"></script>

  <link href="<?php echo base_url('assets/css/jquery-ui-1.8.21.custom.css'); ?>" rel="stylesheet" />
  <script src="<?php echo base_url('assets/js/jquery-ui-1.8.21.custom.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/js/app.js'); ?>" type="text/javascript"></script>

  <!-- <script src="<?php echo base_url('assets/datatable/jquery.dataTables.min.js'); ?>" type="text/javascript"></script> -->
  <link href="<?php echo base_url('assets/datatable/jquery.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" />
  <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css"> -->
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
  <!-- Select2 -->
  <link href="<?php echo base_url('assets/select2/dist/css/select2.min.css'); ?>" rel="stylesheet" type="text/css" />

  <link href="<?php echo base_url('assets/css/summernote-bs4.css'); ?>" rel="stylesheet" type="text/css">
  <script src="<?php echo base_url('assets/js/summernote-bs4.js'); ?>"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
    }
  </style>
</head>

<body class="skin-blue">
  <?php
  date_default_timezone_set('UTC');
  if (!ini_get('date.timezone')) {
    date_default_timezone_set('Asia/Singapore');
  };

  echo $_header; ?>

  <div class="wrapper row-offcanvas row-offcanvas-left">

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="left-side sidebar-offcanvas">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php echo $_sidebar; ?>
      <!-- /.sidebar -->
    </aside>


    <!-- Right side column. Contains the navbar and content of the page -->
    <aside class="right-side">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>SPP Hemodialisa</h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo site_url('dashboard'); ?>"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-xs-12 connectedSortable">
            <!-- small box -->
            <div class="box box-danger" id="loading-example">
              <div class="box-header">
                <i class="fa fa-cloud"></i>
                <h3 class="box-title"><?php echo $title; ?></h3>
              </div>

              <div class="box-body">
                <?php echo $_content; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
    </aside>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
          <input type="hidden" name="idhapus" id="idhapus">
          <input type="hidden" name="idhapus2" id="idhapus2">
          <p>Apakah anda yakin ingin menghapus data ini?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="konfirmasi">Delete</button>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <script type="text/javascript">
    $(function() {
      $("#example").dataTable({
        'rowsGroup': [1]
      });
      $("#example1").dataTable();
      $("#example2").dataTable({
        "bLengthMenu": true,
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bSort": true,
        "bInfo": true,
        "bAutoWidth": true
      });
    });
  </script>

  <script language="javascript">
    //Filter hanya angka
    function hanyaAngka(e, decimal) {
      var key;
      var keychar;
      if (window.event) {
        key = window.event.keyCode;
      } else
      if (e) {
        key = e.which;
      } else return true;

      keychar = String.fromCharCode(key);
      if ((key == null) || (key == 0) || (key == 8) || (key == 9) || (key == 13) || (key == 27)) {
        return true;
      } else
      if ((("0123456789").indexOf(keychar) > -1)) {
        return true;
      } else
      if (decimal && (keychar == ".")) {
        return true;
      } else return false;
    }
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#dtHorizontalExample').DataTable({
        "scrollX": true
      });
      $('.dataTables_length').addClass('bs-select');
    });
  </script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('.select2').select2();
    });
  </script>

  <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.date.extensions.js'); ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/js/plugins/input-mask/jquery.inputmask.extensions.js'); ?>" type="text/javascript"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url('assets/js/AdminLTE/app.js'); ?>" type="text/javascript"></script>
  <!-- Select2 -->
  <script src="<?php echo base_url('assets/select2/dist/js/select2.min.js'); ?>"></script>
  <script>
    $(document).ready(function() {
      $('#display').DataTable();
    });
  </script>

</body>

</html>