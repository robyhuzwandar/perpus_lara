@extends('admin')
@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Platform</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($platform as $p)
                    <tr>
                        <td>{{ $loop->index+1 }}</td>
                        <td>{{ $p->nama }}</td>
                        <td width="16%">
                            <div class="row">
                                <div class="col col-sm-2">
                                    <a href="{{ route('platform.edit', $p) }}"
                                       class="btn btn-primary btn-xs"><i class="fa  fa-edit"></i></a>
                                </div>
                                <div class="col col-sm-2">
                                    <form class="" action="{{ route('platform.destroy', $p) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" name="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.box-body -->
    </div>
@endsection