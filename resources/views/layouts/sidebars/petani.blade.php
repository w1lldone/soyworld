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
    <li class="@if(starts_with($route, 'home')) active @endif"> <a href="{{ route('home') }}"><i class="icon-home"></i>Home</a></li>
    <li class="@if(starts_with($route, 'supplier')) active @endif">
      <a href="#supplier" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-opencart"></i>Supplier </a>
      <ul id="supplier" class="collapse list-unstyled"> 
        <li><a href="{{ route('supplier.index') }}">Daftar Supplier</a></li>
      </ul>
    </li>
    @if (auth()->user()->isPoktanLeader())
      <li class="@if(starts_with($route, 'sales')) active @endif">
        <a href="/sales"> <i class="fa fa-envelope-open-o"></i>Kedelai dipesan
          @if ($newSales != 0)
            <span class="badge badge-pill badge-warning">{{ $newSales }}</span>
          @endif
        </a>
      </li>
    @endif
    <li class="@if(starts_with($route, 'report')) active @endif">
      <a href="#report" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-list-alt"></i>Laporan </a>
      <ul id="report" class="collapse list-unstyled">
        <li><a href="{{ route('report.farmer.index') }}">Laporan petani</a></li>
        @if (auth()->user()->isPoktanLeader())
          <li><a href="{{ route('report.poktan.index') }}">Laporan poktan</a></li>
        @endif 
      </ul>
    </li>
  </ul><span class="heading">Kedelaiku</span>
  <ul class="list-unstyled">
    <li class="@if(starts_with($route, 'onfarm')) active @endif"> <a href="{{ route('onfarm.index') }}"> <i class="fa fa-envira"></i>On farm </a></li>
    <li class="@if(starts_with($route, 'harvest')) active @endif"> <a href="{{ route('harvest.index') }}"> <i class="fa fa-archive"></i>Pasca panen </a></li>
    <li class="@if(starts_with($route, 'sold')) active @endif"> <a href="{{ route('sold.index') }}"> <i class="fa fa-shopping-cart"></i>Riwayat penjualan</a></li>
  </ul>
</nav>
