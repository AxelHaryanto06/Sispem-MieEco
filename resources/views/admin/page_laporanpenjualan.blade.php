@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <h4>Laporan Penjualan</h4>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                        <a href="/admin/laporanpenjualan/cetak" class="btn btn-sm btn-flat btn-primary" target="_blank"><i class="fa fa-download"></i> Cetak Laporan</a>
                    </p>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                            <table class="table myTable">
                                <thead class="text-primary">
                                    <th>No</th>
                                    <th>ID Pesanan</th>
                                    <th>Atas Nama</th>
                                    <th>Tanggal Pesan</th>                
                                    <th>Total</th>
                                    <th>Layanan</th>                                                            
                                </thead>
                                <tbody>
                                    <!-- {{ $no = 1 }} -->
                                    @foreach ($data_penjualan as $jual)                            
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>ME201400{{ $jual->id_pesanan }}</td>
                                        <td>{{ $jual->user->name }}</td>
                                        <td>{{ $jual->tanggal }}</td>                
                                        <td class="text-right">Rp. {{ number_format($jual->total) }}</td>
                                        <td>{{ $jual->layanan->jenis }}</td>                                   
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