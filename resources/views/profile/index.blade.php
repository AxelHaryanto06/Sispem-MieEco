@extends('layouts.app')
@section('title', 'Profile')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-12 profil-saya-header">
           <div class="profil-saya-header-title">Profil Saya</div>
           <div class="profil-saya-header-sub">Silakan isi profile Anda dengan benar untuk keperluan pemesanan dan dapatkan info menarik</div>
           <div class="me-line line-color"></div>
       </div>

       <div class="col-md-12 profil-saya-main">
            <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <input type="hidden" name="id" id="id" value="{{ $user->id }}">                                                        

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">  
                </div>                            
                
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $user->email }}" class="form-control">  
                </div>                            
                
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" value="{{ $user->tgl_lahir }}" class="form-control">  
                </div>
                
                <div class="form-group">
                    <label>Jenis Kelamin</label>

                    <div class="col-md-6 pilih-jenkel">
                        <div class="form-check pilihan">
                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Laki - Laki" <?php if($user->jenkel =='Laki - Laki') echo 'checked'?>>
                            <label class="form-check-label" for="jenkel">
                              Laki - Laki
                            </label>
                        </div>
                        <div class="form-check pilihan">
                            <input class="form-check-input" type="radio" name="jenkel" id="jenkel" value="Perempuan" <?php if($user->jenkel =='Perempuan') echo 'checked'?>>
                            <label class="form-check-label" for="jenkel">
                              Perempuan
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="{{ $user->alamat }}" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Handphone</label>
                    <input type="text" name="no_hp" value="{{ $user->no_hp }}" class="form-control">
                </div>                            
                                     
                <button type="submit" class="btn btn-simpan"> Simpan</button>                
            </form>
       </div>
   </div>
</div>
@endsection