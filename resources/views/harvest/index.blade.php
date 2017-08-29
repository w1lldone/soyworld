@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Panen kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
{{-- <ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item active">Anggota</li>
  </div>
</ul> --}}

<div class="content-wrapper">
  <!-- TABLE SECTION -->
  <section class="tables">
  	<div class="container-fluid">
  	  <div class="row">
  	    <div class="col-12">
  	      @include('layouts.alers')
  	      <div class="card">
  	        <div class="card-close">
  	          <div class="dropdown">
  	            <a href="/harvest/create" title="Tambah panen kedelai" data-placement="left" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
  	          </div>
  	        </div>
  	        <div class="card-header d-flex align-items-center">
  	          <h3 class="h4">Daftar panen kedelai</h3>
  	        </div>
  	        <div class="card-body table-responsive">
  	          <table class="table table-hover">
  	            <thead>
  	              <tr>
  	                <th class="hidden-sm-down">#</th>
  	                <th>Nama</th>
  	                <th class="hidden-sm-down">Petani</th>
  	                <th class="hidden-sm-down">Benih</th>
  	                <th class="hidden-sm-down">Tanam</th>
  	                <th class="hidden-sm-down">Biaya</th>
  	                <th class="hidden-sm-down">Aktivitas terakhir</th>
  	                <th class="hidden-md-up">Status</th>
  	                <th></th>
  	              </tr>
  	            </thead>
  	          </table>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  	
  </section>
</div>