@extends('layouts.app')
@section('title', 'Detail Pemesanan | Mie Eco')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>                        
                        <li class="breadcrumb-item"><a href="{{ url('history') }}">Riwayat Pemesanan</a></li>                        
                        <li class="breadcrumb-item active" aria-current="page">Detail Pemesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-2">
                <div class="container">
                    <h5><i class="fas fa-shopping-cart"></i> Detail Pemesanan</h5>                
                    @if (!empty($pesanan))
                    <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                    <table class="table table-striped">
                        <thead>
                            <tr>                            
                                <th class="cart-page-menu">Menu</th>
                                <th>Kuantitas</th>
                                <th>Harga</th>
                                <th>Jumlah Harga</th>                            
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($detail_pesanans as $detail_pesanan)
                            <tr>                           
                                <td>
                                    <div class="col-md-12 cart-page-namamenu">
                                        {{ $detail_pesanan->menu->nama_menu }}
                                    </div>                                
                                    <div class="col-md-12 cart-page-catatan mt-2">
                                        <i>{{ $detail_pesanan->catatan }}</i>
                                    </div>                                
                                </td>
                                <td>{{ $detail_pesanan->jumlah }}</td>
                                <td align="left">Rp. {{ number_format($detail_pesanan->menu->harga) }}</td>
                                <td align="left">Rp. {{ number_format($detail_pesanan->jml_harga) }}</td>                            
                            </tr>                            
                            @endforeach
                            <tr>
                                <td colspan="3" align="right"><strong>Total Harga :</strong></td>
                                <td><strong>Rp. {{ number_format($pesanan->total) }}</strong></td>                            
                            </tr>
                            <tr>
                                
                            </tr>
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection