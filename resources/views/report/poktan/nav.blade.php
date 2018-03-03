<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.poktan.farmer') active @endif" href="{{ route('report.poktan.farmer') }}">Kontribusi petani</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.poktan.sales') active @endif" href="{{ route('report.poktan.sales') }}">Penjualan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Tanam dan panen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" href="#">Disabled</a>
  </li>
</ul>
