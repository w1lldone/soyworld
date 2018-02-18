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
	<section class="dashboard-counts p-0">
	  <div class="container">
	    <div class="row">
	      <div class="col-12">
	      	<!-- BREADCRUMB -->
		      <div class="breadcrumb text-fade">
		      	<span class="breadcrumb-item h3 active">Penjualan</span>
		      </div>
	        <h1 class="text-light" style="font-size: 2rem;">Daftar Penjualan kedelai 
	        	@if ($newSales != 0)
	        		<span class="badge badge-warning">{{ $newSales }} Baru</span>
	        	@endif
	        </h1>
	      </div>
	    </div>
	    <div class="row">
	    	<div class="col-12">
	    		@include('layouts.alerts')
			    <div class="my-4">
				    <form class="mr-auto form-inline" id="filterSortForm">
				    	<div class="input-group">
				    	  <label class="mr-sm-2" for="status">Status</label>
				    	  <select name="status" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="status" onchange="$('#filterSortForm').submit()">
				    	    <option value="" @if (request('status') == 'all') selected @endif>All</option>
				    	  	@foreach ($statuses as $status)
					    	    <option value="{{ $status->id }}" @if (request('status') == $status->id) selected @endif>{{ $status->name }}</option>
				    	  	@endforeach
				    	  </select>
				    	</div>    
				      <div class="input-group">
				        <input id="inlineFormInput" name="keyword" type="text" placeholder="Cari transaksi" class="form-control" value="{{ request('keyword') }}">
				        <span class="input-group-btn">
									<button type="button" class="btn btn-primary">Cari</button>
								</span>
				      </div>
				    </form>
			    </div>
			    <div class="table-responsive">
			      <table class="table table-hover">
			      	  <thead>
			      	    <tr>
			      	      <th>#</th>
			      	      <th>Transaksi</th>
			      	      <th>Jumlah kedelai</th>
			      	      <th class="hidden-sm-down">Total pembayaran</th>
			      	      <th>Status</th>
			      	    </tr>
			      	  </thead>
			      	  <tbody>
			      	  	@foreach ($transactions as $transaction)
			      	  		<tr class="linked-row" data-href="/sales/{{ $transaction->id }}">
			      	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
			      	  		  <td>
			      	  		  	<b class="text-primary">{{ $transaction->code }}</b><br>
			      	  		  	{{ $transaction->user->name }}
			      	  		  </td>
			      	  		  <td class="align-middle">{{ $transaction->total_quantity }} Kg</td>
			      	  		  <td class="align-middle hidden-sm-down">Rp. {{ $transaction->formattedTotalPayment() }} </td>
			      	  		  <td class="align-middle"><span class="badge badge-{{ $transaction->status->status_color }}" style="font-size: 100%">{{ $transaction->status->name }}</span></td>
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
