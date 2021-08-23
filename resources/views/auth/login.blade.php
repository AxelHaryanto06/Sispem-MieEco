<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="viewportX-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/style.css') }}">
    <title>Login - Mie Eco</title>
</head>
<body>    
<div class="css-1">
    <div class="box-left image-left css-2">
        <div class="col-md-12 image-geser">
            <a href="{{ url('/') }}">
                <img src="/img/mieeco2 2.svg" width="219" height="auto" class="d-inline-block align-top" alt="">
            </a>
        </div>
        <figure class="gambar-login">
            <img src="/img/loginimage.png" alt="">
        </figure>    
    </div>
    <div class="box-right image-right">
        <div class="col-md-12 tulisan-login">
            <p>Login</p>
        </div>
        <div class="col-md-12">
        <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group login-position">
            <label class="perintah">Email</label>                    
            <input id="email" type="email" class="form-control form-size @error('email') is-invalid @enderror" name="email" placeholder="Email Lengkap Anda" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror            
        </div>

        <div class="form-group login-position">
            <label class="perintah">Password</label>                            
            <input id="password" type="password" class="form-control form-size @error('password') is-invalid @enderror" name="password" placeholder="Masukkan Password Anda" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror                            
        </div>

        <div class="form-group row check-login-position">                            
            <div class="form-check">
                <input class="form-check-input" type="hidden" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    {{-- <label class="form-check-label" type="hidden" for="remember">
                        {{ __('Remember Me') }}
                    </label> --}}
            </div>                            
        </div>

        <div class="form-group mb-0">                            
            <button type="submit" class="btn btn-primary btn-submit">
                {{ __('Login') }}
            </button>
            {{-- @if (Route::has('password.request'))
            <div class="row">
                <div class="col-md-12 text-forgot">
                    <a class="btn btn-link btn-forgot" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                </div>
            </div>
            @endif                             --}}
        </div>
        </form>
        <div class="toregister">
            <div class="row">
                <div class="col-md-12">
                    <p class="belumpunya mt-4">Belum punya akun ?<a class="linktoregister" href="{{ url('register') }}"> Register</a></p>
                </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</body>
</html>