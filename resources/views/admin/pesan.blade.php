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
                    <p>
                        Sebelum konfirmasi pemesanan pastikan pelanggan sudah membayar dengan cara memeriksa bukti pembayaran dan rekening jika diperlukan
                    </p>
                </div>        
                @if (!empty($data))
                    <div class="box-body">
                        <div class="table-responsive">
                                <table class="table myTable">
                                    <thead class="text-primary">
                                        <th>No</th>
                                        <th>ID Pesanan</th>
                                        <th>Atas Nama</th>
                                        <th>Tanggal Pesan</th>
                                        <th>Total</th>
                                        <th>Konfirmasi Status</th>
                                        <th>Aksi</th>                                                                              
                                    </thead>
                                    <tbody>
                                    @php
                                        $no = 1
                                    @endphp                                
                                    @foreach ($data as $dt)
                                        <tr>                                                                                                                                                                              
                                            <td>{{ $no++ }}</td>                                            
                                            <td>ME201400{{ $dt->id }}</td>
                                            <td>{{ $dt->user->name }}</td>
                                            <td>{{ $dt->tanggal }}</td>
                                            <td>Rp. {{ number_format($dt->total) }}</td>
                                            <td>                                            
                                                <div class="form-check">
                                                    <form action="/admin/konfirmasipemesanan" method="POST">
                                                        {{ csrf_field() }}
                                                        
                                                        <input type="hidden" name="id" value="<?php echo $dt->pembayaran[0]->id ?>">                                
                                                        <input type="checkbox" class="form-check-input" name="status_bayar" value="{{ $dt->pembayaran[0]->status_bayar == "1" ? "0" :"1"  }}" {{ $dt->pembayaran[0]->status_bayar == "1" ? 'checked' : null  }} onclick="event.preventDefault();this.form.submit()">                                                                                                  
                                                        @if ($dt->pembayaran[0]->status_bayar == "1")
                                                            Sudah Dibayar
                                                        @else
                                                            Belom Dibayar
                                                        @endif
                                                    </form>
                                                </div>
                                            </td>
                                            <td>
                                                <a href="{{ url('history') }}/{{ $dt->id }}" class="btn btn-primary">Detail</a>
                                            </td>                                       
                                        </tr>
                                    @endforeach
                                    </tbody>                                
                                </table>
                            </div>
                        </div>
                    
                @else
                    <div class="box-body">
                        Data tidak ditemukan
                    </div>
                @endif        
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