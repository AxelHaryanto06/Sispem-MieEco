@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="container">
        <div class="row col-md-12 mt-4">
            <h3 class="contact-follow">MIE ECO</h3>
            <div class="me-line mb-3"></div>
            <p>Ingin bertanya lebih lanjut mengenai pemesanan Mie Eco ? Silakan hubungi kami melalui media sosial kami</p>
            <div class="col-md-6">
                <div class="small-headline-card">
                    <a href="#">
                        <h3 class="contact-medsos"><i class="fab fa-facebook-f" aria-hidden="true"></i> Facebook</h3>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="small-headline-card">
                    <a href="https://www.instagram.com/mieecopurwokerto/">
                        <h3 class="contact-medsos"><i class="fab fa-instagram" aria-hidden="true"></i> Instagram</h3>
                    </a>
                </div>
            </div>
        </div>        
        <div class="col-md-12 mt-5 contact-lokasi">            
            <div class="contact-lokasi-header">Lokasi</div>
            <div class="contact-lokasi-text mt-2">
                <div>Jl. Pramuka Timur</div>
                <div>No. 232 A</div>
                <div>Purwokerto Selatan</div>                                                            
                <div>Kabupaten Banyumas</div>                                                            
                <div>Jawa Tengah</div>            
            </div>
            <div class="telepon mt-3">
                <i class="fas fa-phone"></i>
                +62 821 - 3643 - 6636
            </div>                
        </div>        
    </div>
@endsection