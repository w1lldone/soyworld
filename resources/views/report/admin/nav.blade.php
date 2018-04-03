<ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link"><h3>Laporan admin</h3></a>
  </li>
  <li class="nav-item">
    <a class="nav-link @if($route == 'report.admin.sales') active @endif" href="{{ route('report.admin.sales') }}">Penjualan</a>
  </li>
</ul>
