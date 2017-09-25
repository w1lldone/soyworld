@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Dashboard</h2>
  </div>
</header>

<div class="content-wrapper">
	<!-- Dashboard Counts Section-->
	<section class="dashboard-counts no-padding-bottom">
	  <div class="container-fluid">
	    <div class="row bg-white has-shadow">
          <div class="col-12">
            @include('layouts.alerts')
          </div>
	      <!-- Item -->
	      <div class="col-xl-4 col-sm-6">
	        <div class="item d-flex align-items-center">
	          <div class="icon bg-green"><i class="icon-user"></i></div>
	          <div class="title">
	          	<span class="badge bg-green">Rp. {{ $sum['price'] }}</span>
	          	<br>
	          	<span>Harga kedelai terkini</span>
	          </div>
	        </div>
	      </div>
	      <!-- Item -->
	      <div class="col-xl-4 col-sm-6">
	        <div class="item d-flex align-items-center">
	          <div class="icon bg-orange"><i class="icon-bill"></i></div>
	          <div class="title">
	          	<span class="badge bg-orange">{{ $sum['purchase'] }} Kg</span>
	          	<br>
	          	<span>Pembelian bulan ini</span>
	          </div>
	        </div>
	      </div>
	      <!-- Item -->
	      <div class="col-xl-4 col-sm-6">
	        <div class="item d-flex align-items-center">
	          <div class="icon bg-violet"><i class="icon-check"></i></div>
	          <div class="title">
	          	<span class="badge bg-violet">{{ $sum['stock'] }} Kg</span>
	          	<br>
	          	<span>Stok gudang</span>
	          </div>
	        </div>
	      </div>
	    </div>
	  </div>
	</section>

	<!-- LIST SECTION -->
	<section class="dashboard-header pb-0">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-7">
            {{-- ONFARM --}}
            <div class="articles card mb-3">
              <div class="card-header d-flex align-items-center bg-violet">
                <h2 class="h3">Transaksi terakhir</h2>
              </div>
              <div class="card-body">
{{--                 @if (auth()->user()->onfarm->isEmpty())
                  <div class="pt-2 pb-4 text-center">
                    <img src="/img/stock/watering-can.svg" class="img-fluid" width="150px">
                    <h4 class="text-light text-muted">Belum ada on farm kedelai</h4>
                    @can('create', \App\Onfarm::class)
                      <a class="round-link bg-green d-inline-block text-white" href="/onfarm/create">Tambahkan</a>
                    @endcan
                  </div>
                @endif --}}
                <!-- ONFARM LIST -->
                <table class="table table-hover mb-0">
                	<tbody>
                		@foreach ($transactions as $transaction)
                			<tr class="linked-row" data-href="/transaction/{{ $transaction->id }}">
                				<td><b>#{{ $transaction->code }}</b><br><span>{{ $transaction->total_quantity }} Kg</span></td>
                				<td class="text-right"><small>{{ $transaction->updated_at->diffForHumans() }}</small> <br> <span class="badge badge-{{ $transaction->status->status_color }}">{{ $transaction->status->name }}</span> </td>
                			</tr>
                		@endforeach
                	</tbody>
                </table>
              </div>
            </div>
          </div>
          {{-- PROFILE --}}
          <div class="col-lg-5">
	          <div class="client card">
	            <div class="card-close">
	              <div class="dropdown">
	                <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
	                <div aria-labelledby="closeCard" class="dropdown-menu has-shadow">
		                <a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a>
		                <a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Pengaturan</a></div>
	              </div>
	            </div>
	            <div class="card-body text-center">
	              <div class="client-avatar"><img src="img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle">
	                <div class="status bg-green"></div>
	              </div>
	              <div class="client-title">
	                <h3>{{ auth()->user()->name }}</h3><span>{{ auth()->user()->privilage->name }}</span><a class="bg-orange" href="/profile/edit">Edit</a>
	              </div>
	              <div class="client-info">
	                <div class="row">
	                  <div class="col-4"><strong>20</strong><br><small>Supplier</small></div>
	                  <div class="col-4"><strong>9</strong><br><small>Aktivitas</small></div>
	                  <div class="col-4"><strong>2</strong><br><small>Penanaman</small></div>
	                </div>
	              </div>
	              <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>
</div>


@endsection
