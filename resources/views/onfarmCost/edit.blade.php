@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah biaya onfarm</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{$onfarm->id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Biaya on farm</li>
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
					    <h3 class="h4">Data biaya on farm - {{ $onfarm->name }}</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/onfarmcost/{{ $onfarmCost->id }}">
					      {{ csrf_field() }}
					      {{ method_field('PUT') }}
					      {{-- HIDDEN INPUT --}}
					      <input type="hidden" name="onfarm_id" value="{{$onfarm->id}}">
					      @if ($errors->has('onfarm_id'))
					          <p class="form-text text-danger">{{ $errors->first('onfarm_id') }}</p>
				          @endif
				          {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Keterangan</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" placeholder="Contoh : pembelian pupuk/perstisida" class="form-control form-control-success" value="{{ $onfarmCost->name }}" required>
					          @if ($errors->has('name'))
						          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT DESCRIPTION --}}
						      <div class="form-group row {{ $errors->has('description') ? ' has-danger' : '' }}">
						        <label class="col-sm-3 form-control-label">Deskripsi</label>
						        <div class="col-sm-9">
						          <div class="input-group">
                        <textarea name="description" class="form-control">{{ $onfarmCost->description }}</textarea>
                      </div>
						          @if ($errors->has('description'))
							          <small class="form-text text-danger">{{ $errors->first('description') }}</small>
						          @endif
						        </div>
						      </div>
					      {{-- INPUT SUPPLIER --}}
					      <div class="form-group row {{ $errors->has('supplier') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Supplier</label>
					        <div class="col-sm-9">
					          <div class="input-group">
					            <select id="supplier_id" name="supplier_id" class="form-control">
					            	<option value="">PILIH SUPPLIER</option>
					            	@foreach ($onfarm->user->poktan->supplier as $supplier)
					            		<option value="{{$supplier->id}}">{{$supplier->name}} &dash; {{$supplier->description}}</option>
					            	@endforeach
					            </select>
					            <span class="input-group-btn">
						          <button data-target="#addSupplier" data-toggle="modal" class="btn btn-primary" title="Tambah supplier" type="button">+</button>
						        </span>
					          </div>
					          @if ($errors->has('supplier_id'))
						          <small class="form-text text-danger">{{ $errors->first('supplier_id') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT PRICE --}}
					      <div class="form-group row {{ $errors->has('price') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Biaya</label>
					        <div class="col-sm-9">
					          <div class="input-group">
                      <span class="input-group-addon">Rp.</span><input type="number" name="price" class="form-control" placeholder="Biaya total" value="{{ $onfarmCost->price }}">
                    </div>
					          @if ($errors->has('price'))
						          <small class="form-text text-danger">{{ $errors->first('price') }}</small>
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

@section('script')
	<script type="text/javascript">
		$("#supplier_id").val("{{ $onfarmCost->supplier_id }}");
	</script>
@endsection