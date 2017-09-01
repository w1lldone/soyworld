@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Panen kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
{{-- <ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item active">Anggota</li>
  </div>
</ul> --}}

<div class="content-wrapper">
  <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow py-2">
        <div class="col-12">
          @include('layouts.alerts')
        </div>
        <!-- Item -->
        <div class="col-xl-6 col-sm-6">
          <div class="item">
            <div class="title clearfix">
              <span class="float-left">Stok total</span>
              <span class="badge bg-info float-right">{{ \App\Harvest::totalStock() }} Kg</span>
            </div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-6 col-sm-6">
          <div class="item">
            <div class="title clearfix">
              <span class="float-left">Stok dijual</span>
              <span class="badge bg-orange float-right">{{ \App\Harvest::onSaleStock() }} Kg</span>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </section>

  <!-- TABLE SECTION -->
  <section class="tables pt-2">
  	<div class="container-fluid">
  	  <div class="row">
  	    <div class="col-12">
  	      <div class="card">
  	        <div class="card-close">
  	          <div class="dropdown">
  	            <a href="/harvest/create" title="Tambah panen kedelai" data-placement="left" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
  	          </div>
  	        </div>
  	        <div class="card-header d-flex align-items-center">
  	          <h3 class="h4">Daftar panen kedelai</h3>
  	        </div>
  	        <div class="card-body table-responsive">
  	          <table class="table table-hover">
  	            <thead>
  	              <tr>
  	                <th>#</th>
  	                <th>Nama</th>
                    @if (auth()->user()->isSuperadmin())
    	                <th>Petani</th>
                    @endif
                    <th>Tanggal panen</th>
  	                <th>Sisa stok</th>
                    <th>Status</th>
  	              </tr>
  	            </thead>
                <tbody>
                  @foreach ($harvests as $harvest)
                    <tr>
                      <td>{{ $harvests->toArray()['from']+$loop->index }}</td>
                      <td><a href="/harvest/{{$harvest->id}}/view">Panen {{ $harvest->onfarm->name }}</a></td>
                      @if (auth()->user()->isSuperadmin())
                        <td>{{ $harvest->onfarm->user->name }}</td>
                      @endif
                      <td>{{ $harvest->harvested_at->format('j F Y') }}</td>
                      <td>
                        @if (empty($harvest->ending_stock))
                          <button data-toggle="modal" data-target="#tambahStok{{$harvest->id}}" class="round-link btn">Tambah stok</button>
                          @include('harvest.modal')
                        @else
                          {{ $harvest->ending_stock }}
                        @endif
                      </td>
                      <td>{{ $harvest->sale_status }}</td>
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