@extends('layouts.master')
 
@section('content')
 <div class="row">
    <div class="col-md-12">
        <h4>Tambah Menu</h4>        
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
                <form action="{{ route('tambahmenu') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukan Nama Menu">
                    </div>                    
                    
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="image" class="custom-file-input">                    
                    </div>
                    
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <input type="text" name="description" class="form-control" placeholder="Masukan Deskripsi dari Menu">
                    </div>
                    
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="text" name="price" class="form-control" placeholder="Masukan Harga">
                    </div>
                    </div>
                </div>
                <!-- /.box-body -->
    
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
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