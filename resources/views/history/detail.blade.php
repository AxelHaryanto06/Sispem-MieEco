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
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-active">                            
                                <th class="cart-page-menu">Menu</th>
                                <th class="th-menu">Kuantitas</th>
                                <th class="th-menu">Harga</th>
                                <th class="th-menu">Jumlah Harga</th>                            
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
                                <td style="text-align: center">{{ $detail_pesanan->jumlah }}</td>
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
                    <div class="card mt-5">
                        <div class="card-header">
                            <h5><i class="fas fa-upload"></i> Upload Bukti Pembayaran</h5>
                        </div>
                        <div class="card-body">
                            <p>Silakan upload bukti pembayaran dibawah ini. Verifikasi akan dilakukan dalam beberapa waktu.</p>
                            <form action="{{ url('history/pembayaran') }}/{{ $pesanan->id }}" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            @csrf                            
                            <div class="form-group row">
                                <div class="col-sm-2">Contoh Bukti Pembayaran</div>
                                <div class="col-sm-10">                                  
                                <div class="row">
                                    <div class="col-sm-5 responsive">
                                        <img style="height: 200px; width: 270px; padding: 10px" src="http://syspwt.com/sispemtik-via-gunungmalang/assets/img/bukti/contoh1.jpeg" class="img-contoh" alt="Responsive image">
                                    </div>
        
                                    <div class="col-sm-5">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="foto_bukti" name="foto_bukti">
                                            <label label class="custom-file-label" for="image">Pilih Foto</label>
                                        </div>
                                        <small><p style="color:red; padding: 5px">Ukuran file maksimal 2 MB.</p></small>
                                    </div>
                                </div>        
                                <div class="col-sm-5 mt-3 text-center">
                                    <button type="submit" class="btn btn-secondary ">Upload</button>
                                </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5><i class="fas fa-receipt"></i> Bukti Pembayaran</h5>
                        </div>
                        <div class="card-body">
                            @if (!empty($pembayaran->bukti_foto))
                                <img src="{{ url('img') }}/{{ $pembayaran->bukti_foto }}" class="img-bukti-foto" alt="bukti_foto" width="400" height="200">
                            @else
                                <h5 class="card-title">Mohon Selesaikan Pembayaran Anda</h5>
                                <p>Bukti Pembayaran Tidak Ditemukan !</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection