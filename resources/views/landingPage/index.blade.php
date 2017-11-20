@extends('layouts.master-lp')

@section('content')
	<!-- HEADER -->
	<section class="header">
		<div class="container py-4 d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 py-5 text-center">
					<img src="img/logo/logo-white.svg" class="img-fluid" width="500px">
					<h4 class="text-white mt-4">Sistem Informasi Pengendalian Inventori <br> Pasca Panen Kedelai</h4>
				</div>
			</div>
		</div>
	</section>

	<!-- INTRODUCTION -->
	<section class="intro">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1>Tentang <strong>SOY</strong>WORLD</h1>
				</div>
			</div>
			<hr style="background-color: white; width: 55%">
			<div class="row mt-5">
				<div class="col-md-8 offset-md-2">
					<p><strong>SOY</strong>WORLD adalah sistem informasi yang menjadi wadah bagi petani kedelai untuk memasarkan hasil panen mereka langsung kepada industri. <strong>SOY</strong>WORLD menyediakan data penanaman kedelai, aktifita tanam, biaya produksi, panen, penanganan pasca panen, dan stok realtime kedelai. Diharapkan, pembuatan sistem informasi pengendalian inventory pasca panen kedelai ini bisa memperbaiki sistem penanganan pasca panen kedelai lokal, mepermudah pengendalian ketersediaan kedelai lokal secara kontinyu, menjembatani petani kedelai lokal dengan para pelaku industri, dan mensejahterakan petani kedelai lokal.</p>
				</div>
			</div>
		</div>
	</section>

	<!-- DATA -->
	<section class="info">
		<div class="container">
			<div class="row text-center">
				<div class="col-4">
					<img src="/img/icons/farmer.svg" class="img-fluid mb-4" style="width: 100px">
					<h3 class="number">13</h3>
					<h5 class="description">Petani <br> berpengalaman</h5>
				</div>
				<div class="col-4">
					<img src="/img/icons/factory.svg" class="img-fluid mb-4" style="width: 100px">
					<h3 class="number">50</h3>
					<h5 class="description">Konsumen <br> industri</h5>
				</div>
				<div class="col-4">
					<img src="/img/icons/transaction.svg" class="img-fluid mb-4" style="width: 100px">
					<h3 class="number">100<sup>+</sup></h3>
					<h5 class="description">Total <br> transaksi</h5>
				</div>
			</div>
		</div>
	</section>
@endsection