@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <h4>Daftar Layanan</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                        <a href="/admin/layanan/tambah" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Layanan</a>
                    </p>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                            <table class="table myTable">
                                <thead class="text-primary">
                                    <th>#</th>
                                    <th>Nama Layanan</th>
                                    <th>Gambar / Icon</th>                                                             
                                    <th>Aksi</th>                                                            
                                </thead>
                                <tbody>
                                    <!-- {{ $no = 1 }} -->
                                    @foreach ($layanan as $layanan)                            
                                    <tr>
                                        <td> {{ $no++ }} </td>
                                        <td> {{ $layanan->jenis }} </td>
                                        <td> <img src="{{ url('img') }}/{{ $layanan->icon }}" width="100px" height="auto" alt="image"> </td>                                        
                                        <td>
                                            <a href="{{ url('/admin/layanan/edit') }}/{{ $layanan->id }}" class="btn btn-success">Edit</a>
                                            <a href="{{ url('/admin/layanan/hapus') }}/{{ $layanan->id }}" class="btn btn-danger">Delete</a>
                                        </td>                                    
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
@endsection