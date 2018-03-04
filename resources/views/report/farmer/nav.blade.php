<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link"><h3>Laporan Petani</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.farmer.soybean') active @endif" href="{{ route('report.farmer.soybean') }}">Tanam dan panen</a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.farmer.sales') active @endif" href="{{ route('report.farmer.sales') }}">Penjualan</a>
  </li>
</ul>
