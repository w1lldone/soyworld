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
  </ul><span class="heading">Kedelai</span>
  <ul class="list-unstyled">
    <li> <a href="/onfarm"> <i class="fa fa-envira"></i>On farm </a></li>
    <li> <a href="/harvest"> <i class="fa fa-archive"></i>Pasca panen </a></li>
    <li> <a href="#"> <i class="icon-form"></i>Gudang </a></li>
  </ul>
</nav>