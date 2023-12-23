<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Selater</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="<?php echo base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('/adminlte/plugins/fontawesome-free/css/all.min.css')?>">
    <!-- Ionicons -->
    <link rel="stylesheet"
        href="<?php echo base_url('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')?>">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo base_url('/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css')?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo base_url('/adminlte/plugins/jqvmap/jqvmap.min.css')?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('/adminlte/dist/css/adminlte.min.css')?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?php echo base_url('/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('/adminlte/plugins/daterangepicker/daterangepicker.css')?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo base_url('/adminlte/plugins/summernote/summernote-bs4.min.css')?>">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url('/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet"
        href="<?= base_url('/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') ?>">
    <link rel="stylesheet"
        href="<?= base_url('/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') ?>">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
        href="<?= base_url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic') ?>">


    <!-- javascript -->
    <!-- ./wrapper -->



</head>

<body class="hold-transition skin-blue sidebar-mini">

    <!-- Page Wrapper -->
    <div class="wrapper">

        <!-- Sidebar -->

        <?= $this->include('layout_admin/topbar'); ?>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div class="content-wrapper">

            <!-- Main Content -->



            <!-- Topbar -->



            <!-- End of Topbar -->
            <div class="content">

                <!-- Begin Page Content -->
                <div class="container-fluid ">

                    <!-- start content -->

                    <?= $this->renderSection('content'); ?>

                    <!-- end content -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->



            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

        <?= $this->include('layout_admin/footer'); ?>

        <?= $this->include('layout_admin/sidebar'); ?>

    </div>
    <!-- End of Page Wrapper -->




    <!-- jQuery -->
    <script src="<?php echo base_url('/adminlte/plugins/jquery/jquery.min.js')?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo base_url('/adminlte/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
    $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url('/adminlte/plugins/chart.js/Chart.min.js')?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('/adminlte/plugins/sparklines/sparkline.js')?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo base_url('/adminlte/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
    <script src="<?php echo base_url('/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('/adminlte/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo base_url('/adminlte/plugins/moment/moment.min.js')?>"></script>
    <script src="<?php echo base_url('/adminlte/plugins/daterangepicker/daterangepicker.js')?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script
        src="<?php echo base_url('/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>">
    </script>
    <!-- Summernote -->
    <script src="<?php echo base_url('/adminlte/plugins/summernote/summernote-bs4.min.js')?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo base_url('/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')?>">
    </script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('/adminlte/dist/js/adminlte.js')?>"></script>

    <!-- DataTables  & Plugins -->
    <script src="<?= base_url('/adminlte/plugins/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/jszip/jszip.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/pdfmake/pdfmake.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/pdfmake/vfs_fonts.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-buttons/js/buttons.print.min.js') ?>"></script>
    <script src="<?= base_url('/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js') ?>"></script>

    <!-- Script di data servis untuk data table -->
    <script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
    </script>

    <!-- akhir Script di data servis untuk data table -->

</body>

</html>