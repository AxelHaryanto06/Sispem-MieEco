@extends('layouts.master')

@section('content')
<section class="content">
    <div class="row">
    <div class="col-md-12">
        <h4 class="pesan-judul">Detail Pemesanan</h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>                    
                </p>                
            </div>        
            <div class="col-md-12">                                
            </div>
            <div class="box-body">                
                    @if (!empty($detail_pesanans))                                    
                    <div class="table-responsive">
                            <table class="table table-bordered text-dark">
                                <thead class="text-primary">
                                    <th>No</th>                                    
                                    <th>Menu</th>
                                    <th>Jumlah</th>                                                                                                                                                                                      
                                    <th>Catatan</th>                                                                                                                                                                                      
                                </thead>
                                <tbody>
                                @php
                                    $no = 1
                                @endphp                                
                                @foreach ($detail_pesanans as $dp)
                                    <tr>                                                                                                                                                                                                                                                          
                                        <td>{{ $no++ }}</td>                                                                                    
                                        <td>{{ $dp->menu->nama_menu }}</td>
                                        <td>{{ $dp->jumlah }}</td>                                                                                                                                                        
                                        <td>
                                            @if (!empty($dp->catatan))
                                                {{ $dp->catatan }}
                                            @else
                                                Tidak ada catatan
                                            @endif                                            
                                        </td>                                                                                                                                                     
                                    </tr>
                                @endforeach
                                </tbody>                                
                            </table>
                            <div>
                                <h4>Bukti Pembayaran</h4>
                                @if (!empty($pembayaran[0]->bukti_foto))
                                    <img src="{{ url('img') }}/{{ $pembayaran[0]->bukti_foto }}" widht="300px" height="300px" height alt="image">                                
                                @else
                                    Belum Melakukan Pembayaran
                                @endif                                
                            </div>
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
    
@endsection