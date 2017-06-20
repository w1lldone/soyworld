@extends('layouts.master')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Detail benih</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{$seed->onfarm_id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Benih</li>
  </div>
</ul>

<div class="content-wrapper">
  <!-- TABLES SECTION  -->
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        {{-- HORIZONTAL FORM --}}
        <div class="col-md-8 offset-md-1">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">{{ $seed->name }}</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 mb-4">
                  <h3 class="text-light">Foto</h3>
                  @foreach ($seed->seed_photo as $photo)
                    <img src="{{ $photo->path }}" class="img-fluid" style=" height: 200px">
                  @endforeach
                </div>
                <div class="col-sm-6">
                  <h3 class="text-light">Data benih</h3>
                  <div class="d-flex justify-content-between">
                    <div>Supplier:</div>
                    <h4><span class="badge badge-primary">{{ $seed->supplier->name }}</span></h4>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Jumlah:</div>
                    <h4><span class="badge badge-success">{{ $seed->quantity }} Kg</span></h4>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Harga per Kg:</div>
                    <h4><span class="badge badge-warning">Rp. {{ number_format($seed->price, 0, ",", ".") }}</span></h4>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between">
                    <div>Harga total:</div>
                    <h4><span class="badge badge-warning">Rp. {{ number_format($seed->price*$seed->quantity, 0, ",", ".") }}</span></h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
