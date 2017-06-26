@extends('layouts.master')



@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tambah kelompok tani</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/poktan">Kelompok tani</a></li>
    <li class="breadcrumb-item active">Tambah kelompok tani</li>
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
					    <h3 class="h4">Data kelompok tani</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/poktan">
					      {{ csrf_field() }}
					      {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Nama</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" placeholder="Nama kelompok tani" class="form-control form-control-success" value="{{ old('name') }}" required>
					          @if ($errors->has('name'))
						          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT ADDRESS --}}
					      <div class="form-group row {{ $errors->has('address') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Alamat</label>
					        <div class="col-sm-9">
					          <input name="address" id="inputHorizontalSuccess" type="text" placeholder="Alamat lengkap" class="form-control form-control-success " value="{{ old('address') }}" required>
					          @if ($errors->has('address'))
						          <small class="form-text text-danger">{{ $errors->first('address') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT LEADER --}}
					      <div class="form-group row">
					        <label class="col-sm-3 form-control-label">Ketua</label>
					        <div class="col-sm-9">
					          <select name="leader_user_id" class="form-control">
                                @foreach ($leaders as $leader)
                                	<option value="{{ $leader->id }}">{{ $leader->name }}</option>
                                @endforeach
                              </select>
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
