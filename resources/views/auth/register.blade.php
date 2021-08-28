<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Register - Mie Eco</title>
</head>
<body>
    <div class="css-1">
        <div class="box-left register-image-left css-2">
            <div class="col-md-12 image-geser">
                <a href="{{ url('/') }}">
                    <img src="/img/mieeco2 2.svg" width="219" height="auto" class="d-inline-block align-top" alt="">
                </a>
            </div>
            <figure class="gambar-register">
                <img src="/img/registerimage.png" alt="">
            </figure>
        </div>
        <div class="box-right register-image-right">
            <a href="{{ url('/') }}">
                <img src="/img/mie-eco-black.png" class="logo-mieeco" alt="Logo Mie Eco Black Outline">            
            </a>
            <div class="col-md-12 tulisan-register">Register</div>
            <div class="col-md-12 form-register">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-3 col-form-label text-md-left perintah">{{ __('Nama') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Masukkan Nama Anda" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>                                

                    <div class="form-group row">
                        <label for="jenkel" class="col-md-3 col-form-label text-md-left perintah">{{ __('Jenis Kelamin') }}</label>

                        <div class="col-md-6 pilih-jenkel">
                            <div class="form-check pilihan">
                                <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Laki - Laki" required>
                                <label class="form-check-label" for="jenkel">
                                    Laki - Laki
                                </label>
                            </div>
                            <div class="form-check pilihan">
                                <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan" required>
                                <label class="form-check-label" for="jenkel">
                                    Perempuan
                                </label>
                            </div>

                            @error('jenkel')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tgl_lahir" class="col-md-3 col-form-label text-md-left perintah">{{ __('Tanggal Lahir') }}</label>

                        <div class="col-md-6">
                            <input id="tgl_lahir" type="date" class="form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required autocomplete="tgl_lahir">

                            @error('tgl_lahir')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="email" class="col-md-3 col-form-label text-md-left perintah">{{ __('Email') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email Lengkap Anda" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telepon" class="col-md-3 col-form-label text-md-left perintah">{{ __('Telepon') }}</label>

                        <div class="col-md-6">
                            <input id="no_hp" type="text" class="form-control @error('telepon') is-invalid @enderror" name="no_hp" placeholder="Masukkan Nomor Anda" pattern="^[0-9]{9,13}$" value="{{ old('no_hp') }}" required autocomplete="no_hp">

                            @error('telepon')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-3 col-form-label text-md-left perintah">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password Anda" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-3 col-form-label text-md-left perintah">{{ __('Confirm Password') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Konfirmasi Password Anda" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                {{-- <div class="col-md-8">
                    <div class="card">                    
        
                        
                    </div>
                </div> --}}
    </div>
</body>
</html>