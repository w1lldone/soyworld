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
		<li class="breadcrumb-item"><a href="/harvest">Panen</a></li>
		<li class="breadcrumb-item active">Edit stok</li>
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
							<form class="form-horizontal" method="POST" action="/harvest/{{ $harvest->id }}/stock">
								{{ csrf_field() }}
								{{ method_field('PUT') }}
								{{-- INPUT DATE --}}
								<div class="form-group row {{ $errors->has('initial_stock') ? ' has-danger' : '' }}">
									<label class="col-sm-3 form-control-label">Stok</label>
									<div class="col-sm-9">
										<div class="input-group">
											<input value="{{ $harvest->initial_stock }}" type="number" placeholder="Tanggal panen" name="initial_stock" class="form-control" required>
											@if ($errors->has('initial_stock'))
											<small class="form-text text-danger">{{ $errors->first('initial_stock') }}</small>
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
