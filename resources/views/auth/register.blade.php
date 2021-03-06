<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Staf | Registration</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{url('/assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
    <link rel="stylesheet"
          href="{{url('/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('/assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{url('/assets/dist/css/skins/_all-skins.min.css')}}">
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
        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group has-feedback{{ $errors->has('nama') ? ' has-error' : '' }}">
                <input placeholder="Fullname" id="nama" type="text" class="form-control" name="nama"
                       value="{{ old('nama') }}" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="help-block"><strong>{{ $errors->first('nama') }}</strong></span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('alamat') ? ' has-error' : '' }}">
                <input placeholder="Alamat" id="alamat" type="text" class="form-control" name="alamat"
                       value="{{ old('alamat') }}" required autofocus>
                <span class="fa fa-home form-control-feedback"></span>
                @if ($errors->has('alamat'))
                    <span class="help-block"><strong>{{ $errors->first('alamat') }}</strong></span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('agama') ? ' has-error' : '' }}">
                <input placeholder="Agama" id="agama" type="text" class="form-control" name="agama"
                       value="{{ old('agama') }}" required autofocus>
                <span class="glyphicon glyphicon-tower form-control-feedback"></span>
                @if ($errors->has('agama'))
                    <span class="help-block"><strong>{{ $errors->first('agama') }}</strong></span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('nohp') ? ' has-error' : '' }}">
                <input placeholder="No hp" id="nohp" type="text" class="form-control" name="nohp"
                       value="{{ old('nohp') }}" required autofocus>
                <span class="fa  fa-phone form-control-feedback"></span>
                @if ($errors->has('nohp'))
                    <span class="help-block"><strong>{{ $errors->first('nohp') }}</strong></span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('foto') ? ' has-error' : '' }}">
                <input id="foto" type="file" class="" name="foto" value="{{ old('foto') }}" required autofocus>
                @if ($errors->has('foto'))
                    <span class="help-block"><strong>{{ $errors->first('foto') }}</strong></span>
                @endif
            </div>

            <div class="form-group has-feedback">
                <select name="level" class="form-control">
                    <option onselect="false">Pilih Role</option>
                    <option value="0">Kepala perpustakaan</option>
                    <option value="1">Staf</option>
                    @if ($errors->has('level'))
                        <span class="help-block"><strong>{{ $errors->first('level') }}</strong></span>
                    @endif
                </select>
            </div>

            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input placeholder="Email" id="email" type="email" class="form-control" name="email"
                       value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                @endif
            </div>

            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" placeholder="Password" type="password" class="form-control" name="password"
                       required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                @endif
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
        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
<!-- jQuery 3 -->
<script src="{{url('/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{url('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/assets/dist/js/adminlte.min.js')}}"></script>
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
