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
    <li class="breadcrumb-item"><a href="/onfarm/{{$onfarm->id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Tambah Aktivitas tanam</li>
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
					  	{{-- IF USER CAN CREATE ACTIVITY --}}
					  	@can('createActivity', $onfarm)
						    <form class="form-horizontal" method="POST" action="/activity" enctype="multipart/form-data">
						      {{ csrf_field() }}
						      {{-- HIDDEN INPUT --}}
						      <input type="hidden" name="onfarm_id" value="{{$onfarm->id}}">
						      @if ($errors->has('onfarm_id'))
						          <p class="form-text text-danger">{{ $errors->first('onfarm_id') }}</p>
					          @endif
						      {{-- INPUT NAME --}}
						      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
						        <label class="col-sm-3 form-control-label">Nama kegiatan</label>
						        <div class="col-sm-9">
						          <div class="input-group">
	                                <input type="text" name="name" class="form-control" placeholder="Nama aktivitas tanam" value="{{ old('name') }}">
	                              </div>
						          @if ($errors->has('name'))
							          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
						          @endif
						        </div>
						      </div>
						      {{-- INPUT DATE --}}
						      <div class="form-group row {{ $errors->has('date') ? ' has-danger' : '' }}">
						        <label class="col-sm-3 form-control-label">Tanggal</label>
						        <div class="col-sm-9">
						          <div class="input-group">
	                                <input data-provide="datepicker" type="text" placeholder="Tanggal aktivitas" name="date" class="form-control datepicker" value="{{ old('date') }}" required>
	                              </div>
						          @if ($errors->has('date'))
							          <small class="form-text text-danger">{{ $errors->first('date') }}</small>
						          @endif
						        </div>
						      </div>
						      {{-- INPUT DESCRIPTION --}}
						      <div class="form-group row {{ $errors->has('description') ? ' has-danger' : '' }}">
						        <label class="col-sm-3 form-control-label">Deskripsi kegiatan</label>
						        <div class="col-sm-9">
						          <div class="input-group">
	                                <textarea class="form-control"></textarea>
	                              </div>
						          @if ($errors->has('description'))
							          <small class="form-text text-danger">{{ $errors->first('description') }}</small>
						          @endif
						        </div>
						      </div>
						      {{-- INPUT PHOTO --}}
						      <div class="form-group row {{ $errors->has('photo') ? ' has-danger' : '' }}">
						        <label class="col-sm-3 form-control-label">Foto</label>
						        <div class="col-sm-9 mb-1">
						          <input name="photo[1]" type="file" class="form-control form-control-success">
						        </div>
						        <div class="col-sm-9 offset-sm-3">
						          <input name="photo[2]" type="file" class="form-control form-control-success">
						        </div>
						      </div>
						      <div class="form-group row">       
						        <div class="col-sm-9 offset-sm-3">
						          <input type="submit" value="Simpan" class="btn btn-primary">
						        </div>
						      </div>
						    </form>
					  	@endcan
					  	@cannot('createActivity', $onfarm)
					  	    <div class="py-4 text-center">
					  	    	<h4 class="text-light text-muted">Belum bisa menambahkan aktivitas tanam</h4>
					  	    	<p class="text-muted m-0">kedelai belum ditanam</p>
					  	    </div>
					  	@endcannot
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection

