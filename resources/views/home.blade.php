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
	      <!-- Statistics -->
	      <div class="statistics col-lg-3 col-12">
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
	      <div class="chart col-lg-6 col-12">
	        <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
	          <canvas id="lineCahrt"></canvas>
	        </div>
	      </div>
	      <div class="chart col-lg-3 col-12">
	        <!-- Bar Chart   -->
	        <div class="bar-chart has-shadow bg-white">
	          <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
	          <canvas id="barChartHome"></canvas>
	        </div>
	        <!-- Numbers-->
	        <div class="statistic d-flex align-items-center bg-white has-shadow">
	          <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
	          <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>
</div>


@endsection
