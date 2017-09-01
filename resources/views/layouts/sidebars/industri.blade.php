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
  </ul>
  <span class="heading">Kedelai</span>
  <ul class="list-unstyled">
    <li> <a href="/soybean?tab=stok-aktif"> <i class="fa fa-envira"></i>Kedelai</a></li>
    <li> <a href="/transaction"> <i class="fa fa-archive"></i>Transaksi</a></li>
  </ul>
</nav>