<nav class="side-navbar scroll">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="/img/person.svg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h4"><a href="/profile">{{auth()->user()->name}}</a></h1>
      <p>{{ auth()->user()->privilage->name }}</p>
    </div>
  </div>

  <!-- Sidebar Navidation Menus-->
  <span class="heading">Utama</span>
  <ul class="list-unstyled">
    <li> <a href="/home"><i class="icon-home"></i>Home</a></li>
    <li>
      <a href="#supplier" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-opencart"></i>Supplier </a>
      <ul id="supplier" class="collapse list-unstyled"> 
        <li><a href="/supplier">Daftar Supplier</a></li>
      </ul>
    </li>
    @if (auth()->user()->isPoktanLeader())
      <li> <a href="/sales"> <i class="fa fa-envelope-open-o"></i>Kedelai dipesan</a></li>
    @endif
    <li>
      @if (auth()->user()->isPoktanLeader())
        <a href="#report" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list-alt"></i>Laporan </a>
      @endif
      <ul id="report" class="collapse list-unstyled">
        @if (auth()->user()->isPoktanLeader())
          <li><a href="{{ route('report.poktan.index') }}">Laporan poktan</a></li>
        @endif 
      </ul>
    </li>
  </ul><span class="heading">Kedelaiku</span>
  <ul class="list-unstyled">
    <li> <a href="/onfarm"> <i class="fa fa-envira"></i>On farm </a></li>
    <li> <a href="/harvest"> <i class="fa fa-archive"></i>Pasca panen </a></li>
    <li> <a href="/sold"> <i class="fa fa-shopping-cart"></i>Riwayat penjualan</a></li>
  </ul>
</nav>
