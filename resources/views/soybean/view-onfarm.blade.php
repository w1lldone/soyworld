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
						  <a href="/soybean?tab=onfarm" class="h3 breadcrumb-item">Kedelai</a>
						  <a href="#" class="h3 breadcrumb-item active">Detail onfarm</a>
		      	</div>
		        <h1 class="text-light" style="font-size: 2rem;">{{ $onfarm->name }}</h1>
		        <div class="text-muted">
		          <span class="pr-4"><i class="fa fa-user-o fa-fw"></i> {{ $onfarm->user->name }}</span>
		          <span class="pr-4"><i class="fa fa-cog fa-fw"></i> {{ $onfarm->user->poktan->name }}</span>
		          <span class="pr-4"><i class="fa fa-home fa-fw"></i> {{ $onfarm->user->address }}</span>
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
	  		  						<th class="text-blue">Perkiraan panen</th>
	  		  						<td>{{ $onfarm->harvest_est }}</td>
	  		  					</tr>
	  		  					<tr>
	  		  						<th class="text-blue">Perkiraan hasil panen</th>
	  		  						<td>{{ $onfarm->crops_est }}</td>
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
		    		</div>
		    	</div>
		    </div>
		  </div>
		</section>
	</div>
@endsection
