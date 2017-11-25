@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Supplier</h2>
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
					    <h3 class="h4 d-inline">Daftar supplier</h3>
					    <a href="/supplier/create/" class="btn btn-sm btn-primary float-right" title="Tambah supplier" data-toggle="tooltip"><i class="fa fa-plus fa-fw"></i>Supplier</a>
					  </div>
					  <div class="card-body">
					    <table class="table">
					      <thead>
					        <tr>
					          <th>#</th>
					          <th>Nama</th>
					          <th>Alamat</th>
					          <th>Deskripsi</th>
					          <th>Kelompok tani</th>
					          <th>Action</th>
					        </tr>
					      </thead>
					      <tbody>
					      	@foreach ($suppliers as $supplier)
				      		  <tr>
					      	    <th scope="row">{{ $loop->index+1 }}</th>
					      	    <td>{{ $supplier->name }}</td>
					      	    <td>{{ $supplier->address }}</td>
					      	    <td>{{ $supplier->description }}</td>
					      	    <td>{{ $supplier->poktan->name }}</td>
				      	        <td style="display: flex;">
				      	    	  <div class="btn-group">
				      	    	    <button class="btn btn-secondary btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-caret-down"></i></button>
				      	    	    <div class="dropdown-menu dropdown-menu-right">
				      	    	      <a href="/supplier/{{$supplier->id}}/edit" class="dropdown-item">Edit</a>
				      	    	      <form action="/supplier/{{$supplier->id}}" method="POST">
				      	    	      	{{ csrf_field() }}
				      	    	      	{{ method_field('DELETE') }}
				      	    	      	<button onclick="return confirm('Anda yakin akan menghapus supplier?')" type="submit" class="dropdown-item" style="-webkit-appearance: inherit;">Hapus</button>
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
