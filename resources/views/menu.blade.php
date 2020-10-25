@extends('layouts.app')
@section('title', 'Menu')
@section('content')
    <section class="judul1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="daftar-menu">Daftar Menu</h1>
                </div>                
            </div>            
        </div>
    </section>
    <section class="daftar-menu">
        <div class="container">
            <div class="row">
                @foreach($menu as $m)
                    <div class="col-md-4">
                        <div class="card">
                            <figure class="gambar-menu">
                                <img src="{{ url('img') }}/{{ $m->gambar }}" class="card-img-top card-gambar" alt="...">
                            </figure>                        
                        <div class="card-body">
                            <h5 class="card-title nama-menu">{{ $m->nama_menu }}</h5>
                            <p class="card-text">
                                <strong class="harga">Harga :</strong> Rp. {{ number_format($m->harga) }} <br>
                                <hr>
                                <div class="deskripsi">
                                    {{ $m->deskripsi }}
                                </div>
                            </p>
                            <a href="#" class="btn btn-primary btn-pesan">Pesan</a>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>            
        </div>
    </section>
@endsection