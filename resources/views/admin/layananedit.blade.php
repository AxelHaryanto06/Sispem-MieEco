@extends('layouts.master')
 
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <h1>Edit Layanan</h1>
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    </p>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ url('/admin/layanan/update') }}/{{ $layanan->id }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
    
                                <input type="hidden" name="id" id="id" value="{{ $layanan->id }}">                                                        
    
                                <div class="form-group">
                                    <label>Jenis</label>
                                    <input type="text" name="jenis" value="{{ $layanan->jenis }}" class="form-control">  
                                </div>                            
                                
                                <div class="form-group">
                                    <label>Gambar / Icon</label>
                                    <br>
                                    <img src="{{ url('img') }}/{{ $layanan->icon }}" width="200px" height="auto" height alt="image">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="image" value="{{ $layanan->icon }}" class="custom-file-input">
                                            <small>* Pilih Format .png / .jpg</small>                                
                                        </div>
                                    </div>
                                </div>                                                                                                    
                                <button type="submit" class="btn btn-success"> Update</button>
                                <a href="{{ url('/admin/layanan') }}" class="btn btn-danger"> Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 
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