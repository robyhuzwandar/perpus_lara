@extends('admin')

@section('content')
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah Pemrograman
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="{{ route('pemrograman.store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Pemrograman</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection