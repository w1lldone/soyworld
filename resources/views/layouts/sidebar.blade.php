<nav class="side-navbar scroll">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="img/person.svg" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h4">{{auth()->user()->name}}</h1>
      <p>Web Designer</p>
    </div>
  </div>

  <!-- Sidebar Navidation Menus-->
  <span class="heading">Utama</span>
  <ul class="list-unstyled">
    <li class="active"> <a href="/home"><i class="icon-home"></i>Home</a></li>
    <li><a href="#dashvariants" aria-expanded="false" data-toggle="collapse"> <i class="icon-user"></i>Anggota </a>
      <ul id="dashvariants" class="collapse list-unstyled">
        <li><a href="#">Daftar Anggota</a></li>
        <li><a href="#">Tambah Anggota</a></li>
      </ul>
    </li>
  </ul><span class="heading">Kedelai</span>
  <ul class="list-unstyled">
    <li> <a href="#"> <i class="icon-grid"></i>Pra panen </a></li>
    <li> <a href="#"> <i class="icon-form"></i>Pasca panen </a></li>
    <li> <a href="#"> <i class="icon-form"></i>Gudang </a></li>
  </ul>
</nav>