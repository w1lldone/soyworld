@extends('layouts.master')

@section('content')
	<header class="page-header">
	  <div class="container-fluid">
	    <h2 class="no-margin-bottom">Detail Panen</h2>
	  </div>
	</header>

	<!-- Breadcrumb-->
	<ul class="breadcrumb">
	  <div class="container-fluid">
	  	<li class="breadcrumb-item"><a href="/harvest">Panen</a></li>
	    <li class="breadcrumb-item active">Detail panen</li>
	  </div>
	</ul>

	<!-- CONTENT WRAPPER -->
	<div class="content-wrapper">
	  <!-- SECTION SUMMARY -->
	  <section class="dashboard-counts no-padding-bottom">
	  	<div class="container-fluid">
	  	  <div class="row bg-white has-shadow py-2">
	  	    <div class="col-12">
	  	      @include('layouts.alerts')
	  	    </div>
	  	    <!-- Item -->
	  	    <div class="col-xl-4 col-sm-6 ">
	  	      <div class="item mx-2" style="border: none;">
	  	        <div class="clearfix">
	  	          <h4 class="float-left m-0">Onfarm:</h4>
	  	          <a class="round-link mt-0 float-right" href="/onfarm/{{$harvest->onfarm->id}}/view">Detail</a>
	  	        </div>
	  	        <div class="clearfix mt-2">
	  	          <h4 class="float-left">Penanaman:</h4>
	  	          <span class="float-right">{{ $harvest->harvested_at->format('j F Y') }}</span>
	  	        </div>
	  	      </div>
	  	    </div>
	  	    <!-- Item -->
	  	    <div class="col-xl-4 col-sm-6">
	  	      <div class="item mx-2" style="border: none;">
	  	      	<div class="clearfix">
	  	      	  <h4 class="float-left">Stok awal</h4>
	  	      	  <h4 class="float-right">{{ $harvest->initial_stock }} Kg</h4>
	  	      	</div>
	  	      	<div class="clearfix">
	  	      	  <h4 class="float-left">Terjual</h4>
	  	      	  <h4 class="float-right">{{ $harvest->initial_stock-$harvest->ending_stock }} Kg</h4>
	  	      	</div>
	  	        <div class="progress mt-2">
	  	          <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $harvest->stockPercent()  }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
	  	        </div>
	  	      </div>
	  	    </div>  
	  	    <!-- Item -->
	  	    <div class="col-xl-4 col-sm-6">
	  	      <div class="item mx-2">
  	            <div class="clearfix">
  	              <p class="float-left m-0">Total biaya</p>
  	              <p class="float-right m-0">Rp. 1.500.000</p>
  	            </div>
  	            <div class="clearfix">
  	              <p class="float-left m-0">Total pendapatan</p>
  	              <p class="float-right m-0">Rp. 2.500.000</p>
  	            </div>
  	            <hr class="my-1">
  	            <div class="clearfix">
  	              <p class="float-left m-0">Total Keuntungan</p>
  	              <p class="float-right m-0">Rp. 1.000.000</p>
  	            </div>
	  	      </div>
	  	    </div>        
	  	  </div>
	  	</div>
	  </section>

	  <!-- SECTION POSTHARVEST -->
	  <section class="py-3">
	      <div class="container-fluid">
	        <div class="row">
	          <!-- POSTHARVEST HANDLING -->
	          <div class="col-lg-6">
	          	<div class="recent-updates card">
	          	  <div class="card-close">
	          	    <div class="dropdown">
	          	      <a href="#" class="text-white" title="Tambah penanganan pasca panen" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
	          	    </div>
	          	  </div>
	          	  <div class="card-header bg-blue text-white">
	          	    <h3 class="h4">Penanganan pasca panen</h3>
	          	  </div>
	          	  <div class="card-body no-padding">
	          	    <a href="/postharvest/1/view" class="item-link">
	          	  	  <div class="item d-flex justify-content-between">
	          	  	    <div class="info d-flex">
	          	  	      <div class="icon"><i class="fa fa-shopping-bag text-muted"></i></div>
	          	  	      <div class="title">
	          	  	        <h5>Pengeringan</h5>
	          	  	        <p>Rp. 5000</p>
	          	  	      </div>
	          	  	    </div>
	          	  	    <div class="date text-right"><strong>24</strong><span>May</span></div>
	          	  	  </div>
	          	  	</a>
	          	  </div>
	          	</div>
	          </div>
	          <!-- PENJUALAN -->
	          <div class="col-lg-6">
	          	<div class="recent-updates card">
	          	  <div class="card-header bg-green text-white">
	          	    <h3 class="h4">Penjualan</h3>
	          	  </div>
	          	  <div class="card-body no-padding">
	          	    <a href="/postharvest/1/view" class="item-link">
	          	  	  <div class="item d-flex justify-content-between">
	          	  	    <div class="info d-flex">
	          	  	      <div class="icon"><i class="fa fa-shopping-bag text-muted"></i></div>
	          	  	      <div class="title">
	          	  	        <h5>Rp. 50.000</h5>
	          	  	        <p>PT. Tahu tuna pacitan</p>
	          	  	      </div>
	          	  	    </div>
	          	  	    <div class="date text-right"><strong>24</strong><span>May</span></div>
	          	  	  </div>
	          	  	</a>
	          	  </div>
	          	</div>
	          </div>
	        </div>
	      </div>
	    </section>
	</div>
@endsection