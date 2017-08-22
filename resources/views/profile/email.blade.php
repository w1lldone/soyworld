@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit email</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/profile">Profil</a></li>
    <li class="breadcrumb-item active">Edit email</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				{{-- HORIZONTAL FORM --}}
				<div class="col-md-8 offset-md-2">
					@include('layouts.alerts')
					<div class="card">
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Form edit email</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/profile/email">
					      {{ method_field('PUT') }}	
					      {{ csrf_field() }}
					      {{-- OLD EMAIL --}}
					      <div class="form-group row">
					        <label class="col-sm-3 form-control-label">Email lama</label>
					        <div class="col-sm-9">
					          <input type="text" class="form-control form-control-success" value="{{ $user->email }}" disabled>
					        </div>
					      </div>
					      {{-- INPUT EMAIL --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Email baru</label>
					        <div class="col-sm-9">
					          <input name="email" id="inputHorizontalSuccess" type="text" placeholder="Masukan email" class="form-control form-control-success" required>
					          @if ($errors->has('email'))
						          <small class="form-text text-danger">{{ $errors->first('email') }}</small>
					          @endif
					        </div>
					      </div>

					      <div class="form-group row">       
					        <div class="col-sm-9 offset-sm-3">
					          <button class="btn btn-warning" onclick="return history.go(-1)">Kembali</button>
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