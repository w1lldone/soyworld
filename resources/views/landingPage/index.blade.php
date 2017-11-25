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
			<hr class="separator light">
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
				<div class="col-md-4 py-4">
					<img src="/img/icons/farmer.svg" class="img-fluid mb-4" style="width: 100px">
					<h3 class="number">{{ $res['farmer'] }}</h3>
					<h5 class="description">Petani <br> berpengalaman</h5>
				</div>
				<div class="col-md-4 py-4">
					<img src="/img/icons/factory.svg" class="img-fluid mb-4" style="width: 100px">
					<h3 class="number">{{ $res['consumer'] }}</h3>
					<h5 class="description">Konsumen <br> industri</h5>
				</div>
				<div class="col-md-4 py-4">
					<img src="/img/icons/transaction.svg" class="img-fluid mb-4" style="width: 100px">
					<h3 class="number">{{ $res['transaction'] }}<sup>+</sup></h3>
					<h5 class="description">Total <br> transaksi</h5>
				</div>
			</div>
		</div>
	</section>

	<section class="news">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1>Data terbaru</h1>
				</div>
			</div>
			<hr class="separator dark">
			<div class="row">
				<div class="col-md-6 offset-md-3 py-5">
					<div class="card">
						<div class="card-header text-center bg-soy">
							<span class="title">Panen kedelai</span>
						</div>
						<div class="card-block text-center">
							<div class="bar-chart has-shadow bg-white">
							  <canvas id="harvestChart"></canvas>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 offset-md-3 pb-5">
					<div class="card">
						<div class="card-header text-center bg-soy">
							<span class="title">Harga kedelai</span>
						</div>
						<div class="card-block text-center">
							<h3 class="m-0 py-3">Rp. {{ $res['price'] }}/Kg</h3>
						</div>
					</div>
				</div>
				<div class="col-md-3 pb-5">
					<div class="card">
						<div class="card-header text-center bg-soy">
							<span class="title">Stok kedelai</span>
						</div>
						<div class="card-block text-center">
							<h3 class="m-0 py-3">{{ $res['stock'] }} Kg</h3>
						</div>
					</div>
				</div>
				<div class="col-md-6 offset-md-3">
					<a href="/login" class="btn btn-outline-success btn-lg btn-block">Beli kedelai</a>
				</div>
			</div>
		</div>
	</section>

	<section class="galery">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h1>Galeri kedelai</h1>
				</div>
			</div>
			<hr class="separator">
			<div class="row">
				<div class="col-md-6 col-lg-4 pt-5">
					<div class="card">
					  <img class="card-img-top img-fluid" src="/img/galery/0.jpeg" alt="Lahan kedelai">
					  <div class="card-footer">
					    <p class="card-text">Lahan kedelai sebelum dilakukan penanaman.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 pt-5">
					<div class="card">
					  <img class="card-img-top img-fluid" src="/img/galery/8.jpeg" alt="Pupuk kandang">
					  <div class="card-footer">
					    <p class="card-text">Penyimpanan pupuk kandang milik Kelompok Tani Makmur.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 pt-5">
					<div class="card">
					  <img class="card-img-top img-fluid" src="/img/galery/9.jpeg" alt="Kedelai usia 3 minggu">
					  <div class="card-footer">
					    <p class="card-text">Kedelai Anjasmoro usia 2&ndash;3 minggu.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 pt-5">
					<div class="card">
					  <img class="card-img-top img-fluid" src="/img/galery/7.jpeg" alt="Lahan kedelai">
					  <div class="card-footer">
					    <p class="card-text">Kedelai Anjasmoro usia 2 bulan.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 pt-5">
					<div class="card">
					  <img class="card-img-top img-fluid" src="/img/galery/1.jpeg" alt="Lahan kedelai">
					  <div class="card-footer">
					    <p class="card-text">Kedelai usia sekitar 80 hari.</p>
					  </div>
					</div>
				</div>
				<div class="col-md-6 col-lg-4 pt-5">
					<div class="card">
					  <img class="card-img-top img-fluid" src="/img/galery/2.jpeg" alt="Lahan kedelai">
					  <div class="card-footer">
					    <p class="card-text">Daun kedelai rontok menandakan kedelai siap panen.</p>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-4 d-flex justify-content-center">
					<img src="/img/logo/logo-white.svg" class="img-fluid">
				</div>
				<div class="col-md-8">
					<p class="m-0">
						Sistem informasi manajemen pengendalian inventori pasca panen kedelai (<strong>SOY</strong>WORLD) &copy; Wildan Ainurrahman under <a href="https://github.com/w1lldone/simkedelai/blob/master/LICENSE">GNU General Public License 3.0</a>. PHP framework by <a href="https://laravel.com/">Laravel 5.4</a>, HTML/CSS/JavaScript framework by <a href="https://bootstrapious.com/admin-templates">Bootstrapious</a> based on <a href="https://v4-alpha.getbootstrap.com/">Bootstrap 4.0.0-alpha.6</a>. Header image by <a href="https://www.flickr.com/photos/unitedsoybean/10060224723/">United Soybean Board</a> (<a href="https://creativecommons.org/licenses/by/2.0/">CC-BY 2.0</a>). Logo <a href='https://www.freepik.com/free-vector/elegant-business-logos_714464.htm'>Designed by Freepik</a> (edited). Icons by <a href="https://www.iconfinder.com/Wahib">Ely Wahib</a> (<a href="http://creativecommons.org/licenses/by/3.0/">CC-BY 3.0</a>), <a href="https://www.iconfinder.com/sergey9198">Sergey Tikhonov</a> (<a href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>), <a href="https://www.iconfinder.com/igorverizub">Igor Verizub</a> (<a href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>), <a href="https://www.iconfinder.com/stormicons">Alexandre Luis</a> (<a href="https://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>), <a href="https://www.iconfinder.com/addictedtocoffee">Oliver Pitsch</a> <a href="https://creativecommons.org/licenses/by/2.5/">CC BY 2.5</a>, and <a href="http://fontawesome.io/">Font Awesome</a> (<a href="http://scripts.sil.org/OFL">SIL OFL 1.1</a>)
					</p>
				</div>
			</div>
		</div>
	</footer>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function () {
	    var BARCHARTEXMPLE = $('#harvestChart');
	    var harvestChart = new Chart(BARCHARTEXMPLE, {
	        type: 'bar',
	        options: {
	            scales: {
	                xAxes: [{
	                    display: true,
	                    gridLines: {
	                        color: '#eee'
	                    }
	                }],
	                yAxes: [{
	                    display: true,
	                    gridLines: {
	                        color: '#eee'
	                    }
	                }]
	            },
	        },
	        data: {
	            labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "Desember"],
	            datasets: [
	                {
	                    label: "Panen kedelai (kg)",
	                    backgroundColor: '#54e69d',
	                    borderWidth: 1,
	                    data: [
	                    	@foreach ($res['harvests'] as $harvests)
	                    		{{ $harvests }},
	                    	@endforeach
	                    ],
	                }
	            ]
	        }
	    });
		})
	</script>
@endsection