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
    <li><a href="#user" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-user-o"></i>Anggota </a>
      <ul id="user" class="collapse list-unstyled">
        <li><a href="/user">Daftar Anggota</a></li>
        <li><a href="/user/create"><i class="fa fa-plus"></i>Tambah Anggota</a></li>
      </ul>
    </li>
    <li>
      <a href="#poktan" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-address-book-o"></i>Kelompok Tani </a>
      <ul id="poktan" class="collapse list-unstyled"> 
        <li><a href="/poktan">Daftar kelompok tani</a></li>
      </ul>
    </li>
    <li>
      <a href="#supplier" aria-expanded="false" data-toggle="collapse"> <i class="fa fa-opencart"></i>Supplier </a>
      <ul id="supplier" class="collapse list-unstyled"> 
        <li><a href="/supplier">Daftar Supplier</a></li>
      </ul>
    </li>
    <li><a href="/price"> <i class="fa fa-btc"></i>Harga kedelai</a></li>
  </ul><span class="heading">Kedelai</span>
  <ul class="list-unstyled">
    <li> <a href="/onfarm"> <i class="fa fa-envira"></i>On farm </a></li>
    <li> <a href="/harvest"> <i class="fa fa-archive"></i>Pasca panen </a></li>
    <li> <a href="/sales"> <i class="fa fa-credit-card"></i>Penjualan 
      @if ($newSales != 0)
        <span class="badge badge-pill badge-warning">{{ $newSales }}</span>
      @endif
    </a></li>
  </ul>
</nav>