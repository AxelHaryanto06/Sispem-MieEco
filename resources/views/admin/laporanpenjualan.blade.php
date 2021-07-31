<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laporan Penjualan</title>
    <style>
        .line{
            border-top: 1px solid;
        }
    </style>
</head>
<body>
    <img src="{{ public_path("/img/mie-eco-black.png") }}" width="219" height="41" class="d-inline-block align-top logo-admin" alt="">
    <p>Jln. Pramuka No.232 A, Purwokerto, Jawa Tengah</p>
    <div class="line"></div>
    <h4 class="text-center mt-3">Laporan Penjualan</h4>
    <table class="table table-bordered mt-3">
        <thead>
            <tr class="text-center">                            
                <th>No</th>
                <th>ID Pesanan</th>
                <th>Atas Nama</th>
                <th>Tanggal Pesan</th>                
                <th>Layanan</th>                                                     
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1
            @endphp  
            @foreach ($data_pesanan as $jualan)
            <tr>                           
                <td class="text-center">{{ $no++ }}</td>
                <td>ME201400{{ $jualan->id }}</td>
                <td>{{ $jualan->user->name }}</td>
                <td>{{ $jualan->tanggal }}</td>                
                <td>{{ $jualan->layanan->jenis }}</td>                            
                <td class="text-right">Rp. {{ number_format($jualan->total) }}</td>
            </tr>                            
            @endforeach
            <tr>
                <td colspan="5" align="right"><strong>Total Penjualan :</strong></td>
                <td align="right"><strong>Rp. {{ number_format($data_pesanan->sum('total')) }}</strong></td>                            
            </tr>                     
        </tbody>
    </table>
    <div>Laporan Jumlah Layanan</div>
    <table class="table table-sm table-borderless w-auto mt-4">
        <tbody>
            <tr>
                <td>Dine In</td>
                <td>:</td>
                <td>{{ $dine_in }}</td>
            </tr>
            <tr>
                <td>Take Away</td>
                <td>:</td>
                <td>{{ $take_away }}</td>
            </tr>
        </tbody>
    </table>    
</body>
</html>