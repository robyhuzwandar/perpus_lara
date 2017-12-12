@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Data Buku</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('member.update', $member->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('nim') ? ' has-error' : '' }}">
                            <label>Nim</label>
                            <input type="text" class="form-control" value="{{ $member->nim }}" name="nim">
                            @if ($errors->has('nim'))
                                <span class="help-block"><strong>{{ $errors->first('nim') }}</strong></span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nama') ? ' has-error' : '' }}">
                            <label>Nama</label>
                            <input value="{{ $member->nama }}" type="text" class="form-control" name="nama">
                            @if ($errors->has('nama'))
                                <span class="help-block"><strong>{{ $errors->first('nim') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label>Alamat</label>
                            <input value="{{ $member->alamat) }}" type="text" class="form-control" name="alamat">
                            @if ($errors->has('alamat'))
                                <span class="help-block"><strong>{{ $errors->first('alamat') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('tglLahir') ? ' has-error' : '' }}">
                            <label>Tgl Lahir</label>
                            <div class="input-group date " data-date="" data-date-format="yyyy-mm-dd">
                                <input value="{{ $member->tglLahir }}" class="form-control" type="text" name="tglLahir"
                                       readonly="readonly">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                @if ($errors->has('tglLahir'))
                                    <span class="help-block"><strong>{{ $errors->first('tglLahir') }}</strong></span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('nohp') ? ' has-error' : '' }}">
                            <label>No HP</label>
                            <input value="{{ $member->nohp }}" type="text" class="form-control" name="nohp">
                            @if ($errors->has('nohp'))
                                <span class="help-block"><strong>{{ $errors->first('nohp') }}</strong></span>
                            @endif
                        </div>


                        <div class="form-group  {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label>Email</label>
                            <input value="{{ $member->email }}" type="email" class="form-control" name="email">
                            @if ($errors->has('email'))
                                <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                        </div>

                        <div class="form-group {{ $errors->has('foto') ? ' has-error' : '' }}">
                            <br>
                            <label>Foto</label>
                            <img style="padding: 5px" width="20%" height="20%" src="{{ asset('member_foto/'.$member->foto) }}">
                            <input value="{{ old('foto') }}" type="file" class="" name="foto">
                            @if ($errors->has('foto'))
                                <span class="help-block"><strong>{{ $errors->first('foto') }}</strong></span>
                            @endif
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection