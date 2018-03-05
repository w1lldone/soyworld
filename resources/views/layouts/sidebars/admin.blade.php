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
    <li class="@if(starts_with($route, 'home')) active @endif"> <a href="/home"><i class="icon-home"></i>Home</a></li>
    <li class="@if(starts_with($route, 'user')) active @endif"><a href="#user" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-o"></i>Anggota </a>
      <ul id="user" class="collapse list-unstyled">
        <li><a href="/user">Daftar Anggota</a></li>
        <li><a href="/user/create"><i class="fa fa-plus"></i>Tambah Anggota</a></li>
      </ul>
    </li>
    <li class="@if(starts_with($route, 'poktan')) active @endif">
      <a href="#poktan" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-address-book-o"></i>Kelompok Tani </a>
      <ul id="poktan" class="collapse list-unstyled"> 
        <li><a href="/poktan">Daftar kelompok tani</a></li>
      </ul>
    </li>
    <li class="@if(starts_with($route, 'supplier')) active @endif">
      <a href="#supplier" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-opencart"></i>Supplier </a>
      <ul id="supplier" class="collapse list-unstyled"> 
        <li><a href="/supplier">Daftar Supplier</a></li>
      </ul>
    </li>
    <li class="@if(starts_with($route, 'price')) active @endif"><a href="/price"> <i class="fa fa-btc"></i>Harga kedelai</a></li>
  </ul><span class="heading">Kedelai</span>
  <ul class="list-unstyled">
    <li class="@if(starts_with($route, 'onfarm')) active @endif"> <a href="/onfarm"> <i class="fa fa-envira"></i>On farm </a></li>
    <li class="@if(starts_with($route, 'harvest')) active @endif"> <a href="/harvest"> <i class="fa fa-archive"></i>Pasca panen </a></li>
  </ul>
</nav>
