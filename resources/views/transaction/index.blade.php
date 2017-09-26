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
			      	<span class="breadcrumb-item h3 active">Transaksi</span>
			      </div>
		        <h1 class="text-light" style="font-size: 2rem;">Daftar transaksi pembelian kedelai</h1>
		        <div class="text-muted">
		          <span class="pr-4" data-toggle="tooltip" data-placement="bottom" title="Total pembelian kedelai"><i class="fa fa-balance-scale mr-2"></i> {{ $total['quantity'] }} Kg</span>
		          <span class="pr-4" data-toggle="tooltip" data-placement="bottom" title="Total nilai transaksi"> <i class="fa fa-credit-card mr-2"></i> Rp. {{ $total['value'] }}</span>
		        </div>
		      </div>
		    </div>
		    <div class="row">
		    	<div class="col-12">
		    		@include('layouts.alerts')
				    <div class="my-4 clearfix d-flex flex-wrap justify-content-between align-items-center">
					    <a class="btn btn-info" href="/transaction/create"><i class="fa fa-plus"></i> Pesan kedelai</a>
					    <form class="ml-auto my-2 form form-inline" method="GET" action="/transaction">
					    	<div class="input-group mr-md-2">
					        {{-- <input id="inlineFormInput" type="text" placeholder="Cari transaksi" class="form-control"> --}}
					        <select class="form-control" id="status" name="status">
					        	<option value="">Pilih status...</option>
					        	<option value="pending">Pending</option>
					        	<option value="confirmed">Diproses</option>
					        	<option value="finished">Selesai</option>
					        	<option value="cancelled">Gagal</option>
					        </select>
					      </div>
					      <div class="input-group mr-md-2">
					        {{-- <input id="inlineFormInput" type="text" placeholder="Cari transaksi" class="form-control"> --}}
					        <select class="form-control" id="sort" name="sort">
					        	<option value="">Urutkan...</option>
					        	<option value="latest">Terbaru</option>
					        	<option value="oldest">Terlama</option>
					        	<option value="expensive">Termahal</option>
					        	<option value="cheap">Termurah</option>
					        </select>
					      </div>
					      <div class="input-group">
					        <input id="inlineFormInput" name="keyword" type="text" placeholder="Cari transaksi" class="form-control">
					        <span class="input-group-btn">
										<button type="input" class="btn btn-primary">Cari</button>
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
				      	  		<tr class="linked-row" data-href="/transaction/{{ $transaction->id }}">
				      	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
				      	  		  <td>
				      	  		  	<b class="text-primary">#{{ $transaction->code }}</b><br>
				      	  		  	{{ $transaction->created_at->format('j F Y') }}
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

@section('script')
	<script type="text/javascript">
		$(function(){
			$("#sort").val("{{ request('sort') }}");
			$("#status").val("{{ request('status') }}");
		});
	</script>
@endsection
