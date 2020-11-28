@extends('layouts.app')
@section('title', 'Keranjang Pesanan | Mie Eco')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>                        
                        <li class="breadcrumb-item active" aria-current="page">Keranjang Pesanan</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12 mt-2">                
                @if (!empty($pesanan))                                    
                <p align="right">Tanggal Pesan : {{ $pesanan->tanggal }}</p>
                <table class="table table-striped">
                    <thead>
                        <tr>                            
                            <th class="cart-page-menu">Menu</th>
                            <th>Kuantitas</th>
                            <th>Harga</th>
                            <th>Jumlah Harga</th>
                            <th>Aksi</th>
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
                            <td>
                                <form action="{{ url('cart') }}/{{ $detail_pesanan->id }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan menghapus menu ini ?');"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>                            
                        @endforeach
                        <tr>
                            <td colspan="3" align="right"><strong>Total Harga :</strong></td>
                            <td><strong>Rp. {{ number_format($pesanan->total) }}</strong></td>
                            <td>
                                <a href="{{ url('check-out') }}" class="btn btn-success btn-cart">Buat Pesanan</a>
                            </td>
                        </tr>
                        <tr>
                            
                        </tr>
                    </tbody>
                </table>
                @endif
            </div>
        </div>
    </div>
@endsection