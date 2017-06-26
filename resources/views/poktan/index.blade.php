@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Kelompok tani</h2>
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
					      <a href="/poktan/create" title="Tambah kelompok tani" data-toggle="tooltip" data-placement="left"><i class="fa fa-plus"></i></a>
					    </div>
					  </div>
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Daftar kelompok tani</h3>
					  </div>
					  <div class="card-body">
					    <table class="table">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>Nama</th>
					          <th>Ketua</th>
					          <th>Alamat</th>
					          <th>Anggota</th>
					          <th>Action</th>
					        </tr>
					      </thead>
					      <tbody>
					      	@foreach ($poktans as $poktan)
				      		  <tr>
					      	    <th scope="row">{{ $loop->index+1 }}</th>
					      	    <td>{{ $poktan->name }}</td>
					      	    <td>{{ $poktan->leader->name }}</td>
					      	    <td>{{ $poktan->address }}</td>
					      	    <td>{{ \App\User::where('poktan_id', $poktan->id)->count() }} petani</td>
					      	    <td style="display: flex;">
									<a href="/poktan/{{$poktan->id}}/edit" title="Edit" class="btn btn-primary btn-simple btn-xs" data-toggle="tooltip">
										<i class="fa fa-edit"></i>
									</a>
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
