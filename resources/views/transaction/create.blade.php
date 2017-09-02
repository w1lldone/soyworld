@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
	<div class="container-fluid">
		<h2 class="no-margin-bottom">Beli kedelai</h2>
	</div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
	<div class="container-fluid">
		<li class="breadcrumb-item"><a href="/transaction">Transaksi</a></li>
		<li class="breadcrumb-item active">Beli kedelai</li>
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
							<h3 class="h4">Form pembelian kedelai</h3>
						</div>
						<div class="card-body">
							<form class="form-horizontal" method="POST" action="/transaction">
								{{ csrf_field() }}
                {{-- BADGE --}}
                <div class="row">
                  <div class="col-sm-9 offset-sm-3 d-flex">
                    <h2 class="px-1"><span class="badge badge-primary p-2 text-white">Stok <b>{{ \App\Harvest::readyStock()->sum('ending_stock') }} Kg</b></span></h2>
                    <h2 class="px-1"><span class="badge badge-success p-2 text-white">Harga <b>Rp. 8000/Kg</b></span></h2>
                  </div>
                </div>
                {{-- INPUT QUANTITY --}}
								<div class="form-group row {{ $errors->has('quantity') ? ' has-danger' : '' }}">
									<label class="col-sm-3 form-control-label">Jumlah kedelai</label>
									<div class="col-sm-9">
                    <div class="input-group">
                      <input value="{{ old('quantity') }}" type="number" placeholder="Masukkan jumlah kedelai" name="quantity" class="form-control" required>
                      <span class="input-group-addon"">Kg</span>
                    </div>
                    @if ($errors->has('quantity'))
                      <small class="form-text text-danger">{{ $errors->first('quantity') }}</small>
                    @endif
									</div>
								</div>
                {{-- INPUT ADDRESS --}}
                <div class="form-group row {{ $errors->has('address') ? ' has-danger' : '' }}">
                  <label class="col-sm-3 form-control-label">Dikirim ke</label>
                  <div class="col-sm-9">
                    <div class="input-group">
                      <textarea class="form-control" name="delivered_to">{{ empty(old('delivered_to')) ? auth()->user()->address : old('delivered_to') }}</textarea>
                    </div>
                    @if ($errors->has('delivered_to'))
                      <small class="form-text text-danger">{{ $errors->first('delivered_to') }}</small>
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
