<!DOCTYPE html>
<html>
<head>
    <?php echo $__env->make('template.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <?php echo $__env->make('template.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    
   <?php echo $__env->make('template.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 2.4.0
        </div>
        <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
        reserved.
    </footer>

    <!-- Control Sidebar -->
<?php echo $__env->make('template.aside', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo e(url('/assets/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(url('/assets/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url('/assets/dist/js/adminlte.min.js')); ?>"></script>
<script src="<?php echo e(url('/assets/plugins/timepicker/bootstrap-datepicker.js')); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(url('/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')); ?>"></script>
<!-- jvectormap  -->
<script src="<?php echo e(url('/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
<script src="<?php echo e(url('/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
<!-- SlimScroll -->
<script src="<?php echo e(url('/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(url('/assets/bower_components/chart.js/Chart.js')); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(url('/assets/dist/js/demo.js')); ?>"></script>

<script src="<?php echo e(url('/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')); ?>"></script>
<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<script>
    $(".input-group.date").datepicker({autoclose: true, todayHighlight: true});
</script>
</body>
</html>
