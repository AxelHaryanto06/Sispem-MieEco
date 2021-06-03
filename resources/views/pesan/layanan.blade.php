@extends('layouts.app')
@section('title', 'Mie Eco')
@section('content')
    <section class="container">
        <div class="page-wrapper">
            <div class="row my-3">
                <div class="col-md-12 mx-auto">
                    <h3 align="center" class="header-body-mieeco my-3">
                        <b>Layanan</b>
                    </h3>
                    <div class="row">
                        @foreach ($layanan as $layanan)
                            <div class="col-6 col-md my-4">
                                <div class="card card-rounded">
                                    <div class="card-body d-flex flex-column text-center">
                                        <center>
                                            <img src="{{ url('img') }}/{{ $layanan->icon }}" class="service-icon mb-3" alt="">
                                        </center>
                                        <h5 class="card-title mt-auto card-title-layanan">{{ $layanan->jenis }}</h5>
                                        <div class="text-center">
                                            <a href="{{ url('pesan') }}/{{ $layanan->id_layanan }}" class="btn btn-primary btn-pilih mt-auto">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection