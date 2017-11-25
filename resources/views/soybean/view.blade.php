@extends('layouts.master')

@section('new_styles')
	<style type="text/css">
		.page {
			background: white !important;
		}
	</style>
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Dashboard Counts Section-->
	<section class="dashboard-counts p-0" style="background: white">
	  <div class="container">
	    <div class="row">
	      <div class="col-12">
	      	<div class="breadcrumb" style="background-color: inherit;">
					  <a href="/soybean" class="h3 breadcrumb-item">Kedelai</a>
					  <a href="#" class="h3 breadcrumb-item active">Detail</a>
	      	</div>
	        <h1 class="text-light" style="font-size: 2rem;">Detail tanam kedelai bulan Mei</h1>
	        <div class="text-muted">
	          <span class="pr-4"><i class="fa fa-user-o fa-fw"></i> Sumarmo</span>
	          <span class="pr-4"><i class="fa fa-cog fa-fw"></i> Kelompok tani makmur</span>
	          <span class="pr-4"><i class="fa fa-home fa-fw"></i> Yogyakarta</span>
	        </div>
	      </div>
	    </div>
	    <div class="row soybean-info">
	    	<div class="col-md-8">
	    		<!-- Nav tabs -->
	    		<ul class="nav nav-tabs" role="tablist">
	    		  <li class="nav-item">
	    		    <a class="nav-link active" data-toggle="tab" href="#general" role="tab">Info tanam</a>
	    		  </li>
	    		  <li class="nav-item">
	    		    <a class="nav-link" data-toggle="tab" href="#onfarm" role="tab">Aktifitas tanam</a>
	    		  </li>
	    		  <li class="nav-item">
	    		    <a class="nav-link" data-toggle="tab" href="#postharvest" role="tab">Pasca panen</a>
	    		  </li>
	    		</ul>

	    		<!-- Tab panes -->
	    		<div class="tab-content">
	    		  <div class="tab-pane active" id="general" role="tabpanel">
  		  			<table class="table">
  		  				<tbody>
  		  					<tr>
  		  						<th class="text-blue">Jumlah bibit</th>
  		  						<td>{{ $onfarm->seed->quantity }} Kg</td>
  		  					</tr>
  		  					<tr>
  		  						<th class="text-blue">Luas tanam</th>
  		  						<td>{{ $onfarm->area }} m<sup>2</sup></td>
  		  					</tr>
  		  					<tr>
  		  						<th class="text-blue">Tanggal tanam</th>
  		  						<td>{{ $onfarm->planted_at->format('j F Y') }}</td>
  		  					</tr>
  		  					<tr>
  		  						<th class="text-blue">Tanggal panen</th>
  		  						<td>{{ $onfarm->harvest->harvested_at->format('j F Y') }}</td>
  		  					</tr>
  		  				</tbody>
  		  			</table>
	    		  </div>
	    		  <div class="tab-pane" id="onfarm" role="tabpanel">
  		  			<table class="table">
  		  				<thead>
  		  					<tr class="text-primary">
  		  						<td>No</td>
  		  						<td>Aktifitas</td>
  		  						<td>Tanggal pelaksanaan</td>
  		  					</tr>
  		  				</thead>
  		  				<tbody>
  		  					@foreach ($activities as $activity)
  		  						<tr>
  		  							<td class="align-middle">{{ $loop->index+1 }}</td>
  		  							<td><b class="text-primary">{{ $activity->name }}</b> <br> <span class="text-muted">{{ $activity->description }}</span></td>
  		  							<td>{{ $activity->date->format('j F Y') }}</td>
  		  						</tr>
  		  					@endforeach
  		  				</tbody>
  		  			</table>
	    		  </div>
	    		  <div class="tab-pane" id="postharvest" role="tabpanel">
	    		  	<table class="table">
	    		  		<thead>
	    		  			<tr class="text-primary">
	    		  				<td>No</td>
	    		  				<td>Aktifitas</td>
	    		  				<td>Tanggal pelaksanaan</td>
	    		  			</tr>
	    		  		</thead>
	    		  		<tbody>
	    		  			@foreach ($postharvests as $postharvest)
	    		  				<tr>
	    		  					<td class="align-middle">{{ $loop->index+1 }}</td>
	    		  					<td><b class="text-primary">{{ $postharvest->name }}</b></td>
	    		  					<td>{{ $activity->date->format('j F Y') }}</td>
	    		  				</tr>
	    		  			@endforeach
	    		  		</tbody>
	    		  	</table>
	    		  </div>
	    		</div>
	    	</div>
	    	<div class="col-md-4">
	    		<div class="card sticky-top">
	    		  <div class="card-header text-center bg-blue text-white">
	    		    Informasi stok
	    		  </div>
	    		  <div class="card-block">
	    		    <span class="d-inline">Stok awal:</span><span class="float-right soybean-data">{{ $onfarm->harvest->initial_stock }} Kg</span> <br>
	    		    <span class="d-inline">Terjual:</span><span class="float-right soybean-data">{{ $onfarm->harvest->initial_stock-$onfarm->harvest->ending_stock }} Kg</span> <br>
	    		    <span class="d-inline">Sisa:</span><span class="float-right soybean-data">{{ $onfarm->harvest->ending_stock }} Kg</span> <br>
	    		  </div>
	    		  <div class="card-footer text-center">
	    		    <a href="/transaction/create" class="btn bg-blue ">Beli kedelai</a>
	    		    <a href="#" onclick="window.history.go(-1)" class="btn btn-warning">Kembali</a>
	    		  </div>
	    		</div>
	    	</div>
	    	<div class="col-md-4">
	    	</div>      
	    </div>
	    <div class="row">
	    	{{-- <div class="col-12">
			    <div class="table-responsive">
		      	<table class="table table-hover">
		      	  <thead>
		      	    <tr>
		      	      <th>#</th>
		      	      <th>Petani</th>
		      	      <th>Stok</th>
		      	      <th class="hidden-sm-down">Tanam</th>
		      	      <th class="hidden-sm-down">Panen</th>
		      	    </tr>
		      	  </thead>
		      	  <tbody>
		      	  	@foreach (\App\Harvest::readyStock() as $harvest)
		      	  		<tr>
		      	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
		      	  		  <td>
		      	  		  	<b class="text-primary">{{ $harvest->onfarm->user->name }}</b><br>
		      	  		  	{{ $harvest->onfarm->user->poktan->name }} - <b>Yogyakarta</b>
		      	  		  </td>
		      	  		  <td class="align-middle">{{ $harvest->ending_stock }} Kg</td>
		      	  		  <td class="align-middle hidden-sm-down">{{ $harvest->onfarm->planted_at->format('j F Y') }}</td>
		      	  		  <td class="align-middle hidden-sm-down">{{ $harvest->harvested_at->format('j F Y') }} </td>
		      	  		</tr>
		      	  	@endforeach
		      	  </tbody>
		      	</table>
			    </div>
	    	</div> --}}
	    </div>
	  </div>
	</section>
</div>


@endsection
