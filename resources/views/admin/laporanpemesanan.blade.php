<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Laporan Penjualan</title>
    <style>
        .tulisan-kanan{
            text-align: right
        }

        .tulisan-tengah{
            text-align: center;
        }        

        .logo-admin{
            display: inline-block !important;
            vertical-align: text-top;
        }

        .alamat{
            margin-top: 10px;
        }

        .line{
            border-top: 1px solid;
            margin-bottom: 10px;
        }

        .periode{
            text-align: center;
        }

        .table-laporan{
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <p class="logo-admin">
        <img src="{{ public_path("/img/mie-eco-black.png") }}" width="219" height="41" alt="">
    </p>
    <p class="alamat">Jln. Pramuka No.232 A, Purwokerto, Jawa Tengah</p>
    <p class="line"></p>
    <p><h4 class="tulisan-tengah">Laporan Pemesanan</h4></p>
    <p class="periode">Periode {{ $tglawal }} sampai {{ $tglakhir }}</p>
    <table class="table table-bordered table-laporan w-auto">
        <thead>
            <tr class="tulisan-tengah">                            
                <th>No</th>
                <th>ID Pesanan</th>
                <th>Atas Nama</th>
                <th>Tanggal Pesan</th>                                                                     
                <th>Menu</th>                                                                     
                <th>Jumlah</th>                                                                     
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1
            @endphp  
            @foreach ($data_pesanan as $pesanan)
            <tr>                           
                <td class="tulisan-tengah">{{ $no++ }}</td>
                <td>ME201400{{ $pesanan->id_pesanan }}</td>
                <td>{{ $pesanan->pesanan->user->name }}</td>
                <td>{{ $pesanan->pesanan->tanggal }}</td>                
                <td>{{ $pesanan->menu->nama_menu }}</td>                            
                <td>{{ $pesanan->jumlah }}</td>                            
                <td class="tulisan-kanan">Rp. {{ number_format($pesanan->jml_harga) }}</td>
            </tr>                            
            @endforeach
            <tr>
                <td colspan="6" align="right"><strong>Total Penjualan :</strong></td>
                <td align="right"><strong>Rp. {{ number_format($data_pesanan->sum('jml_harga')) }}</strong></td>                            
            </tr>                     
        </tbody>
    </table>
    <div>Laporan Menu Terbanyak di Pesan</div>
    <table class="table table-sm table-borderless w-auto">
        <thead>
            <tr>
                <th>Menu</th>                
                <th>Jumlah</th>                
            </tr>            
        </thead>
        <tbody>
            <tr>
                <td>{{ $menu_terbanyak->menu->nama_menu }}</td>
                <td class="tulisan-tengah">{{ $menu_terbanyak->jumlah }}</td>
            </tr>
        </tbody>
    </table>    
</body>
</html>