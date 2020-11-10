@extends('layouts.master')
 
@section('content')
 <div class="row">
    <div class="col-md-12">
        <h1>Edit Menu</h1>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/admin/daftarmenu/update/{{ $menu->id }}" method="POST" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}

                            <input type="hidden" name="id" id="id" value="{{ $menu->id }}">                                                        

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="username" value="{{ $menu->nama_menu }}" class="form-control">  
                            </div>                            
                            
                            <div class="form-group">
                                <label>Gambar</label>
                                <br>
                                <img src="{{ url('img') }}/{{ $menu->gambar }}" widht="200px" height="200px" height alt="image">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="image" value="{{ $menu->gambar }}" class="custom-file-input">                                
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="description" value="{{ $menu->deskripsi }}" class="form-control">
                            </div>                            
                            
                            <div class="form-group">
                                <label>Harga</label>
                                <input type="text" name="price" value="{{ $menu->harga }}" class="form-control">
                            </div>                                
                            <button type="submit" class="btn btn-success"> Update</button>
                            <a href="{{ url('/admin/daftarmenu') }}" class="btn btn-danger"> Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 
@endsection
 
@section('scripts')
 
<script type="text/javascript">
    $(document).ready(function(){
 
        // btn refresh
        $('.btn-refresh').click(function(e){
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
 
    })
</script>
 
@endsection