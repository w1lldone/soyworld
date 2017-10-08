@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Profil</h2>
  </div>
</header>

<div class="content-wrapper">
	<!-- LIST SECTION -->
	<section class="dashboard-header pb-0">
      <div class="container-fluid">
        <div class="row">
          {{-- PROFILE --}}
          <div class="col-lg-5 offset-lg-3">
	          <div class="client card">
	            <div class="card-close">
	              <div class="dropdown">
	                <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
	                <div aria-labelledby="closeCard" class="dropdown-menu has-shadow">
		                <a href="/profile/edit" class="dropdown-item edit"> <i class="fa fa-edit"></i>Edit</a>
		                <a href="/profile/email" class="dropdown-item edit"> <i class="fa fa-envelope"></i>Ganti email</a>
		                <a href="/profile/password" class="dropdown-item edit"> <i class="fa fa-key"></i>Ganti password</a>
		            </div>
	              </div>
	            </div>
	            <div class="card-body text-center">
	              <div class="client-avatar"><img src="img/person.svg" alt="..." class="img-fluid rounded-circle">
	                <div class="status bg-green"></div>
	              </div>
	              <div class="client-title">
	                <h3>{{ auth()->user()->name }}</h3><span>{{ auth()->user()->privilage->name }}</span>
	              </div>
	              <div class="client-info">
	                <div class="row">
	                  <div class="col-12 px-4">
	                  	<strong class="float-left">Email</strong><p class="float-right m-0">{{ auth()->user()->email }}</p><br>
	                  	<strong class="float-left">Alamat</strong><p class="float-right m-0">{{ auth()->user()->address }}</p><br>
	                  	<strong class="float-left">Kontak</strong><p class="float-right m-0">{{ auth()->user()->contact }}</p><br>
	                  	@if (auth()->user()->hasRole('petani'))
		                  	<strong class="float-left">Kelompok tani</strong><p class="float-right m-0">{{ auth()->user()->poktan->name }}</p><br>
	                  	@endif
	                  </div>
	                  {{-- <div class="col-4"><strong>20</strong><br><small>Supplier</small></div>
	                  <div class="col-4"><strong>9</strong><br><small>Aktivitas</small></div>
	                  <div class="col-4"><strong>2</strong><br><small>Penanaman</small></div> --}}
	                </div>
	              </div>
	              <div class="client-social d-flex justify-content-between"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a><a href="#" target="_blank"><i class="fa fa-twitter"></i></a><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a><a href="#" target="_blank"><i class="fa fa-instagram"></i></a><a href="#" target="_blank"><i class="fa fa-linkedin"></i></a></div>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </section>
</div>


@endsection
