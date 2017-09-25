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
                <h2 class="h3">Penanaman kedelai</h2>
                <div class="badge badge-rounded bg-green">4 New</div>
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
		                {{-- @foreach (auth()->user()->onfarm as $onfarm)
			                <tr>
    		                  <td><a href="{{ $onfarm->viewUrl() }}">{{ $onfarm->name }}</a></td>
    		                  <td>
              	      			<div class="d-flex">
              	      				<a title="Bibit {{ empty($onfarm->seed) ? 'belum' : 'sudah' }} dibeli" data-toggle="tooltip"><span class="badge badge-{{ empty($onfarm->seed) ? 'muted' : 'success' }}">B</span></a>
              		      			<a title="Bibit {{ empty($onfarm->planted_at) ? 'belum' : 'sudah' }} ditanam" data-toggle="tooltip"><span class="badge badge-{{ empty($onfarm->planted_at) ? 'muted' : 'info' }}">T</span></a>
                              <a title="Kedelai belum dipanen" data-toggle="tooltip"><span class="badge badge-muted">P</span></a>
              	      			</div>
    		                  </td>
			                </tr>
		                @endforeach --}}
                	</tbody>
                </table>
              </div>
            </div>
          
          	{{-- COST --}}
            <div class="articles card">
              <div class="card-header d-flex align-items-center bg-orange">
                <h2 class="h3">Pengeluaran terakhir</h2>
              </div>
              <div class="card-body">
{{--                 @if (auth()->user()->onfarm_cost->isEmpty())
                  <div class="pt-2 pb-4 text-center">
                    <img src="/img/stock/shop_shopping.svg" class="img-fluid" width="150px">
                    <h4 class="text-light text-muted">Belum ada pengeluaran</h4>
                  </div>
                @endif --}}
                <!-- ONFARM LIST -->
                <table class="table table-hover mb-0">
                	<tbody>
{{-- 		                @foreach (auth()->user()->onfarm_cost as $cost)
			                <tr>
    		                  <td><a href="/onfarmcost/{{$cost->id}}/view">{{ $cost->name }} - {{ $cost->onfarm->name }}</a></td>
    		                  <td>Rp. {{ $cost->formattedPrice() }}</td>
			                </tr>
		                @endforeach --}}
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
