@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Pembelian bibit</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item active">Pembelian bibit</li>
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
					    <h3 class="h4">Form pembelian bibit</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/onfarm" enctype="multipart/form-data">
					      {{ csrf_field() }}
					      {{-- HIDDEN INPUT --}}
					      <input type="hidden" name="user_id" value="{{$onfarm->user_id}}">
					      {{-- INPUT SUPPLIER --}}
					      <div class="form-group row {{ $errors->has('supplier') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Supplier</label>
					        <div class="col-sm-9">
					          <div class="input-group">
					            <select name="supplier_id" class="form-control">
					            	<option></option>
					            	@foreach ($onfarm->user->poktan->supplier as $supplier)
					            		<option value="{{$supplier->id}}">{{$supplier->name}} &dash; {{$supplier->description}}</option>
					            	@endforeach
					            </select>
					            <span class="input-group-btn">
						          <button data-target="#addSupplier" data-toggle="modal" class="btn btn-primary" title="Tambah supplier" type="button">+</button>
						        </span>
					          </div>
					        </div>
					      </div>
					      {{-- INPUT QUANTITY --}}
					      <div class="form-group row {{ $errors->has('quantity') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Jumlah bibit</label>
					        <div class="col-sm-9">
					          <div class="input-group">
                                <input type="number" name="quantity" class="form-control" placeholder="Jumlah kedelai dalam Kilogram tanpa titik koma"><span class="input-group-addon">Kg</span>
                              </div>
					          @if ($errors->has('quantity'))
						          <small class="form-text text-danger">{{ $errors->first('quantity') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT PRICE --}}
					      <div class="form-group row {{ $errors->has('price') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Harga kedelai per Kg</label>
					        <div class="col-sm-9">
					          <div class="input-group">
                                <span class="input-group-addon">Rp.</span><input type="number" name="quantity" class="form-control" placeholder="Harga kedelai per Kg">
                              </div>
					          @if ($errors->has('quantity'))
						          <small class="form-text text-danger">{{ $errors->first('quantity') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT PHOTO --}}
					      <div class="form-group row {{ $errors->has('photo1') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Foto</label>
					        <div class="col-sm-9">
					          <input name="photo1" type="file" class="form-control form-control-success">
					        </div>
					        <div class="col-sm-9 offset-sm-3">
					          <input name="photo2" type="file" class="form-control form-control-success">
					        </div>
					      </div>
					      {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Keterangan</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" value="pembelian bibit {{ $onfarm->name }}" class="form-control form-control-success" value="{{ old('name') }}" required>
					          @if ($errors->has('name'))
						          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
					          @endif
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

@section('modal')
	@include('seed.modal')
@endsection
