@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Dashboard</h2>
  </div>
</header>

<div class="content-wrapper">
	<!-- Dashboard Header Section    -->
	<section class="dashboard-header">
	  <div class="container-fluid">
	    <div class="row">
	      <div class="col-12">
		      @include('layouts.alerts')
	      </div>
	      <!-- Statistics -->
	      <div class="statistics col-lg-4 sticky-top">
	      	<!-- STOCK -->
	      	<div class="statistic d-flex align-items-center bg-white has-shadow">
	      	  <div class="icon bg-violet"><i class="fa fa-tasks"></i></div>
	      	  <div class="text"><strong>{{ $stock }} Kg</strong><br>Stok aktif</div>
	      	</div>
	      	<!-- HARGA KEDELAI -->
	      	<div class="statistic d-flex align-items-center bg-white has-shadow">
	      	  <div class="icon bg-violet"><i class="fa fa-tasks"></i></div>
	      	  <div class="text"><strong>Rp. {{ $price }}</strong><br>Harga kedelai</div>
	      	</div>	      	
	      </div>
	      <div class="col-lg-8">
	      	{{-- TRANSACTION --}}
	      	<div class="articles card mb-3">
	      	  <div class="card-header d-flex align-items-center bg-violet">
	      	    <h2 class="h3">Transaksi butuh tindakan</h2>
	      	  </div>
	      	  <div class="card-body">
	      	    @if ($sales->isEmpty())
	      	      <div class="pt-2 pb-4 text-center">
	      	        <img src="/img/stock/shop_shopping.svg" class="img-fluid" width="150px">
	      	        <h4 class="text-light text-muted">Tidak ada Transaksi</h4>
	      	      </div>
      	        <a href="/sales" class="btn btn-info">Semua transaksi</a>
	      	    @endif
	      	    <!-- TRANSACTION LIST -->
	      	    <table class="table table-hover mb-0">
	      	    	<tbody>
	      	    		@foreach ($sales as $sale)
	      	    			<tr class="linked-row" data-href="/sales/{{ $sale->id }}">
	      	    				<td><b>#{{ $sale->code }}</b><br><span>{{ $sale->total_quantity }} Kg</span></td>
	      	    				<td class="text-right"><small>{{ $sale->updated_at->diffForHumans() }}</small> <br> <span class="badge badge-{{ $sale->status->status_color }}">{{ $sale->status->name }}</span> </td>
	      	    			</tr>
	      	    		@endforeach
	      	    	</tbody>
	      	    </table>
	      	  </div>
	      	</div>
	      </div>
	      <!-- Line Chart            -->
	      <div class="col-lg-8 offset-lg-4">
	        <div class="bar-chart-example card">
	          <div class="card-header d-flex align-items-center bg-violet">
	            <h3 class="h4">Grafik panen kedelai {{ date('Y') }}</h3>
	          </div>
	          <div class="card-body">
	            <canvas id="barChartCustom"></canvas>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
</div>


@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function () {
			// var ctx1 = $("canvas").get(0).getContext("2d");
			// var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
			// gradient1.addColorStop(0, 'rgba(133, 180, 242, 0.91)');
			// gradient1.addColorStop(1, 'rgba(255, 119, 119, 0.94)');

			// var gradient2 = ctx1.createLinearGradient(146.000, 0.000, 154.000, 300.000);
			// gradient2.addColorStop(0, 'rgba(104, 179, 112, 0.85)');
			// gradient2.addColorStop(1, 'rgba(76, 162, 205, 0.85)');

			// ------------------------------------------------------- //
	    // Bar Chart
	    // ------------------------------------------------------ //
	    var BARCHARTEXMPLE    = $('#barChartCustom');
	    var barChartCustom = new Chart(BARCHARTEXMPLE, {
	        type: 'bar',
	        options: {
	            scales: {
	                xAxes: [{
	                    display: true,
	                    gridLines: {
	                        color: '#eee'
	                    }
	                }],
	                yAxes: [{
	                    display: true,
	                    gridLines: {
	                        color: '#eee'
	                    }
	                }]
	            },
	        },
	        data: {
	            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember"],
	            datasets: [
	                {
	                    label: "Panen kedelai (kg)",
	                    backgroundColor: '#54e69d',
	                    borderWidth: 1,
	                    data: [
	                    	@foreach ($annuals as $annual)
	                    		{{ $annual }},
	                    	@endforeach
	                    ],
	                }
	            ]
	        }
	    });
		})
	</script>
@endsection
