@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambahkan Data Pemrograman</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{ route('pemrograman.update', $pemrograman) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="form-group">
                            <label>Pemrograman</label>
                            <input type="text" class="form-control" name="nama" value="{{ $pemrograman->nama }}">
                        </div>
                        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection