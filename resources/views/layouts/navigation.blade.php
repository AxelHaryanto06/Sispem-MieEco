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
                              <li class="nav-item linkakun">
                                <?php
                                  $pesanan_utama = \App\Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
                                  if (!empty($pesanan_utama)) 
                                  {                                    
                                    $notif = \App\DetailPesanan::where('id_pesanan', $pesanan_utama->id)->count();
                                  }
                                ?>      
                                <a class="nav-link" href="{{ url('cart') }}">
                                  <i class="fas fa-shopping-cart"></i>
                                  @if (!empty($notif))
                                    <span class="badge badge-danger badge-radius">{{ $notif }}</span>                                    
                                  @endif
                                </a>
                              </li>
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