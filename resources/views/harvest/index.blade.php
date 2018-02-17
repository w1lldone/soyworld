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
  	          <div class="btn-group">
  	            <a href="/harvest/create" title="Tambah panen kedelai" data-placement="left" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
  	          </div>
  	        </div>
  	        <div class="card-header d-flex align-items-center">
  	          <h3 class="h4">Daftar panen kedelai</h3>
  	        </div>
  	        <div class="card-body table-responsive">
              <form id="filterSortForm" class="form-inline clearfix d-flex flex-wrap justify-content-between align-items-center mb-4" action="{{ route('harvest.index') }}">
                @if (auth()->user()->isPoktanLeader())
                  <div class="input-group">
                    <label class="mr-sm-2">Tampilkan</label>
                    <div class="btn-group" data-toggle="buttons" onchange="$('#filterSortForm').submit()">
                      <label class="btn btn-primary @if (request('view') == 'mine' || empty(request('view'))) active @endif">
                        <input type="radio" value="mine" name="view" id="option1" @if (request('view') == 'mine' || empty(request('view'))) checked @endif> Kedelaiku
                      </label>
                      <label class="btn btn-primary @if (request('view') == 'poktan') active @endif"">
                        <input type="radio" value="poktan" name="view" id="option2" @if (request('view') == 'poktan') checked @endif> Kelompok tani
                      </label>
                    </div>
                  </div>
                @endif
                <div class="input-group">
                  <label class="mr-sm-2" for="sort">Filter</label>
                  <select name="filter" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="sort" onchange="$('#filterSortForm').submit()">
                    <option value="all" @if (request('filter') == 'all') selected @endif>Semua</option>
                    <option value="unhandled" @if (request('filter') == 'unhandled') selected @endif>Butuh penanganan</option>
                    <option value="on_sale" @if (request('filter') == 'on_sale') selected @endif>Dijual</option>
                    <option value="sold" @if (request('filter') == 'sold') selected @endif>Habis</option>
                  </select>
                </div>                  
                <div class="input-group">
                  <label class="mr-sm-2" for="sort">Urutkan</label>
                  <select name="sort" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="sort" onchange="$('#filterSortForm').submit()">
                    <option value="latest" @if (request('sort') == 'latest') selected @endif>Terbaru</option>
                    <option value="oldest" @if (request('sort') == 'oldest') selected @endif>Terlama</option>
                  </select>
                </div>
                <div class="input-group">
                  <a href="{{ route('harvest.index') }}" class="btn btn-warning"><i class="fa fa-refresh"></i></a>
                </div>
              </form>
  	          <table class="table table-hover">
  	            <thead>
  	              <tr>
  	                <th>#</th>
  	                <th>Nama</th>
                    @if (auth()->user()->isSuperadmin() || auth()->user()->isPoktanLeader())
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
                      @if (auth()->user()->isSuperadmin() || auth()->user()->isPoktanLeader())
                        <td>{{ $harvest->onfarm->user->name }}</td>
                      @endif
                      <td>{{ $harvest->harvested_at->format('j F Y') }}</td>
                      <td>
                        @if (empty($harvest->ending_stock) && $harvest->on_sale == 0)
                          <button data-toggle="modal" data-target="#tambahStok{{$harvest->id}}" class="round-link btn">Tambah stok</button>
                          @include('harvest.modal')
                        @else
                          {{ $harvest->ending_stock }} Kg
                        @endif
                      </td>
                      <td><span style="font-size: 100%" class="badge badge-pill badge-{{ $harvest->status_color }}">{{ $harvest->sale_status }}</span></td>
                    </tr>
                   @endforeach   
                </tbody>
  	          </table>
              <center>
                {{ $harvests->links() }}
              </center>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  </section>
</div>
@endsection
