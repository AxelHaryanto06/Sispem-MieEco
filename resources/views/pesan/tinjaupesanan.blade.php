@extends('layouts.app')
@section('title', 'Tinjau Pesanan | Mie Eco')
@section('content')
    <div class="container">
        <h3 align="center" class="header-body-mieeco my-3">
            <b>Tinjau Pesanan</b>            
        </h3>
        <div class="col-12 col-md-12 my-3">
            <div class="card card-rounded my-auto">
                <div class="card-body">
                    <div class="col-12">
                        <div class="form-group group-layanan">
                            <label for="layanan">Layanan :</label>                            
                            <p class="text-mieeco-red">{{ $pesanan->layanan->jenis }}</p>
                        </div>
                    </div>
                    <div class="col-12 mt-4 table-responsive">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Pesanan</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Catatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($detail_pesanans as $detail_pesanan)
                                <tr>
                                    <td>{{ $detail_pesanan->menu->nama_menu }}</td>
                                    <td>x {{ $detail_pesanan->jumlah }}</td>
                                    <td>Rp. {{ number_format($detail_pesanan->jml_harga) }}</td>
                                    <td>{{ $detail_pesanan->catatan }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td><strong>Total Harga</strong></td>
                                    <td></td>
                                    <td><strong>Rp. {{ number_format($tampil_pesanan->total) }}</strong></td>
                                    <td></td>
                                </tr>                            
                            </tbody>
                        </table>
                    </div>
                    <form action="/review-order" method="POST">
                        {{ csrf_field() }}
                        <div class="container-fluid">
                            <div class="col-12 col-md-6 mx-auto my-auto">
                                <div class="card card-rounded mb-3">
                                    <div class="card-body">
                                        <p class="text-center"><strong>Waktu {{ $pesanan->layanan->jenis }}</strong></p>
                                        <div class="form-group">
                                            <label for="ordertime"><strong>Jam</strong></label>
                                            <div class="input-group mb-3">
                                                <input type="time" min="09:30" max="16:00" id="timepick" name="jam" class="form-control" aria-label="Time Picker" aria-describedby="basic-addon2">                                        
                                            </div>
                                            <label for=""><strong>*Jam Pemesanan 09:30 - 16.00</strong></label>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>                   
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection