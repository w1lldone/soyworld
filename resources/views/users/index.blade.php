@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Anggota</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item active">Anggota</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="tables">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="card">
					  <div class="card-close">
					    <div class="dropdown">
					      <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
					      <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
					    </div>
					  </div>
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Daftar Anggota</h3>
					  </div>
					  <div class="card-body">
					    <table class="table">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>Nama</th>
					          <th>Email</th>
					          <th>Kontak</th>
					          <th>Alamat</th>
					          <th>Action</th>
					        </tr>
					      </thead>
					      <tbody>
					      	@foreach ($users as $user)
				      		  <tr>
					      	    <th scope="row"></th>
					      	    <td>{{ $user->name }}</td>
					      	    <td>{{ $user->email }}</td>
					      	    <td>{{ $user->contact }}</td>
					      	    <td>{{ $user->address }}</td>
					      	    <td style="display: flex;">
									<a href="/user/{{$user->id}}/edit" type="button" title="Edit" class="btn btn-primary btn-simple btn-xs" data-toggle="tooltip">
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
