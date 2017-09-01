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
			    <div class="my-4 clearfix d-flex justify-content-between align-items-center">
				    <h2 class="m-0 px-1"><span class="badge badge-primary p-2">Stok <b>420 Kg</b></span></h2>
				    <h2 class="m-0 px-1"><span class="badge badge-success p-2">Harga <b>Rp. 8000/Kg</b></span></h2>
				    <button class="btn btn-info ml-auto"><i class="fa fa-plus"></i> Pesan kedelai</button>
{{-- 				    <form class="ml-auto">
				      <div class="input-group">
				        <input id="inlineFormInput" type="text" placeholder="Cari" class="form-control">
				        <span class="input-group-btn">
									<button type="button" class="btn btn-primary">Go!</button>
								</span>
				      </div>
				    </form> --}}
			    </div>
	      	<table class="table table-hover">
	      	  <thead>
	      	    <tr>
	      	      <th>#</th>
	      	      <th>Petani</th>
	      	      <th>Stok</th>
	      	      <th>Tanam</th>
	      	      <th>Panen</th>
	      	    </tr>
	      	  </thead>
	      	  <tbody>
	      	    <tr>
	      	      <th scope="row" class="align-middle">1</th>
	      	      <td>
	      	      	<b class="text-primary">Mark</b><br>
	      	      	Kelompok tani makmur - <b>Yogyakarta</b>
	      	      </td>
	      	      <td class="align-middle">120 Kg</td>
	      	      <td class="align-middle">3 Mei 2017</td>
	      	      <td class="align-middle">12 Agustus 2017</td>
	      	    </tr>
	      	    <tr>
	      	      <th scope="row" class="align-middle">2</th>
	      	      <td>
	      	      	<b class="text-primary">Mark</b><br>
	      	      	Kelompok tani makmur - <b>Yogyakarta</b>
	      	      </td>
	      	      <td class="align-middle">120 Kg</td>
	      	      <td class="align-middle">3 Mei 2017</td>
	      	      <td class="align-middle">12 Agustus 2017</td>
	      	    </tr>
	      	    <tr>
	      	      <th scope="row" class="align-middle">3</th>
	      	      <td>
	      	      	<b class="text-primary">Mark</b><br>
	      	      	Kelompok tani makmur - <b>Yogyakarta</b>
	      	      </td>
	      	      <td class="align-middle">120 Kg</td>
	      	      <td class="align-middle">3 Mei 2017</td>
	      	      <td class="align-middle">12 Agustus 2017</td>
	      	    </tr>
	      	  </tbody>
	      	</table>
	    	</div>
	    </div>
	  </div>
	</section>
</div>


@endsection
