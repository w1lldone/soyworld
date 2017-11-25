@extends('layouts.master')

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
					  <div class="card-header">
					    <h3 class="h4 d-inline">Daftar kelompok tani</h3>
					    <a href="/poktan/create/" class="btn btn-sm btn-primary float-right" title="Tambah poktan" data-toggle="tooltip"><i class="fa fa-plus fa-fw"></i>Poktan</a>
					  </div>
					  <div class="card-body table-responsive">
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
