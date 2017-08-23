@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Panen Kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">Panen</a></li>
    <li class="breadcrumb-item active">Tambah pemanenan</li>
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
					    <h3 class="h4">Form panen kedelai</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/harvest">
					      {{ csrf_field() }}
				      	{{-- INPUT ONFARM --}}
  				      <div class="form-group row {{ $errors->has('onfarm_id') ? ' has-danger' : '' }}">
  					      <label class="col-sm-3 form-control-label">Penanaman</label>
  					      <div class="col-sm-9">
						      @if (request()->has('onfarm_id'))
  					        <select disabled name="onfarm_id" class="form-control">
  					          <option value="{{ request('onfarm_id') }}">{{ \App\Onfarm::find(request('onfarm_id'))->name }}</option>
										</select>
					      	@else
					          <select name="onfarm_id" class="form-control">
					          	<option></option>
					          	@if (auth()->user()->isSuperadmin())
					          		@foreach (\App\Onfarm::where('planted_at', '><', null)->doesntHave('harvest')->get() as $onfarm)
	                      	<option value="{{ $onfarm->id }}">{{ $onfarm->name }}</option>
	                      @endforeach
					          	@else
					          		@foreach (auth()->user()->onfarm()->doesntHave('harvest')->where('planted_at', '><', null)->get() as $onfarm)
	                      	<option value="{{ $onfarm->id }}">{{ $onfarm->name }}</option>
	                      @endforeach
					          	@endif
                    </select>
                    @if ($errors->has('onfarm_id'))
          	          <small class="form-text text-danger">{{ $errors->first('onfarm_id') }}</small>
                    @endif
					        </div>
						    </div>
					      @endif
					      {{-- INPUT DATE --}}
					      <div class="form-group row {{ $errors->has('harvested_at') ? ' has-danger' : '' }}">
  					      <label class="col-sm-3 form-control-label">Tanggal</label>
  					      <div class="col-sm-9">
  					      	<div class="input-group">
		  					      <input value="{{ old('harvested_at') }}" data-provide="datepicker" type="text" placeholder="Tanggal panen" name="harvested_at" class="form-control datepicker" required>
		  					      <span class="input-group-addon""><i class="fa fa-calendar"></i></span>
			                @if ($errors->has('harvested_at'))
			      	          <small class="form-text text-danger">{{ $errors->first('harvested_at') }}</small>
			                @endif
  					      	</div>
  					      </div>
	  					  </div>
	  					  {{-- INPUT WEIGHT --}}
					      <div class="form-group row  {{ $errors->has('weight') ? ' has-danger' : '' }}">
  					      <label class="col-sm-3 form-control-label">Jumlah Kedelai</label>
  					      <div class="col-sm-9">
  					      	<div class="input-group">
		  					      <input value="{{ old('weight') }}" type="number" placeholder="Total berat kedelai" name="weight" class="form-control" required>
		  					      <span class="input-group-addon"">Kg</span>
		  					      @if ($errors->has('weight'))
			      	          <small class="form-text text-danger">{{ $errors->first('weight') }}</small>
			                @endif
  					      	</div>
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
