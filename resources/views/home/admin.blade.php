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
	      <div class="statistics col-lg-4 col-12">
	        <div class="statistic d-flex align-items-center bg-white has-shadow">
	          <div class="icon bg-red"><i class="fa fa-tasks"></i></div>
	          <div class="text"><strong>234</strong><br><small>Applications</small></div>
	        </div>
	        <div class="statistic d-flex align-items-center bg-white has-shadow">
	          <div class="icon bg-green"><i class="fa fa-calendar-o"></i></div>
	          <div class="text"><strong>152</strong><br><small>Interviews</small></div>
	        </div>
	        <div class="statistic d-flex align-items-center bg-white has-shadow">
	          <div class="icon bg-orange"><i class="fa fa-paper-plane-o"></i></div>
	          <div class="text"><strong>147</strong><br><small>Forwards</small></div>
	        </div>
	      </div>
	      <!-- Line Chart            -->
	      <div class="col-lg-8">
	        <div class="bar-chart-example card">
	          <div class="card-header d-flex align-items-center">
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
			var ctx1 = $("canvas").get(0).getContext("2d");
			var gradient1 = ctx1.createLinearGradient(150, 0, 150, 300);
			gradient1.addColorStop(0, 'rgba(133, 180, 242, 0.91)');
			gradient1.addColorStop(1, 'rgba(255, 119, 119, 0.94)');

			var gradient2 = ctx1.createLinearGradient(146.000, 0.000, 154.000, 300.000);
			gradient2.addColorStop(0, 'rgba(104, 179, 112, 0.85)');
			gradient2.addColorStop(1, 'rgba(76, 162, 205, 0.85)');

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
