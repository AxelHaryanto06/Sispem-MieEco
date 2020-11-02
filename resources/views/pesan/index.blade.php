@extends('layouts.app')
@section('title', 'Pesan Menu')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url('user/menu') }}">Menu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $menu->nama_menu }}</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-12">
                <div class="card product-card">
                    <!-- <div class="card-header">
                        <h2 class="judulmenu">{{ $menu->nama_menu }}</h2>
                    </div> -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{ url('img') }}/{{ $menu->gambar }}" width="100%" class="rounded d-block" alt="">
                            </div>
                            <div class="col-md-6 mt-5">
                                <h2 class="judulmenu">{{ $menu->nama_menu }}</h2>
                                <table class="table table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Harga</td>
                                            <td>:</td>
                                            <td>Rp. {{ number_format($menu->harga) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Deskripsi</td>
                                            <td>:</td>
                                            <td>{{ $menu->deskripsi }}</td>
                                        </tr>
                                        <form action="{{ url('user/menu/pesan') }}/{{ $menu->id }}" method="post">
                                        @csrf    
                                            <tr>
                                                <td>Jumlah Pesan</td>
                                                <td>:</td>
                                                <td>                                                    
                                                    <input type="text" name="jumlah_pesan" class="form-control" required="" id="">                                                    
                                                </td>
                                            </tr>    
                                            <tr>
                                                <td>Catatan</td>
                                                <td>:</td>
                                                <td>                                                    
                                                    <textarea class="form-control" name="catatan" rows="3"></textarea>
                                                    <button type="submit" class="btn btn-primary btn-custom mt-3"><i class="fas fa-shopping-cart"></i> Masukan Pesanan</button>
                                                </td>
                                            </tr>    
                                        </form>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection