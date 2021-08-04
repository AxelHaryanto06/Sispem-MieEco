@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <h4>Laporan Penjualan</h4>
            <div class="box box-warning">
                <div class="box-header">                    
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    <div class="form-inline date_range">
                        <div class="input-group">
                            <input type="date" name="tglawal" id="tglawal" class="form-control" required>
                        </div>                
                        <div class="input-group">
                            <input type="date" name="tglakhir" id="tglakhir" class="form-control" required>
                        </div>
                        {{-- <a href="/admin/laporanpenjualan/cetak" class="btn btn-sm btn-flat btn-primary" target="_blank"><i class="fa fa-download"></i> Cetak Laporan</a>                         --}}                        
                        <a href="" onclick="return PilihTanggal()" target="_blank" class="btn btn-primary" id="cetak"><i class="fa fa-print" aria-hidden="true"></i> Cetak Laporan</a>
                    </div>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                            <table class="table myTable">
                                <thead class="text-primary">
                                    <th>No</th>
                                    <th>ID Pesanan</th>
                                    <th>Atas Nama</th>
                                    <th>Tanggal Pesan</th>                
                                    <th>Layanan</th>                                                            
                                    <th>Total</th>
                                </thead>
                                <tbody>
                                    <!-- {{ $no = 1 }} -->
                                    @foreach ($data_penjualan as $jual)                            
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>ME201400{{ $jual->id }}</td>
                                        <td>{{ $jual->user->name }}</td>
                                        <td>{{ $jual->tanggal }}</td>                
                                        <td>{{ $jual->layanan->jenis }}</td>                                   
                                        <td class="text-right">Rp. {{ number_format($jual->total) }}</td>
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