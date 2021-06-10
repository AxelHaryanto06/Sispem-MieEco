<nav class="navbar navbar-expand-lg navigation-bar">
  <div class="container">
  <a class="navbar-brand" href="/">
    <img src="/img/mieeco2 2.svg" width="219" height="41" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user/menu">Menu</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/user/contact">Contact</a>
      </li>
    </ul>
    <div class="navbar-text">
                        @guest
                            <li class="nav-item linkakun">      
                                <a class="nav-link" href="{{ route('login') }}">
                                <i class="far fa-user"></i> {{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item linkakun">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                          <div class="navigation-link">
                              <!-- Button trigger modal -->
                              <button type="button" class="btn" data-toggle="modal" data-target="#exampleModalCenter">
                                <i class="fas fa-shopping-cart"></i>
                                  <?php
                                    $pesanan_utama = \App\Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
                                    if (!empty($pesanan_utama)) 
                                    {                                    
                                      $notif = \App\DetailPesanan::where('id_pesanan', $pesanan_utama->id)->count();
                                    }
                                  ?>
                                  @if (!empty($notif))
                                    <span class="badge badge-danger badge-radius">{{ $notif }}</span>                                    
                                  @endif
                              </button>

                              <!-- Modal -->
                              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title cart-mieeco-modaltitle">Keranjang</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      @if ($notif == 0)
                                        <div class="alert alert-danger" role="alert">
                                          Keranjang anda kosong, silakan lakukan pemesanan
                                        </div>
                                      @else
                                        <?php                                                                                                                                                                                                                                                         
                                          $pesanan = \App\Pesanan::where('id_user', Auth::user()->id)->where('status', 0)->first();
                                          $pesanans = DB::table('pesanans')->join('pelayanan','pesanans.id_layanan','=','pelayanan.id_layanan')->where('id_user', Auth::user()->id)->where('status', 0)->get();                                                                                    
                                          if (!empty($pesanan)) {            
                                              $detail_pesanans = \App\DetailPesanan::where('id_pesanan', $pesanan->id)->get();
                                          }                                          
                                        ?>                                        
                                        @if (!empty($pesanan))                                          
                                          <div class="cart-info text-layanan-mieeco">
                                            <table class="table table-sm table-borderless w-auto">
                                              <tbody>
                                                <tr>
                                                  <td class="small">Layanan</td>
                                                  <td class="small">:</td>
                                                  <td class="text-mieeco-red small">{{ $pesanans[0]->jenis }}</td>                                                                                                      
                                                </tr>
                                                <tr>
                                                  <td class="small">Tanggal Pesan</td>
                                                  <td class="small">:</td>
                                                  <td class="text-mieeco-red small">{{ $pesanan->tanggal }}</td>                                                                                                      
                                                </tr>
                                              </tbody>
                                            </table>
                                          </div>
                                          <div class="show-cart">
                                            <div class="card card-rounded mb-3">
                                              <div class="cart-body">
                                                <table class="table table-borderless">
                                                  <thead>
                                                      <tr>                            
                                                          <th class="cart-page-menu">Menu</th>
                                                          <th>Kuantitas</th>
                                                          <th>Harga</th>
                                                          <th>Jumlah Harga</th>
                                                          <th>Aksi</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                      @foreach ($detail_pesanans as $detail_pesanan)
                                                      <tr id="sid{{$detail_pesanan->id}}">                           
                                                          <td>
                                                              <div class="col-md-12 cart-page-namamenu">
                                                                  {{ $detail_pesanan->menu->nama_menu }}
                                                              </div>                                
                                                              <div class="col-md-12 cart-page-catatan mt-2">
                                                                  <i>{{ $detail_pesanan->catatan }}</i>
                                                              </div>                                
                                                          </td>
                                                          <td class="cart-jumlah" align="center" value="{{ $detail_pesanan->jumlah }}">{{ $detail_pesanan->jumlah }}</td>
                                                          <td class="cart-harga" align="left">Rp. {{ number_format($detail_pesanan->menu->harga) }}</td>
                                                          <td align="left">Rp. {{ number_format($detail_pesanan->jml_harga) }}</td>
                                                          <td>
                                                              {{-- <form action="{{ url('cart') }}/{{ $detail_pesanan->id }}" method="post">
                                                                  @csrf
                                                                  @method('DELETE') --}}
                                                                  <button href="javascript:void(0)" class="btn btn-danger btn-sm" onclick="deleteCart({{ $detail_pesanan->id }})"><i class="fas fa-trash-alt"></i></button>
                                                              {{-- </form> --}}
                                                          </td>
                                                      </tr>                            
                                                      @endforeach                                                      
                                                  </tbody>
                                              </table>
                                              </div>
                                            </div>
                                          </div>                                                                                                                                                             
                                        @endif
                                      @endif
                                    </div>
                                    <div class="modal-footer">                                      
                                      <p class="text-subtotal-mieeco">Total : </p>
                                      <div id="totalajaxcall">
                                        <div class="totalload">
                                          <div class="text-subtotal-mieeco">Rp. {{ number_format($pesanan->total) }}</div>
                                        </div>
                                      </div>
                                      <button type="button" class="btn btn-outline-mieeco" data-dismiss="modal">Kembali</button>
                                      <a href="{{ url('check-out') }}" class="btn btn-cart">Buat Pesanan</a>
                                    </div>
                                  </div>
                                </div>
                              </div>                                                            
                              <li class="nav-item dropdown">
                                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                      {{ Auth::user()->name }} <span class="caret"></span>
                                  </a>

                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ url('profile') }}">
                                        Profile
                                      </a>
                                      
                                      <a class="dropdown-item" href="{{ url('history') }}">
                                        Riwayat Pemesanan
                                      </a>
                                      
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          </div>
                        @endguest
    </div>
  </div>
  </div>
</nav>