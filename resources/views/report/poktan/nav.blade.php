<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link"><h3>Laporan poktan</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.poktan.farmer') active @endif" href="{{ route('report.poktan.farmer') }}">Kontribusi petani</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.poktan.sales') active @endif" href="{{ route('report.poktan.sales') }}">Penjualan</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.poktan.soybean') active @endif" href="{{ route('report.poktan.soybean') }}">Tanam dan panen</a>
  </li>
</ul>
