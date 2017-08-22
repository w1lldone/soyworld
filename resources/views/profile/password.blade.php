@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Ganti password</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/profile">Profil</a></li>
    <li class="breadcrumb-item active">Ganti password</li>
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
					    <h3 class="h4">Form ganti password</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/profile/password">
					      {{ method_field('PUT') }}	
					      {{ csrf_field() }}
					      	{{-- INPUT OLD PASSWORD --}}
				            <div class="form-group row {{ $errors->has('old_password') ? ' has-danger' : '' }}">
				              <label class="col-sm-3 form-control-label">Password Lama</label>
				              <div class="col-sm-9">
				                <input name="old_password" id="inputHorizontalSuccess" type="password" placeholder="password" class="form-control form-control-success " required>
				                @if ($errors->has('old_password'))
				      	          <small class="form-text text-danger">{{ $errors->first('old_password') }}</small>
				                @endif
				              </div>
				            </div>
				            {{-- INPUT PASSWORD --}}
				            <div class="form-group row {{ $errors->has('password') ? ' has-danger' : '' }}">
				              <label class="col-sm-3 form-control-label">Password</label>
				              <div class="col-sm-9">
				                <input name="password" id="inputHorizontalSuccess" type="password" placeholder="password" class="form-control form-control-success " required>
				                @if ($errors->has('password'))
				      	          <small class="form-text text-danger">{{ $errors->first('password') }}</small>
				                @endif
				              </div>
				            </div>
				            {{-- INPUT PASSWORD CONFIRMATION --}}
				            <div class="form-group row">
				              <label class="col-sm-3 form-control-label">Ulangi password</label>
				              <div class="col-sm-9">
				                <input name="password_confirmation" id="inputHorizontalSuccess" type="password" placeholder="Ulangi password" class="form-control form-control-success" required>
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