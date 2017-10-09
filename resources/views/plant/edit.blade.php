@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Edit data tanam</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{ $onfarm->id }}/view">Detail</a></li>
    <li class="breadcrumb-item active">Edit data tanam</li>
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
					    <h3 class="h4">Data tanam</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/plant/{{$onfarm->id}}">
					      {{ method_field('PUT') }}
					      {{ csrf_field() }}
					      {{-- INPUT DATE --}}
					      <div class="form-group row {{ $errors->has('planted_at') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Tanggal tanam</label>
					        <div class="col-sm-9">
					          <input data-provide="datepicker" type="text" placeholder="Tanggal tanam" data-date-format="yyyy-mm-dd" name="planted_at" class="form-control datepicker" value="{{ $onfarm->planted_at->toDateString() }}" required>
					          @if ($errors->has('planted_at'))
						          <small class="form-text text-danger">{{ $errors->first('planted_at') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT AREA --}}
					      <div class="form-group row {{ $errors->has('area') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Luas area</label>
					        <div class="col-sm-9">
					          <div class="input-group">
						          <input type="number" placeholder="Luas lahan dalam meter persegi" name="area" value="{{ $onfarm->area }}" class="form-control" required>
						          <span class="input-group-addon">m2<span>
					          </div>
					          @if ($errors->has('area'))
						          <small class="form-text text-danger">{{ $errors->first('area') }}</small>
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
