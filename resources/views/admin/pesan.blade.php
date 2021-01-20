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
                                                <a href="{{ url('/admin/pemesanan') }}/{{ $dt->id }}" class="btn btn-primary">Detail</a>                                                                                                                                                                                                
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

<div class="modal fade" id="modal-detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Detail Pesanan</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <table class="table table-bordered no-margin">
                <tbody>
                    <tr>
                        <th>Atas Nama</th>
                        <td><span id="name"></span></td>
                    </tr>
                    <tr>
                        <th>Menu</th>
                        <td><span id="menu"></span></td>
                    </tr>
                    <tr>
                        <th>Menu</th>
                        <td><span id="menu"></span></td>
                    </tr>
                    <tr>
                        <th>Total Bayar</th>
                        <td><span id="total"></span></td>
                    </tr>
                    <tr>
                        <th>Bukti Pembayaran</th>
                        <td><img id="bukti_foto" width="50%"></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Send message</button>
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

    $(document).ready(function() {
        $(document).on('click', '#detail', function() {
            var name = $(this).data('name');
            var menu = $(this).data('menu');
            var total = $(this).data('total');
            var buktifoto = $(this).data('buktifoto');
            $('#name').text(name);
            $('#menu').text(menu);
            $('#total').text(total);
            $('#bukti_foto').attr("src",$(this).data('buktifoto'));
        })
    })
</script>
 
@endsection