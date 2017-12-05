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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    {{ $error }}
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('buku.store')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Kode Buku</label>
                            <input type="text" class="form-control" name="kodeBuku">
                        </div>
                        <div class="form-group">
                            <label>Judul Buku</label>
                            <input type="text" class="form-control" name="judul">
                        </div>

                        <div class="form-group">
                            <label>Penulis</label>
                            <input type="text" class="form-control" name="penulis">
                        </div>

                        <div class="form-group">
                            <label>Penerbit</label>
                            <input type="text" class="form-control" name="penerbit">
                        </div>

                        <div class="form-group">
                            <label>Tahun terbit</label>
                            <input type="text" class="form-control" name="tahunTerbit">
                        </div>

                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok">
                        </div>

                        <div class="form-group">
                            <label>Kode Rak</label>
                            <input type="text" class="form-control" name="kodeRak">
                        </div>

                        <div class="form-group">
                            <label>Kode Kolom</label>
                            <input type="text" class="form-control" name="kodeKolom">
                        </div>

                        <div class="btn-group">
                            <select id="select" name="pemrograman_id">
                                <option selected="">Pilih Bahasa Pemrograman</option>
                                @foreach ($pemrogramans as $pemrograman)
                                    <option value="{{ $pemrograman->id }}">{{ $pemrograman->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="btn-group">
                            <select id="select" name="platform_id">

                                <option selected="">Pilih Jenis Platform</option>
                                @foreach ($platforms as $platform)
                                    <option value="{{ $platform->id }}">{{ $platform->nama }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <br>
                            <label>Gambar</label>
                            <input type="file" class="" name="gambar">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Simpan">

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection