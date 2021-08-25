@extends('layouts.app')
@section('title', 'Mie Eco')
@section('content')
    <section class="home-atas">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="tulisan">
                        Mie Enak, Sehat, dan<br> 
                        Harga Terjangkau
                    </h1>                        
                    <div class="caption">
                        Ayo segera pilih dan pesan mie favoritmu
                    </div>
                </div>
                <div class="col-md-6">
                    <figure class="gambarhome">
                        <img src="/img/Eating together-pana.svg" width="600" height="400" class="home-gambar" alt="">
                    </figure>
                </div>
            </div>            
        </div>
    </section>
    <section class="bagian-foto" align="center">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="foto-produk">
                        <figure class="foto-produk">
                            <img src="/img/mie.jpg" alt="mie">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="foto-produk">
                        <figure class="foto-produk">
                            <img src="/img/nasi.jpg" alt="nasi">
                        </figure>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="foto-produk">
                        <figure class="foto-produk">
                            <img src="/img/chinesefood.jpg" alt="chinesefood">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lokasi">
        <div class="container">
            <div class="row">
            <div class="col-sm-3">
                <h3 class="judul-lokasi">Lokasi</h3>
                <address class="alamat-mieeco">
                    <h4>Mie Eco</h4>
                    <div class="alamat">
                    <div>
                        <i class="fas fa-map-marker-alt"></i>
                        Jl. Pramuka Timur
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt fas-hidden"></i>
                        No. 232 A
                    </div>
                    <div>
                        <i class="fas fa-map-marker-alt fas-hidden"></i>
                        Purwokerto Selatan
                    </div>                                                            
                    <div>
                        <i class="fas fa-map-marker-alt fas-hidden"></i>
                        Kabupaten Banyumas
                    </div>                                                            
                    <div>
                        <i class="fas fa-map-marker-alt fas-hidden"></i>
                        Jawa Tengah
                    </div>                                                                                                    
                </div>
                <div class="telepon">
                    <i class="fas fa-phone"></i>
                    +62 821 - 3643 - 6636
                </div>  
                </address>                                              
            </div>
            <div class="col-sm-9">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.29538036031!2d109.2512876!3d-7.4293694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x31c2bad5e1b2d07!2sMie%20Eco!5e0!3m2!1sid!2sid!4v1603391226532!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>  
            </div>          
        </div>
    </section>
@endsection