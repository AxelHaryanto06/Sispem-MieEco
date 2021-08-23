@extends('layouts.app')
@section('title', 'Menu')
@section('content')
    <section class="judul1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="daftar-menu">Daftar Menu</h1>
                </div>                
            </div>            
        </div>
    </section>
    <section class="daftar-menu">
        <div class="container">
            <div class="row">
                @foreach($menu as $m)
                    <div class="col-12 col-md-4 mb-4">
                        <div class="card card-rounded">
                            <div class="card-body d-flex flex-column text-center">
                                <figure class="gambar-menu">
                                    <img src="{{ url('img') }}/{{ $m->gambar }}" class="card-gambar rounded" loading="lazy" alt="...">
                                </figure>                        
                                <h5 class="card-title nama-menu mt-3">{{ $m->nama_menu }}</h5>
                                <p class="card-text">
                                    Rp. {{ number_format($m->harga) }}
                                </p>
                                {{-- <a href="{{ url('user/menu/pesan') }}/{{ $m->id }}" class="btn btn-primary btn-pesan">Pesan</a> --}}
                                <div class="text-center">
                                    <a href="{{ url('layanan') }}" class="btn btn-primary btn-pesan">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>            
        </div>
    </section>
@endsection