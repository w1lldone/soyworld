@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit aktivitas tanam</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{$activity->onfarm->id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Edit aktivitas tanam</li>
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
					    <h3 class="h4">Data Aktivitas tanam</h3>
					  </div>
					  <div class="card-body">
					  	{{-- INPUT PHOTO --}}
					      <div class="form-group row {{ $errors->has('photo1') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Foto</label>
					        @foreach ($activity->activity_photo as $photo)
						        <div class="col-sm-9 mb-1 {{ $loop->first ? '': 'offset-sm-3' }}">
						          <img src="{{ $photo->path }}" class="img-fluid mb-2" style="width: 200px;">
						          <div class="d-flex flex-row">
							          <form method="POST" class="pr-2" action="/activityphoto/{{ $photo->id }}" enctype="multipart/form-data">
							          	  {{ csrf_field() }}
								          <input onclick="return confirm('Foto akan langsung diganti. Apa anda yakin?')" name="photo" type="file" class="inputfile inputfile-warning" id="file-1" onchange="this.form.submit()">
								          <label for="file-1"><i class="fa fa-edit"></i><span style="color: inherit;">Ubah foto&hellip;</span></label>
							          </form>
							          <form method="POST" action="/activityphoto/{{ $photo->id }}">
							        		{{ csrf_field() }}
							        		{{ method_field('DELETE') }}
							        		<button title="Hapus foto" data-toggle="tooltip" type="submit" onclick="return confirm('Foto akan langsung dihapus. Apa anda yakin menghapus foto?')" class="btn btn-danger"><i class="fa fa-trash"></i></button>
							        	</form>
						          </div>
						        </div>
					        @endforeach
					        <div class="col-sm-9 offset-sm-3">
					        	<form method="POST" action="/activityphoto" enctype="multipart/form-data">
					        		{{ csrf_field() }}
					        		<input type="hidden" name="activity_id" value="{{ $activity->id }}">
					        		<input name="photo" id="file-2" type="file" class="inputfile inputfile-1" onchange="this.form.submit()">
					        		<label for="file-2"><i class="fa fa-upload"></i> <span style="color: inherit;">Tambah foto&hellip;</span></label>
					        	</form>
					        </div>
					      </div>

					    <form class="form-horizontal" method="POST" action="/activity/{{$activity->id}}">
					      {{ method_field('PUT') }}
					      {{ csrf_field() }}
					      {{-- INPUT NAME --}}
						      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
						        <label class="col-sm-3 form-control-label">Nama kegiatan</label>
						        <div class="col-sm-9">
						          <div class="input-group">
	                                <input type="text" name="name" class="form-control" placeholder="Nama aktivitas tanam" value="{{ $activity->name }}">
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
	                                <input data-provide="datepicker" type="text" placeholder="Tanggal aktivitas" name="date" class="form-control datepicker" value="{{ $activity->date->toDateString() }}" required>
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
	                                <textarea name="description" class="form-control">{{ $activity->description }}</textarea>
	                              </div>
						          @if ($errors->has('description'))
							          <small class="form-text text-danger">{{ $errors->first('description') }}</small>
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