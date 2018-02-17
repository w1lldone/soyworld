@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">On farm Kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item active">Tambah on farm</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				{{-- HORIZONTAL FORM --}}
				<div class="col-md-8 offset-md-2">
					<div class="card">
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Form tambah on farm</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/onfarm">
					      {{ csrf_field() }}
					      @isset ($users)
						      {{-- INPUT PRIVILAGES --}}
						      <div class="form-group row">
						        <label class="col-sm-3 form-control-label">Petani</label>
						        <div class="col-sm-9">
						          <select name="input_user" class="form-control">
                        @foreach ($users as $user)
                        	<option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                      </select>
						        </div>
						      </div>
					      @endisset
					      {{-- HIDDEN INPUT --}}
					      <input type="hidden" name="auth_user" value="{{ auth()->user()->id }}">
					      {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Judul</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" placeholder="contoh: Tanam kedelai bulan maret" class="form-control form-control-success" value="{{ old('name') }}" required>
					          @if ($errors->has('name'))
						          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
					          @endif
					        </div>
					      </div>
					      <div class="form-group row {{ $errors->has('description') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Deskripsi <small>(opsional)</small></label>
					        <div class="col-sm-9">
					          <textarea name="description" class="form-control" id="description" rows="3" value="{{ old('description') }}"></textarea>
					          @if ($errors->has('name'))
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
