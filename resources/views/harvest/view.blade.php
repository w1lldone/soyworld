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
	  	  @include('layouts.alerts')
	  	  <div class="row bg-white has-shadow py-2">
	  	    <!-- Item -->
	  	    <div class="col-lg-4 col-sm-6 ">
	  	      <div class="item mx-2" style="border: none;">
	  	        <div class="clearfix">
	  	          <span class="float-left m-0"><strong>Tanam:</strong></span>
	  	          <span class="float-right">{{ $harvest->onfarm->planted_at->format('j F Y') }}</span>
	  	        </div>
	  	        <div class="clearfix">
	  	          <span class="float-left"><strong>Panen:</strong></span>
	  	          <span class="float-right">{{ $harvest->harvested_at->format('j F Y') }}</span>
	  	        </div>
	  	        <div class="clearfix">
	  	          <span class="float-left"><strong>Status:</strong></span>
	  	          <span class="float-right badge badge-pill badge-{{ $harvest->status_color }}" style="font-size: 100%">{{ $harvest->sale_status }}</span>
	  	        </div>
	  	      </div>
	  	    </div>
	  	    <!-- Item -->
	  	    <div class="col-lg-4 col-sm-6">
	  	      <div class="item mx-2" style="border: none;">
	  	      @if ($harvest->initial_stock == 0)
	  	      	<div class="text-muted text-center">
	  	      	  <i class="fa fa-archive fa-3x"></i>
	  	      	  <p class="text-light m-0">Stok belum tersedia</p>
	  	      	  <button data-toggle="modal" data-target="#tambahStok{{$harvest->id}}" class="round-link btn m-0">Tambah stok</button>
	  	      	</div>
			    @include('harvest.modal')
	  	      @else
	  	      	<div class="clearfix">
	  	      	  <h4 class="float-left">Stok awal</h4>
	  	      	  <h4 class="float-right">{{ $harvest->initial_stock }} Kg</h4>
	  	      	</div>
	  	      	<div class="clearfix">
	  	      	  <h4 class="float-left">Terjual</h4>
	  	      	  <h4 class="float-right">{{ $harvest->initial_stock-$harvest->ending_stock }} Kg</h4>
	  	      	</div>
	  	      	<div>
	  	          <span>Status stok:</span>
		  	      <div class="progress mt-0">
		  	        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $harvest->stockPercent()  }}%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">{{ $harvest->stockPercent() }}%</div>
		  	      </div>
	  	      	</div>
	  	      @endif
	  	      </div>
	  	    </div>  
	  	    <!-- Item -->
	  	    <div class="col-lg-4 col-sm-6">
	  	      <div class="item mx-2">
  	            <div class="clearfix">
  	              <p class="float-left m-0">Total biaya</p>
  	              <p class="float-right m-0">Rp. {{ $harvest->total_cost }}</p>
  	            </div>
  	            <div class="clearfix">
  	              <p class="float-left m-0">Total pendapatan</p>
  	              <p class="float-right m-0">Rp. {{ $harvest->income }}</p>
  	            </div>
  	            <hr class="my-1">
  	            <div class="clearfix">
  	              <p class="float-left m-0">Perkiraan Keuntungan</p>
  	              <p class="float-right m-0">Rp. {{ $harvest->revenue }}</p>
  	            </div>
	  	      </div>
	  	    </div> 
	  	  </div>
	  	  <div class="clearfix mt-2">
	  	  	<h2 class="d-inline"><span class="badge badge-default mr-4">Tindakan:</span></h2>
	  	    <a href="/onfarm/{{ $harvest->onfarm_id }}/view" class="btn btn-info btn-sm">Detail tanam</a>
	  	    @can('editStock', $harvest)
		  	    <a href="/harvest/{{ $harvest->id }}/edit/stock" class="btn btn-success btn-sm">Ubah stok</a>
	  	    @endcan
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
	          	  {{-- <div class="card-close">
	          	    <div class="dropdown">
	          	      <a href="/harvest/{{$harvest->id}}/postharvest" class="bg-white text-blue btn btn-sm" title="Tambah penanganan pasca panen" data-toggle="tooltip"><i class="fa fa-plus fa-fw"></i>Penanganan</a>
	          	    </div>
	          	  </div> --}}
	          	  <div class="card-header bg-blue text-white">
	          	    <h3 class="h4 d-inline">Penanganan pasca panen</h3>
	          	    <a href="/harvest/{{$harvest->id}}/postharvest" class="bg-white text-blue btn btn-sm float-right" title="Tambah penanganan pasca panen" data-toggle="tooltip"><i class="fa fa-plus fa-fw"></i>Penanganan</a>
	          	  </div>
	          	  <div class="card-body no-padding">
	          	    @if ($harvest->postharvest->isEmpty())
	          	      <div class="text-muted text-center py-3">
	          	        <i class="fa fa-balance-scale fa-5x"></i>
	          	        <p class="text-light mt-2">Belum ada penanganan</p>
	          	        <a href="/harvest/{{$harvest->id}}/postharvest" class="round-link">Tambah penanganan</a>
	          	      </div>
	          	    @else
	          	      @foreach ($harvest->postharvest as $postharvest)
	      	            <a href="/postharvest/{{ $postharvest->id }}" class="item-link">
	      	          	  <div class="item d-flex justify-content-between">
	      	          	    <div class="info d-flex">
	      	          	      <div class="icon"><i class="fa fa-shopping-bag text-muted"></i></div>
	      	          	      <div class="title">
	      	          	        <h5>{{ $postharvest->name }}</h5>
	      	          	        <p>Biaya: Rp. {{ $postharvest->cost }}</p>
	      	          	      </div>
	      	          	    </div>
	      	          	    <div class="date text-right">{{ $postharvest->date->format('j F Y') }}</div>
	      	          	  </div>
	      	          	</a>
	          	      @endforeach
	          	    @endif
	          	  </div>
	          	</div>
	          </div>
	          <!-- PENJUALAN -->
	          <div class="col-lg-6">
	          	<div class="recent-updates card">
	          	  <div class="card-header bg-green text-white clearfix">
	          	    <h3 class="h4 d-inline">Penjualan</h3>
	          	    <form method="POST" class="d-inline" action="/harvest/{{ $harvest->id }}/sale">
	          	    	{{ csrf_field() }}
	          	    	{{ method_field('PUT') }}
	          	      <input type="hidden" name="on_sale" value="{{ $harvest->salesAction() }}">
	          	      <button onclick="return confirm('Apa anda yakin akan mengubah status penjualan?')" class="btn text-green btn-sm btn-white float-right" type="submit">{{ $harvest->on_sale ? 'Berhenti jual' : 'Jual kedelai' }}</button>
	          	    </form>
	          	  </div>
	          	  <div class="card-body no-padding">
	          	  	@if ($sales->count() == 0)
  	  	    	      <div class="text-muted text-center py-3">
  	  	    	        <img src="/img/stock/shop_shopping.svg" class="img-fluid" width="150px">
  	  	    	        <p class="text-light m-0">Belum ada penjualan</p>
  	  	    	      </div>
	          	  	@else
	          	  	  @foreach ($sales as $sale)
	          	  	  	<a href="/postharvest/1/view" class="item-link">
		          	  	  <div class="item d-flex justify-content-between">
		          	  	    <div class="info d-flex">
		          	  	      <div class="icon"><i class="fa fa-shopping-bag text-muted"></i></div>
		          	  	      <div class="title">
		          	  	        <h5>Rp. {{ $sale->formattedTotalPrice() }}</h5>
		          	  	        <p><strong>{{ $sale->quantity }} kg</strong> - {{ $sale->transaction->user->name }}</p>
		          	  	      </div>
		          	  	    </div>
		          	  	    <div class="date text-right"><span>{{ $sale->created_at->format('d F Y') }}</span></div>
		          	  	  </div>
		          	  	</a>
	          	  	  @endforeach
	          	  	@endif
	          	  </div>
	          	</div>
	          </div>
	        </div>
	      </div>    
      </section>
	</div>
@endsection