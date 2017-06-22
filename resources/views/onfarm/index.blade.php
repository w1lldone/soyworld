@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

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
					      <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
					      <div aria-labelledby="closeCard" class="dropdown-menu has-shadow">
						      <a href="/onfarm/create" class="dropdown-item"> <i class="fa fa-plus"></i>On farm kedelai</a>
					      </div>
					    </div>
					  </div>
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Daftar on farm kedelai</h3>
					  </div>
					  <div class="card-body">
					    <table class="table table-hover">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>Nama</th>
					          <th>Petani</th>
					          <th>Benih</th>
					          <th>Tanam</th>
					          <th>Aktivitas terakhir</th>
					        </tr>
					      </thead>
					      <tbody>
					      	@foreach ($onfarms as $onfarm)
					      		<tr>
						      		<th scope="row">{{ $loop->index+1 }}</th>
						      		<td><a href="/onfarm/{{$onfarm->id}}/view">{{ $onfarm->name }}</a></td>
						      		<td>{{ $onfarm->user->name }}</td>
						      		<td><a href="{{ !empty($onfarm->seed) ? '/seed/'.$onfarm->seed->id.'/view' : '#' }}">{{ !empty($onfarm->seed) ? $onfarm->seed->quantity.' Kg' : '-' }}</a></td>
						      		<td>{{ !empty($onfarm->planted_at) ? $onfarm->planted_at->toFormattedDateString() : 'Belum ditanam' }}</td>
						      		<td>{{ $onfarm->updated_at->diffForHumans() }}</td>
						      	</tr>
					      	@endforeach
					      	{{-- @foreach ($users as $user)
				      		  <tr>
					      	    <th scope="row">{{ $loop->index+1 }}</th>
					      	    <td>{{ $user->name }}</td>
					      	    <td>{{ $user->email }}</td>
					      	    <td>{{ $user->contact }}</td>
					      	    <td>{{ $user->privilage->name }}</td>
					      	    <td style="display: flex;">
									<a href="/user/{{$user->id}}/edit" type="button" title="Edit" class="btn btn-primary btn-simple btn-xs" data-toggle="tooltip">
										<i class="fa fa-edit"></i>
									</a>
					      	    </td>
					      	  </tr>
					      	@endforeach --}}
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
