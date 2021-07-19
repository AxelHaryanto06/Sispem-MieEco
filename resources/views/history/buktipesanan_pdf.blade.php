<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">       
    <title>Document</title>
</head>
<body>
    <img src="{{ public_path("/img/mieeco2 2.png") }}" width="219" height="41" class="d-inline-block align-top" alt="">
    <table class="table table-sm table-borderless w-auto mt-4">
        <tbody>
            <tr>
                <td>Layanan</td>
                <td>:</td>
                <td>{{ $pesanan->layanan->jenis }}</td>
            </tr>
            <tr>
                <td>Tanggal Pesan</td>
                <td>:</td>
                <td>{{ $pesanan->tanggal }}</td>
            </tr>
            <tr>
                <td>Kode Pesanan</td>
                <td>:</td>
                <td>ME201400{{ $pesanan->id }}</td>
            </tr>
        </tbody>
    </table>
    <table class="table table-bordered">
        <thead>
            <tr>                            
                <th class="cart-page-menu text-center">Menu</th>
                <th class="th-menu text-center">Kuantitas</th>
                <th class="th-menu text-center">Harga</th>
                <th class="th-menu text-center">Jumlah Harga</th>                            
            </tr>
        </thead>
        <tbody>
            @foreach ($detail_pesanans as $detail_pesanan)
            <tr>                           
                <td>
                    <div class="col-md-12 cart-page-namamenu">
                        {{ $detail_pesanan->menu->nama_menu }}
                    </div>                                
                    <div class="col-md-12 cart-page-catatan mt-2">
                        <i>{{ $detail_pesanan->catatan }}</i>
                    </div>                                
                </td>
                <td style="text-align: center">{{ $detail_pesanan->jumlah }}</td>
                <td align="right">Rp. {{ number_format($detail_pesanan->menu->harga) }}</td>
                <td align="right">Rp. {{ number_format($detail_pesanan->jml_harga) }}</td>                            
            </tr>                            
            @endforeach
            <tr>
                <td colspan="3" align="right"><strong>Total Harga :</strong></td>
                <td align="right"><strong>Rp. {{ number_format($pesanan->total) }}</strong></td>                            
            </tr>            
        </tbody>
    </table>
</body>
</html>