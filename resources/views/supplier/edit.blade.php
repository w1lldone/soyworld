@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit Supplier</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/supplier">Supplier</a></li>
    <li class="breadcrumb-item active">Edit supplier</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- FORMS SECTION  -->
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				{{-- HORIZONTAL FORM --}}
				<div class="col-md-8 offset-md-2">
				@include('layouts.alerts')
					<div class="card">
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Data supplier</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/supplier/{{ $supplier->id }}">
					      {{ csrf_field() }}
					      {{ method_field('PUT') }}
					      {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Nama</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" placeholder="Nama supplier" class="form-control form-control-success" value="{{ $supplier->name }}" required>
					          @if ($errors->has('name'))
						          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT DESCRIPTION --}}
					      <div class="form-group row {{ $errors->has('description') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Deskripsi</label>
					        <div class="col-sm-9">
					          <input name="description" id="inputHorizontalSuccess" type="text" placeholder="Keterangan supplier : supplier pupuk/benih/dll" class="form-control form-control-success" value="{{ $supplier->description }}" required>
					          @if ($errors->has('description'))
						          <small class="form-text text-danger">{{ $errors->first('description') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT ADDRESS --}}
					      <div class="form-group row {{ $errors->has('address') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Alamat</label>
					        <div class="col-sm-9">
					          <input name="address" id="inputHorizontalSuccess" type="text" placeholder="Alamat lengkap" class="form-control form-control-success " value="{{ $supplier->address }}" required>
					          @if ($errors->has('address'))
						          <small class="form-text text-danger">{{ $errors->first('address') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT CONTACT --}}
					      <div class="form-group row {{ $errors->has('contact') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">No Hp</label>
					        <div class="col-sm-9">
					          <input name="contact" id="inputHorizontalSuccess" type="text" placeholder="0812306*****" class="form-control form-control-success " value="{{ $supplier->contact }}" required>
					          @if ($errors->has('contact'))
						          <small class="form-text text-danger">{{ $errors->first('contact') }}</small>
					          @endif
					        </div>
					      </div>
					      @if (auth()->user()->isSuperadmin())
				      	      <div class="form-group row {{ $errors->has('poktan_id') ? ' has-danger' : '' }}">
				      	        <label class="col-sm-3 form-control-label">Kelompok tani</label>
				      	        <div class="col-sm-9">
				      	          <select id="poktan_id" name="poktan_id" class="form-control">
				      	          	@foreach (\App\Poktan::all() as $poktan)
				      	          		<option value="{{ $poktan->id }}">{{ $poktan->name }}</option>
				      	          	@endforeach
				      	          </select>
				      	          @if ($errors->has('poktan_id'))
				      		          <small class="form-text text-danger">{{ $errors->first('poktan_id') }}</small>
				      	          @endif
				      	        </div>
				      	      </div>
					      @endif

					      <div class="form-group row">       
					        <div class="col-sm-9 offset-sm-3">
					          <input type="submit" value="Simpan" class="btn btn-primary">
					        </div>
					      </div>
					    </form>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(function(){
			$("#poktan_id").val("{{ $supplier->poktan_id }}");
		});
	</script>
@endsection
