@extends('admin')
@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="panel panel-default">
            <div class="panel-heading">
                Daftar Buku
            </div>
            <div class="panel-body">
                <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun terbit</th>
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
                            <td width="16%"><img width="80%" height="50%" src="{{ asset('buku_gambar/'.$buku->gambar) }}"></td>
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
        </div>
    </section>
@endsection