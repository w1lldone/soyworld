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
		      	<div class="breadcrumb">
				  <a href="#" class="h3 breadcrumb-item active">Kedelai</a>
		      	</div>
		        <h1 class="text-light" style="font-size: 2rem;">Informasi Stok Kedelai</h1>
		        <div class="text-muted">
		          <span class="pr-4"><i class="fa fa-user-o mr-3"></i> 42 Petani</span>
		          <span class="pr-4"><i class="fa fa-envira mr-3"></i> Panen terakhir: 7 Agustus 2017</span>
		        </div>
		      </div>
		    </div>
		    @foreach ($poktans as $poktan)
		    	<div class="row">
			    	<div class="col-md-6">
					    <h2 class="text-primary">{{ $poktan->name }}</h2>
							<span class="text-muted"><i class="fa fa-archive fa-fw"></i> {{ $poktan->active_stock }} kg</span> <br>
					    <span class="text-muted"><i class="fa fa-home fa-fw"></i> {{ $poktan->address }}</span> <br>
					    <span class="text-muted"><i class="fa fa-user fa-fw"></i> {{ $poktan->user->count() }} Petani</span> <br>
			    	</div>
			    	<div class="col-md-4 text-center">
			    	</div>
			    	<div class="col-md-2 text-right">
					    <a href="{{ route('transaction.create', ['poktan_id' => $poktan->id]) }}" class="btn btn-success"><i class="fa fa-shopping-cart fa-fw p-0 m-0"> </i> Beli kedelai</a>
			    	</div>
			    </div>
			    <hr>
		    @endforeach
		  </div>
		</section>
	</div>
@endsection
