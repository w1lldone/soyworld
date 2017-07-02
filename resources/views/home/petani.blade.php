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
	      <!-- Item -->
	      <div class="col-xl-4 col-sm-6">
	        <div class="item d-flex align-items-center">
	          <div class="icon bg-green"><i class="icon-user"></i></div>
	          <div class="title">
	          	<span class="badge bg-green">Rp. 3.000.000</span>
	          	<br>
	          	<span>Profit bulan ini</span>
	          </div>
	        </div>
	      </div>
	      <!-- Item -->
	      <div class="col-xl-4 col-sm-6">
	        <div class="item d-flex align-items-center">
	          <div class="icon bg-orange"><i class="icon-bill"></i></div>
	          <div class="title">
	          	<span class="badge bg-orange">530 Kg</span>
	          	<br>
	          	<span>Panen bulan ini</span>
	          </div>
	        </div>
	      </div>
	      <!-- Item -->
	      <div class="col-xl-4 col-sm-6">
	        <div class="item d-flex align-items-center">
	          <div class="icon bg-violet"><i class="icon-check"></i></div>
	          <div class="title">
	          	<span class="badge bg-violet">200 Kg</span>
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
          {{-- ACTIVITY --}}
          <div class="col-lg-7">
            <div class="articles card">
              @can('create', \App\Onfarm::class)
                <div class="card-close">
                  <div class="dropdown">
                    <a href="/onfarm/create" class="text-primary" title="Tambah aktivitas tanam" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
                  </div>
                </div>
              @endcan
              <div class="card-header d-flex align-items-center">
                <h2 class="h3">Penanaman kedelai</h2>
                <div class="badge badge-rounded bg-green">4 New</div>
              </div>
              <div class="card-body">
                @if (auth()->user()->onfarm->isEmpty())
                  <div class="pt-2 pb-4 text-center">
                    <img src="/img/stock/watering-can.svg" class="img-fluid" width="150px">
                    <h4 class="text-light text-muted">Belum ada on farm kedelai</h4>
                    @cannot('createActivity', $onfarm)
                        <p class="text-muted m-0">buat on farm terlrbih dahulu</p>
                    @endcannot
                    @can('create', \App\Onfarm::class)
                      <a class="round-link bg-green d-inline-block text-white" href="/onfarm/create">Tambahkan</a>
                    @endcan
                  </div>
                @endif
                <!-- ONFARM LIST -->
                <table class="table table-hover mb-0">
                	<tbody>
		                @foreach (auth()->user()->onfarm as $onfarm)
			                <tr>
    		                  <td><a href="/onfarm/{{$onfarm->id}}/view">{{ $onfarm->name }}</a></td>
    		                  <td>
              	      			<div class="d-flex">
              	      				<a title="Bibit {{ empty($onfarm->seed) ? 'belum' : 'sudah' }} dibeli" data-toggle="tooltip"><span class="badge badge-{{ empty($onfarm->seed) ? 'muted' : 'success' }}">B</span></a>
              		      			<a title="Bibit {{ empty($onfarm->planted_at) ? 'belum' : 'sudah' }} ditanam" data-toggle="tooltip"><span class="badge badge-{{ empty($onfarm->planted_at) ? 'muted' : 'info' }}">T</span></a>
              		      			<a title="Kedelai belum dipanen" data-toggle="tooltip"><span class="badge badge-muted">P</span></a>
              	      			</div>
    		                  </td>
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
