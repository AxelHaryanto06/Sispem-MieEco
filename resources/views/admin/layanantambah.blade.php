@extends('layouts.master')
 
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <h4>Tambah Layanan</h4>        
            <div class="box box-warning">
                <div class="box-header">
                    <p>
                        <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                    </p>
                </div>
                <div class="box-body">
                    <form action="/admin/layanan/tambahlayanan" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}                                              
                    <div class="box-body">
                        <div class="form-group">
                            <label>Nama Layanan</label>
                            <input type="text" name="jenis" class="form-control" placeholder="Masukkan Nama / Jenis Layanan">
                        </div>                    
                        
                        <div class="form-group">
                            <label>Gambar / Icon</label>
                            <input type="file" name="image" class="custom-file-input">                    
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