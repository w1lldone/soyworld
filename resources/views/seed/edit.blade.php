@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit pembelian benih</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{$seed->onfarm->id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Edit pembelian benih</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				{{-- HORIZONTAL FORM --}}
				<div class="col-md-8 offset-md-1">
					@include('layouts.alerts')
					<div class="card">
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Data pembelian benih</h3>
					  </div>
					  <div class="card-body">
					  	{{-- INPUT PHOTO --}}
					      <div class="form-group row {{ $errors->has('photo1') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Foto</label>
					        @foreach ($seed->seed_photo as $photo)
						        <div class="col-sm-9 mb-1 {{ $loop->first ? '': 'offset-sm-3' }}">
						          <img src="{{ $photo->path }}" class="img-fluid mb-2" style="width: 200px;">
						          <div class="d-flex flex-row">
							          <form method="POST" class="pr-2" action="/seedphoto/{{ $photo->id }}" enctype="multipart/form-data">
							          	  {{ csrf_field() }}
								          <input onclick="return confirm('Foto akan langsung diganti. Apa anda yakin?')" name="photo" type="file" class="inputfile inputfile-warning" id="file-{{$loop->index}}" onchange="this.form.submit()">
								          <label for="file-{{$loop->index}}"><i class="fa fa-edit"></i><span style="color: inherit;">Ubah foto&hellip;</span></label>
							          </form>
							          <form method="POST" action="/seedphoto/{{ $photo->id }}">
							        		{{ csrf_field() }}
							        		{{ method_field('DELETE') }}
							        		<button title="Hapus foto" data-toggle="tooltip" type="submit" onclick="return confirm('Foto akan langsung dihapus. Apa anda yakin menghapus foto?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
							        	</form>
						          </div>
						        </div>
					        @endforeach
					        <div class="col-sm-9 offset-sm-3">
					        	<form method="POST" action="/seedphoto" enctype="multipart/form-data">
					        		{{ csrf_field() }}
					        		<input type="hidden" name="seed_id" value="{{ $seed->id }}">
					        		<input name="photo" id="file-2" type="file" class="inputfile inputfile-1" onchange="this.form.submit()">
					        		<label for="file-2"><i class="fa fa-upload"></i> <span style="color: inherit;">Tambah foto&hellip;</span></label>
					        	</form>
					        </div>
					      </div>
					    <form class="form-horizontal" method="POST" action="/seed/{{$seed->id}}" enctype="multipart/form-data">
					      {{ method_field('PUT') }}
					      {{ csrf_field() }}
					      {{-- INPUT SUPPLIER --}}
					      <div class="form-group row {{ $errors->has('supplier_id') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Supplier</label>
					        <div class="col-sm-9">
					          <div class="input-group">
					            <select id="supplier_id" name="supplier_id" class="form-control">
					            	<option></option>
					            	@foreach ($seed->onfarm->user->poktan->supplier as $supplier)
					            		<option value="{{$supplier->id}}">{{$supplier->name}} &dash; {{$supplier->description}}</option>
					            	@endforeach
					            </select>
					          </div>
					          @if ($errors->has('supplier_id'))
						          <small class="form-text text-danger">{{ $errors->first('supplier_id') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT QUANTITY --}}
					      <div class="form-group row {{ $errors->has('quantity') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Jumlah benih</label>
					        <div class="col-sm-9">
					          <div class="input-group">
                                <input type="number" name="quantity" class="form-control" placeholder="Jumlah kedelai dalam Kilogram tanpa titik koma" value="{{ $seed->quantity }}"><span class="input-group-addon">Kg</span>
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
                                <span class="input-group-addon">Rp.</span><input type="number" name="price" class="form-control" placeholder="Harga kedelai per Kg" value="{{ $seed->price }}">
                              </div>
					          @if ($errors->has('price'))
						          <small class="form-text text-danger">{{ $errors->first('price') }}</small>
					          @endif
					        </div>
					      </div>
					      
					      {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Keterangan</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" value="pembelian benih {{ $seed->onfarm->name }}" class="form-control form-control-success" value="{{ $seed->name }}" required>
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

@section('script')
	<script type="text/javascript">
		$(function(){
			$("#supplier_id").val("{{ $seed->supplier_id }}");
		});
	</script>
@endsection
