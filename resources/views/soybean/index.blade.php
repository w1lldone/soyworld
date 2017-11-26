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
		        <h1 class="text-light" style="font-size: 2rem;">Daftar kedelai Onfarm dan Pasca panen</h1>
		        <div class="text-muted">
		          <span class="pr-4"><i class="fa fa-user-o mr-3"></i> 42 Petani</span>
		          <span class="pr-4"><i class="fa fa-envira mr-3"></i> Panen terakhir: 7 Agustus 2017</span>
		        </div>
		        <div class="d-flex flex-wrap mt-3">
		        	<h2 class="px-1"><span class="badge badge-primary p-2">Stok <b>{{ \App\Harvest::readyStock()->sum('ending_stock') }} Kg</b></span></h2>
					    <h2 class="px-1"><span class="badge badge-success p-2">Harga <b>Rp. {{ \App\Price::latestPrice() }}/Kg</b></span></h2>
					    <a class="btn btn-info ml-auto" href="/transaction/create"><i class="fa fa-plus"></i> Pesan kedelai</a>
		        </div>
		      </div>
		    </div>
		    <div class="row">
		    	<div class="col-12">
				    @include('soybean.navpill')
				    <div class="my-4 clearfix d-flex flex-wrap justify-content-between align-items-center">
			    	</div>
				    @include('soybean.tab.'.request('tab'))
		    	</div>
		    </div>
		  </div>
		</section>
	</div>
@endsection
