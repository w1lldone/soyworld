@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Harga kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
{{-- <ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item active">Tambah supplier</li>
  </div>
</ul> --}}

<div class="content-wrapper">
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<div class="card">
						<div class="card-header bg-violet">
							<h3>Riwayat harga kedelai per kilogram</h3>
						</div>
						<div class="card-block">
							<table class="table table-stripe">
								<thead>
									<th>No</th>
									<th>Harga</th>
									<th>Tanggal</th>
								</thead>
								<tbody>
									@foreach ($prices as $price)
										<tr>
											<td>{{ $loop->index+1 }}</td>
											<td>Rp. {{ number_format($price->nominal, 0, ',', '.') }}</td>
											<td>{{ $price->created_at->format('d F Y') }}</td>											
										</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<div class="card-header bg-violet">
							<h2>Perbarui harga kedelai</h3>
						</div>
						<div class="card-block">
							<p>Harga terkini Rp. {{ $latestPrice }}</p>
							<form class="form" method="POST" action="/price">
								{{ csrf_field() }}
								<div class="form-group">
									<input type="number" name="nominal" class="form-control" required>
								</div>
								<button type="submit" class="btn btn-success float-right" onclick="return confirm('Apakah anda yakin?')">Simpan</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


@endsection
