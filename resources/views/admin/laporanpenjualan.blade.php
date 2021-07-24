<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laporan Penjualan</title>
</head>
<body>
    <img src="{{ public_path("/img/mieeco2 2.png") }}" width="219" height="41" class="d-inline-block align-top" alt="">    
    <table class="table table-bordered">
        <thead>
            <tr class="text-center">                            
                <th>No</th>
                <th>ID Pesanan</th>
                <th>Atas Nama</th>
                <th>Tanggal Pesan</th>                
                <th>Total</th>
                <th>Layanan</th>                                                     
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1
            @endphp  
            @foreach ($data_pesanan as $jualan)
            <tr>                           
                <td>{{ $no++ }}</td>
                <td>ME201400{{ $jualan->id_pesanan }}</td>
                <td>{{ $jualan->user->name }}</td>
                <td>{{ $jualan->tanggal }}</td>                
                <td class="text-right">Rp. {{ number_format($jualan->total) }}</td>
                <td>{{ $jualan->layanan->jenis }}</td>                            
            </tr>                            
            @endforeach                      
        </tbody>
    </table>
</body>
</html>