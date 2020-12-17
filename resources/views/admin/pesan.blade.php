@extends('layouts.master')
 
@section('content')
<section class="content">
    <div class="row">
       <div class="col-md-12">
           <h4 class="pesan-judul">Pemesanan</h4>
           <div class="box box-warning">
               <div class="box-header">
                   <p>
                       <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>                    
                   </p>
               </div>
               <div class="box-body">
                   <div class="table-responsive">
                           <table class="table myTable">
                               <thead class="text-primary">
                                   <th>No</th>
                                   <th>Atas Nama</th>
                                   <th>Tanggal Pesan</th>
                                   <th>Total</th>
                                   <th>Status</th>
                                   <th>Aksi</th>                                                                              
                               </thead>
                               <tbody>
                                @php
                                   $no = 1
                                @endphp
                               @foreach ($pesanan as $pesanan)
                                   <tr>
                                       <td>{{ $no++ }}</td>
                                       <td>{{ $pesanan->user->name }}</td>
                                       <td>{{ $pesanan->tanggal }}</td>
                                       <td>Rp. {{ number_format($pesanan->total) }}</td>
                                       <td>
                                           <div class="form-check">
                                               <input type="checkbox" class="form-check-input" name="status-bayar">
                                               @if ($pesanan->status == 1)
                                                   Belum Dibayar
                                               @else
                                                   Sudah Dibayar
                                               @endif
                                           </div>
                                       </td>
                                       <td>
                                           <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary">Detail</a>
                                       </td>                                       
                                   </tr>
                               @endforeach
                               </tbody>
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