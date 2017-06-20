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
        <div class="col-md-12 offset-lg-1 col-lg-9">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">{{ $seed->name }}</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 mb-4">
                  <h3>Foto</h3>
                  @foreach ($seed->seed_photo as $photo)
                    <img src="{{ $photo->path }}" class="img-fluid" style=" height: 200px">
                  @endforeach
                </div>
                {{-- SEED DATA --}}
                <div class="col-sm-6">
                  <h3>Data benih</h3>
                  <div class="d-flex justify-content-between">
                    <div>Supplier:</div>
                    <span>{{ $seed->supplier->name }}</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Petani:</div>
                    <span>{{ $seed->onfarm->user->name }}</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Tanggal beli:</div>
                    <span>{{ $seed->created_at->toFormattedDateString() }}</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Tanggal tanam:</div>
                    @empty ($seed->onfarm->planted_at)
                        <span>Belum ditanam</span>
                    @endempty
                    @isset ($seed->onfarm->planted_at)
                      <span>{{ $seed->onfarm->planted_at->toFormattedDateString() }}</span>
                    @endisset
                  </div>
                </div>
                {{-- FARMER DATA --}}
                <div class="col-sm-6">
                  <h3><br></h3>
                  <div class="d-flex justify-content-between">
                    <div>Jumlah:</div>
                    <span>{{ $seed->quantity }} Kg</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Harga per Kg:</div>
                    <span>Rp. {{ number_format($seed->price, 0, ",", ".") }}</span>
                  </div>
                  <hr>
                  <div class="d-flex justify-content-between">
                    <div>Harga total:</div>
                    <span>Rp. {{ number_format($seed->price*$seed->quantity, 0, ",", ".") }}</span>
                  </div>
                </div>
              </div>
            </div>
            {{-- CARD FOOTER --}}
            <div class="card-footer text-right">
              @can('delete', $seed)
                <form method="POST" action="/seed/{{$seed->id}}" class="d-inline">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              @endcan
              @can('update', $seed)
                <a href="/seed/{{$seed->id}}/edit" class="btn btn-warning">Edit</a>
              @endcan
              <a href="/onfarm/{{$seed->onfarm->id}}/view" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
