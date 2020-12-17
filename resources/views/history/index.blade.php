@extends('layouts.app')
@section('title', 'Riwayat Pesanan | Mie Eco')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>                        
                        <li class="breadcrumb-item active" aria-current="page">Riwayat Pemesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-2">
                <div class="container">
                    <h5><i class="fas fa-history"></i> Riwayat Pemesanan</h5>
                    <div class="alert alert-warning order-announcement mt-2" role="alert">
                        Pemesanan dengan status Belum Dibayar tidak akan dilakukan pembuatan
                    </div>
                    <table class="table table-striped mt-2">
                        <thead>
                            <tr>                            
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>                            
                        @php
                            $no = 1
                        @endphp
                        @foreach ($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if ($pesanan->status == 1)
                                        Belum Dibayar
                                    @else
                                        Sudah Dibayar
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->total) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary">Detail</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection