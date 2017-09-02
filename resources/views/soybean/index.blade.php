@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header" style="box-shadow: none">
  <div class="container-fluid">
    {{-- <h2 class="no-margin-bottom">Daftar stok kedelai</h2> --}}
  </div>
</header>

<div class="content-wrapper">
	<!-- Dashboard Counts Section-->
	<section class="dashboard-counts p-0" style="background: white">
	  <div class="container">
	    <div class="row">
	      <div class="col-12">
	        @include('layouts.alerts')
	        <h1 class="text-light" style="font-size: 2rem;">Daftar kedelai Onfarm dan Pasca panen</h1>
	        <div class="inline text-muted">
	          <i class="fa fa-user-o"></i><span class="pl-3 pr-4">42 Petani</span>
	          <i class="fa fa-envira"></i><span class="pl-3 pr-4">Panen terakhir: 7 Agustus 2017</span>
	        </div>
	      </div>
	    </div>
	    <div class="row">
	    	<div class="col-12">
			    @include('soybean.navpill')
			    <div class="my-4 clearfix d-flex flex-wrap justify-content-between align-items-center">
				    <h2 class="px-1"><span class="badge badge-primary p-2">Stok <b>{{ \App\Harvest::where('on_sale', 1)->get()->sum('ending_stock') }} Kg</b></span></h2>
				    <h2 class="px-1"><span class="badge badge-success p-2">Harga <b>Rp. 8000/Kg</b></span></h2>
				    <br>
				    <a class="btn btn-info ml-auto" href="/transaction/create"><i class="fa fa-plus"></i> Pesan kedelai</a>
{{-- 				    <form class="ml-auto">
				      <div class="input-group">
				        <input id="inlineFormInput" type="text" placeholder="Cari" class="form-control">
				        <span class="input-group-btn">
									<button type="button" class="btn btn-primary">Go!</button>
								</span>
				      </div>
				    </form> --}}
			    </div>
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
		      	  	@foreach (\App\Harvest::where('on_sale', 1)->get() as $harvest)
		      	  		<tr>
		      	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
		      	  		  <td>
		      	  		  	<b class="text-primary">{{ $harvest->onfarm->user->name }}</b><br>
		      	  		  	{{ $harvest->onfarm->user->poktan->name }} - <b>Yogyakarta</b>
		      	  		  </td>
		      	  		  <td class="align-middle">{{ $harvest->ending_stock }} Kg</td>
		      	  		  <td class="align-middle hidden-sm-down">{{ $harvest->harvested_at->format('j F Y') }} </td>
		      	  		  <td class="align-middle hidden-sm-down">{{ $harvest->onfarm->planted_at->format('j F Y') }}</td>
		      	  		</tr>
		      	  	@endforeach
		      	  </tbody>
		      	</table>
			    </div>
	    	</div>
	    </div>
	  </div>
	</section>
</div>


@endsection
