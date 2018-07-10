<div class="bgded overlay" style="background-image:url('images/demo/backgrounds/coin.jpg');"> 
<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="{{route('welcome')}}">Unit Keamanan Kampus</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="{{route('welcome')}}">Beranda</a></li>
          <li><a class="drop" href="#">Informasi</a>
            <ul>
              <li><a href="{{route('laporan.view')}}">Buat Laporan</a></li>
              <li><a href="{{route('kontak.view')}}">Kontak Penting</a></li>
              <li><a href="{{route('pelayanan.view')}}">Pelayanan & Pengembangan </a></li>
              <li><a href="{{route('tupoksi.view')}}">Tupoksi UKK IPB </a></li>
            </ul>
          </li>
        @guest
      <li class=><a href="{{ route('login') }}">Masuk</a></li>
        @else
                <li><a class="drop" href="#">{{Auth:: user()-> name}}</a>
                  <ul>
                  <!-- <li><a href="{{route('profil.view')}}">Profil </a></li> -->
                  <li><a href="{{route('laporan-saya.view')}}">Laporan Saya</a></li>
                  <li><a href="{{route('logout')}}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Logout</a></li>
                  </ul>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                     </form>
         @endguest
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
</div>