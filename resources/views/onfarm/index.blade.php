@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">On farm kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
{{-- <ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item active">Anggota</li>
  </div>
</ul> --}}

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="tables">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
				  @include('layouts.alerts')
					<div class="card">
					  <div class="card-close">
					    <div class="dropdown">
					      <a href="/onfarm/create" title="Tambah onfarm kedelai" data-placement="left" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
					    </div>
					  </div>
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Daftar on farm kedelai</h3>
					  </div>
					  <div class="card-body">
					    <table class="table table-hover">
					      <thead>
					        <tr>
					          <th class="hidden-sm-down">#</th>
					          <th>Nama</th>
					          <th class="hidden-sm-down">Petani</th>
					          <th class="hidden-sm-down">Benih</th>
					          <th class="hidden-sm-down">Tanam</th>
					          <th class="hidden-sm-down">Biaya</th>
					          <th class="hidden-sm-down">Aktivitas terakhir</th>
					          <th class="hidden-md-up">Status</th>
					          <th></th>
					        </tr>
					      </thead>
					      <tbody>
					      	@foreach ($onfarms as $onfarm)
					      		<tr>
						      		<th class="hidden-sm-down" scope="row">{{ $loop->index+1 }}</th>
						      		<td><a href="/onfarm/{{$onfarm->id}}/view">{{ $onfarm->name }}</a></td>
						      		<td class="hidden-sm-down">{{ $onfarm->user->name }}</td>
						      		<td class="hidden-sm-down">
						      			@if (empty($onfarm->seed))
						      				<a href="/seed/create/{{ $onfarm->id }}" title="Klik untuk membeli" data-toggle="tooltip">Belum dibeli</a>
					      				@else
					      					<a href="/seed/{{ $onfarm->seed->id }}/view" title="Klik untuk melihat detail" data-toggle="tooltip">{{ $onfarm->seed->quantity }} Kg</a>
						      			@endif

						      		</td>
						      		<td class="hidden-sm-down">
						      			@empty ($onfarm->planted_at)
						      				Belum ditanam
						      			@endempty
						      			@isset ($onfarm->planted_at)
						      			    {{ $onfarm->planted_at->toFormattedDateString() }}
						      			@endisset
						      		</td>
						      		<td class="hidden-sm-down">
						      			Rp. {{ $onfarm->formattedOnfarmCost() }}
						      		</td>
						      		<td class="hidden-sm-down">{{ $onfarm->updated_at->diffForHumans() }}</td>
						      		<td class="hidden-md-up">
						      			<div class="d-flex">
						      				<a class="ml-1" title="Bibit {{ empty($onfarm->seed) ? 'belum' : 'sudah' }} dibeli" data-toggle="tooltip"><span class="badge badge-{{ empty($onfarm->seed) ? 'muted' : 'success' }}">B</span></a>
							      			<a class="ml-1" title="Bibit {{ empty($onfarm->planted_at) ? 'belum' : 'sudah' }} ditanam" data-toggle="tooltip"><span class="badge badge-{{ empty($onfarm->planted_at) ? 'muted' : 'info' }}">T</span></a>
							      			<a class="ml-1" title="Kedelai belum dipanen" data-toggle="tooltip"><span class="badge badge-muted">P</span></a>
						      			</div>
						      		</td>
						      		<td>
						      			<div class="btn-group dropup">
						      			  <button class="btn btn-secondary btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down"></i></button>
						      			  <div class="dropdown-menu dropdown-menu-right">
						      			  	<a href="/onfarm/{{$onfarm->id}}/view" class="dropdown-item">Lihat rincian</a>
						      			  	@if (!empty($onfarm->seed))
						      			  		<a href="/seed/{{$onfarm->seed->id}}/view" class="dropdown-item">Lihat benih</a>
						      			  	@endif
					      			        <a class="dropdown-item" href="#">Edit</a>
					      			        <div class="dropdown-divider"></div>	      			  
						      			  	@can('createSeed', $onfarm)
							      			    <a class="dropdown-item" href="seed/create/{{$onfarm->id}}">Beli benih</a>
						      			  	@endcan
						      			  	@can('createActivity', $onfarm)
						      			  	    <a href="/activity/create/{{$onfarm->id}}" class="dropdown-item">Tambah aktivitas</a>
						      			  	@endcan
						      			  	@can('createCost', $onfarm)
						      			  	    <a href="/onfarmcost/create/{{$onfarm->id}}" class="dropdown-item">Tambah biaya</a>
						      			  	@endcan
						      			  	<div class="dropdown-divider"></div>
						      			  	<form action="/onfarm/{{$onfarm->id}}" method="POST">
						      			  		{{ csrf_field() }}
						      			  		{{ method_field('DELETE') }}
						      			  		<button onclick="return confirm('Anda yakin akan menghapus on farm?')" type="submit" class="dropdown-item" style="-webkit-appearance: inherit;">Hapus</button>
						      			  	</form>

						      			  </div>
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
