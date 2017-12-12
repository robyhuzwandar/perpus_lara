@extends('admin')
@section('content')
    <!-- Main content -->
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Peminjaman</h3>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-6">

                    <form action="route{{'peminjaman.store'}}" method='post'>
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Buku</label><br>
                                    @foreach()
                                    <select data-live-search="true" data-live-search-style="startsWith" name="buku"
                                            class="selectpicker">
                                        <option disabled="" selected="">Pilih Buku Berdasarkan Judul</option>
                                        <option value=""></option>

                                    </select>
                                </div>
                                <div class="form-group"><br>
                                    <input type="submit" class="btn btn-primary simpan" name="add" value="Add"
                                           style="margin-top: 5px;">
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <div class="row">
                        <div class="col col-md-6">
                            <table class="table table-default">
                                <tr>
                                    <th>No.</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td width="16%">
                                        <a onclick="return confirm('Yakin untuk Hapus Data ?')"
                                           href="pinjamAdd.php?delBkb=<?php echo $result['kodeBuku']; ?>">
                                            <button class="btn-danger btn-sm">Hapus</button>
                                        </a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col col-md-6">
                            <form action="" method='POST'>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nama Buku</label><br>
                                            <select data-live-search="true" data-live-search-style="startsWith"
                                                    name="member"
                                                    class="selectpicker">
                                                <option disabled="" selected="">Pilih Member</option>
                                                <option value=""></option>

                                            </select>
                                        </div>
                                        <div class="form-group"><br>
                                            <input type="submit" id='insert' class="btn btn-primary simpan" name="send"
                                                   value="Kirim Ke Peminjaman" style="margin-top: 5px;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
