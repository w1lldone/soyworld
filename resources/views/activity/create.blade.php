@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Aktivitas tanam</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item active">Aktivitas tanam</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				{{-- HORIZONTAL FORM --}}
				<div class="col-md-8 offset-md-1">
					<div class="card">
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Tambah aktivitas tanam</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/seed" enctype="multipart/form-data">
					      {{ csrf_field() }}
					      {{-- HIDDEN INPUT --}}
					      <input type="hidden" name="onfarm_id" >
					      @if ($errors->has('onfarm_id'))
					          <p class="form-text text-danger">{{ $errors->first('onfarm_id') }}</p>
				          @endif
					      {{-- INPUT SUPPLIER --}}
					      {{-- INPUT QUANTITY --}}
					      <div class="form-group row {{ $errors->has('quantity') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Jumlah bibit</label>
					        <div class="col-sm-9">
					          <div class="input-group">
                                <input type="number" name="quantity" class="form-control" placeholder="Jumlah kedelai dalam Kilogram tanpa titik koma" value="{{ old('quantity') }}"><span class="input-group-addon">Kg</span>
                              </div>
					          @if ($errors->has('quantity'))
						          <small class="form-text text-danger">{{ $errors->first('quantity') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT PRICE --}}
					      <div class="form-group row {{ $errors->has('price') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Harga benih per Kg</label>
					        <div class="col-sm-9">
					          <div class="input-group">
                                <span class="input-group-addon">Rp.</span><input type="number" name="price" class="form-control" placeholder="Harga kedelai per Kg" value="{{ old('price') }}">
                              </div>
					          @if ($errors->has('price'))
						          <small class="form-text text-danger">{{ $errors->first('price') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT PHOTO --}}
					      <div class="form-group row {{ $errors->has('photo1') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Foto</label>
					        <div class="col-sm-9 mb-1">
					          <input name="photo1" type="file" class="form-control form-control-success">
					        </div>
					        <div class="col-sm-9 offset-sm-3">
					          <input name="photo2" type="file" class="form-control form-control-success">
					        </div>
					      </div>
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

