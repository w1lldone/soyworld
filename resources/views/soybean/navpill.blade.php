<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link {{ request('tab') == 'stok-aktif' ? 'active' : '' }}" href="/soybean?tab=stok-aktif">Stok aktif</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request('tab') == 'stok-tidak-aktif' ? 'active' : '' }}" href="/soybean?tab=stok-tidak-aktif">Stok tidak aktif</a>
  </li>
  <li class="nav-item">
    <a class="nav-link {{ request('tab') == 'onfarm' ? 'active' : '' }}" href="/soybean?tab=onfarm">Onfarm</a>
  </li>
</ul>