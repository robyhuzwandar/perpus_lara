@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Table With Full Features</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun terbit</th>
                    <th>Pemrograman</th>
                    <th>Platform</th>
                    <th>Gambar</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>

                @foreach($bukus as $buku)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td width="16%">{{ $buku->judul }}</td>
                        <td width="16%">{{ $buku->penulis }}</td>
                        <td width="16%">{{ $buku->penerbit }}</td>
                        <td width="16%">{{ $buku->tahunTerbit }}</td>
                        <td width="16%">{{ $buku->pem }}</td>
                        <td width="16%">{{ $buku->nama }}</td>
                        <td width="16%"><img width="80%" height="50%" src="{{ asset('buku_gambar/'.$buku->gambar) }}">
                        </td>
                        <td width="16%">
                            <a href="{{ route('buku.edit', $buku->kodeBuku) }}"
                               class="btn-primary btn-sm">Edit</a>
                            <form class="" action="{{ route('buku.destroy', $buku->kodeBuku)}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" name="button" class="btn btn-danger btn-xs">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection