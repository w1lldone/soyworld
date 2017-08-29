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
  <!-- TABLE SECTION -->
  <section class="tables">
  	<div class="container-fluid">
  	  <div class="row">
  	    <div class="col-12">
  	      @include('layouts.alerts')
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
  	                <th class="hidden-sm-down">#</th>
  	                <th>Nama</th>
                    @if (auth()->user()->isSuperadmin())
    	                <th>Petani</th>
                    @endif
                    <th>Tanggal panen</th>
  	                <th>Sisa stok</th>
  	              </tr>
  	            </thead>
                <tbody>
                  @foreach ($harvests as $harvest)
                    <tr>
                      <td>{{ $harvests->toArray()['from']+$loop->index }}</td>
                      <td>Panen {{ $harvest->onfarm->name }}</td>
                      @if (auth()->user()->isSuperadmin())
                        <td>{{ $harvest->onfarm->user->name }}</td>
                      @endif
                      <td>{{ $harvest->harvested_at->format('j F Y') }}</td>
                      <td>
                        @if (empty($harvest->ending_stock))
                          <button data-toggle="modal" data-target="#tambahStok{{$harvest->id}}" class="round-link btn">Tambah stok</button>
                          <div class="modal fade" id="tambahStok{{$harvest->id}}">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-body">
                                  <h2>Tambah stok</h2>
                                  <form action="/stock" method="POST">
                                    {{ csrf_field() }}
                                    <div class="row">
                                      <div class="col-12 form-group input-group">
                                        <input type="number" class="form-control" placeholder="Masukkan stok" aria-describedby="basic-addon1">
                                        <span class="input-group-addon" id="basic-addon1">Kg</span>
                                      </div>
                                      <div class="col-12 clearfix">
                                        <button type="submit" class="btn btn-primary float-right">Simpan</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        @else
                          {{ $harvest->ending_stock }}
                        @endif
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