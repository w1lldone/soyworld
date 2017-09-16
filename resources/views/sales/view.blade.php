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
		      	<a class="breadcrumb-item h3" href="/sales">Penjualan</a>
		      	<span class="breadcrumb-item h3 active">Detail</span>
		      </div>
	        <h1 class="text-light" style="font-size: 2rem;">Detail transaksi #{{ $transaction->code }}</h1>
	        <div class="text-muted">
	          <span class="pr-4" data-toggle="tooltip" data-placement="bottom" title="Jumlah kedelai"><i class="fa fa-user-o mr-2"></i> {{ $transaction->user->name }}</span>
	          <span class="badge badge-{{ $transaction->status->status_color }}" style="font-size: 100%" data-toggle="tooltip" data-placement="bottom" title="Status">{{ $transaction->status->name }}</span>
	        </div>
	      </div>
	      <div class="col-12">
			    <div class="table-responsive mt-4">
			      <table class="table table-hover">
		      	  <thead>
		      	    <tr>
		      	      <th>#</th>
		      	      <th class="hidden-sm-down">Petani</th>
		      	      <th class="hidden-sm-down">Tanggal panen</th>
		      	      <th>Jumlah kedelai</th>
		      	      <th>Harga</th>
		      	    </tr>
		      	  </thead>
		      	  <tbody>
		      	  	@foreach ($transaction->transaction_detail as $detail)
		      	  		<tr>
		      	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
		      	  		  <td class="align-middle hidden-sm-down">{{ $detail->harvest->onfarm->user->name }}</td>
		      	  		  <td class="align-middle hidden-sm-down">{{ $detail->harvest->harvested_at->format('j F Y') }}</td>
		      	  		  <td class="align-middle">{{ $detail->quantity }} Kg</td>
		      	  		  <td class="align-middle ">Rp. {{ $detail->formattedTotalPrice() }} </td>
		      	  		</tr>
		      	  	@endforeach
		      	  </tbody>
		      	  <tfoot>
		      	  	<tr>
		      	  		<td><b>Total</b></td>
		      	  		<td class="hidden-sm-down"></td>
		      	  		<td class="hidden-sm-down"></td>
		      	  		<td class="text-primary"><b>{{ $transaction->total_quantity }} Kg</b></td>
		      	  		<td class="text-primary"><b>Rp. {{ $transaction->formattedTotalPayment() }}</b></td>
		      	  	</tr>
		      	  </tfoot>
		      	</table>
		      	<form class="float-right" method="POST" action="/sales/{{ $transaction->id }}">
		      		{{ csrf_field() }}
		      		{{ method_field('PUT') }}
		      		@if ($transaction->status_id == 1)
			      		<button type="submit" value="2" name="status_id" class="btn btn-primary" onclick="return confirm('Apakah anda akan mengkonfirmasi transaksi?')">Proses</button>
			      		<button type="submit" value="4" name="status_id" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin membatalkan transaksi')">Batalkan</button>
		      		@endif
		      		@if ($transaction->status_id == 2)	
		      			<button type="submit" value="3" name="status_id" class="btn btn-success" onclick="return confirm('Apakah anda akan menyelesaikan transaksi?')">Selesai</button>
		      		@endif
		      		<a href="/sales" class="btn btn-warning">Kembali</a>
		      	</form>
		    	</div>
	      </div>
	    </div>
	  </div>
	</section>
</div>

@endsection
