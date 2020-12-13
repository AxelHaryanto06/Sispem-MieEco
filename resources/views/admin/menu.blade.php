@extends('layouts.master')
 
@section('content')
<section class="content">
    <div class="row">
       <div class="col-md-12">
           <h4>Daftar Menu</h4>
           <div class="box box-warning">
               <div class="box-header">
                   <p>
                       <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                       <a href="/admin/daftarmenu/tambah" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-refresh"></i> Tambah Menu</a>
                   </p>
               </div>
               <div class="box-body">
                   <div class="table-responsive">
                           <table class="table myTable">
                               <thead class="text-primary">
                                   <th>#</th>
                                   <th>Nama</th>
                                   <th>Gambar Menu</th>
                                   <th>Deskripsi</th>
                                   <th>Harga</th>                            
                                   <th>Aksi</th>                                                            
                               </thead>
                               <tbody>
                                   <!-- {{ $no = 1 }} -->
                                   @foreach ($menu as $m)                            
                                   <tr>
                                       <td> {{ $no++ }} </td>
                                       <td> {{ $m->nama_menu }} </td>
                                       <td> <img src="{{ url('img') }}/{{ $m->gambar }}" widht="100px" height="100px" height alt="image"> </td>
                                       <td> {{ $m->deskripsi }}</td>
                                       <td> Rp. {{ number_format($m->harga) }} </td>
                                       <td>
                                           <a href="/admin/daftarmenu/edit/{{ $m->id }}" class="btn btn-success">Edit</a>
                                           <a href="/admin/daftarmenu/hapus/{{ $m->id }}" class="btn btn-danger">Delete</a>
                                       </td>                                    
                                   </tr>
                                   @endforeach
                               </tbody>
                           </table>
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