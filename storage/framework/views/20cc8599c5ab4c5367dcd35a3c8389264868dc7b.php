<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staf | Registration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/bower_components/Ionicons/css/ionicons.min.css')); ?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/bower_components/jvectormap/jquery-jvectormap.css')); ?>">
    <link rel="stylesheet"
          href="<?php echo e(url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/dist/css/AdminLTE.min.css')); ?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo e(url('/assets/dist/css/skins/_all-skins.min.css')); ?>">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Staf</b> PC Perpus</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>


            <div class="form-group has-feedback<?php echo e($errors->has('nama') ? ' has-error' : ''); ?>">
                <input placeholder="Fullname" id="nama" type="text" class="form-control" name="nama"
                       value="<?php echo e(old('nama')); ?>" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                <?php if($errors->has('name')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('nama')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('alamat') ? ' has-error' : ''); ?>">
                <input placeholder="Alamat" id="alamat" type="text" class="form-control" name="alamat"
                       value="<?php echo e(old('alamat')); ?>" required autofocus>
                <span class="fa fa-home form-control-feedback"></span>
                <?php if($errors->has('alamat')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('alamat')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('agama') ? ' has-error' : ''); ?>">
                <input placeholder="Agama" id="agama" type="text" class="form-control" name="agama"
                       value="<?php echo e(old('agama')); ?>" required autofocus>
                <span class="glyphicon glyphicon-tower form-control-feedback"></span>
                <?php if($errors->has('agama')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('agama')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('nohp') ? ' has-error' : ''); ?>">
                <input placeholder="No hp" id="nohp" type="text" class="form-control" name="nohp"
                       value="<?php echo e(old('nohp')); ?>" required autofocus>
                <span class="fa  fa-phone form-control-feedback"></span>
                <?php if($errors->has('nohp')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('nohp')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('foto') ? ' has-error' : ''); ?>">
                <input id="foto" type="file" class="" name="foto" value="<?php echo e(old('foto')); ?>" required autofocus>
                <?php if($errors->has('foto')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('foto')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback">
                <select name="level" class="form-control">
                    <option onselect="false">Pilih Role</option>
                    <option value="0">Kepala perpustakaan</option>
                    <option value="1">Staf</option>
                    <?php if($errors->has('level')): ?>
                        <span class="help-block"><strong><?php echo e($errors->first('level')); ?></strong></span>
                    <?php endif; ?>
                </select>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <input placeholder="Email" id="email" type="email" class="form-control" name="email"
                       value="<?php echo e(old('email')); ?>" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php if($errors->has('email')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('email')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <input id="password" placeholder="Password" type="password" class="form-control" name="password"
                       required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                <?php if($errors->has('password')): ?>
                    <span class="help-block"><strong><?php echo e($errors->first('password')); ?></strong></span>
                <?php endif; ?>
            </div>

            <div class="form-group has-feedback">
                <input placeholder="Retype password" id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>

            <button type="submit" class="btn btn-primary btn-flat">
                Register
            </button>

        </form>
        <br>
        <a href="<?php echo e(route('login')); ?>" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
<!-- jQuery 3 -->
<script src="<?php echo e(url('/assets/bower_components/jquery/dist/jquery.min.js')); ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo e(url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>"></script>
<!-- FastClick -->
<script src="<?php echo e(url('/assets/bower_components/fastclick/lib/fastclick.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(url('/assets/dist/js/adminlte.min.js')); ?>"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>
</html>
