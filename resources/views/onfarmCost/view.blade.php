@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Biaya on farm</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{$onfarmCost->onfarm_id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Biaya</li>
  </div>
</ul>

<div class="content-wrapper">
  <!-- TABLES SECTION  -->
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        {{-- HORIZONTAL FORM --}}
        <div class="col-md-12 offset-lg-1 col-lg-9">
          @include('layouts.alerts')
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Biaya tanam - {{ $onfarmCost->onfarm->name }}</h3>
            </div>
            <div class="card-body">
              <div class="row">
                {{-- COST DATA --}}
                <div class="col-sm-6">
                  <h3>Keperluan</h3>
                  <span>{{ $onfarmCost->name }}</span>
                  <h3 class="mt-4">Deskripsi</h3>
                  @if (empty($onfarmCost->description))
                    <div class="text-center mt-4 text-muted">
                      <img src="/img/stock/edit.svg" class="img-fluid" width="100px">
                      <br>
                      <span>Tidak ada deskripsi</span>
                    </div>
                  @endif
                  <p>{{ $onfarmCost->description }}</p>
                </div>
                <div class="col-sm-6">
                  <h3>Data pembelian</h3>
                  <div class="d-flex justify-content-between">
                    <div>Supplier:</div>
                    <span>{{ $onfarmCost->supplier->name }}</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Petani:</div>
                    <span>{{ $onfarmCost->onfarm->user->name }}</span>
                  </div>
                  <div class="d-flex justify-content-between">
                    <div>Tanggal beli:</div>
                    <span>{{ $onfarmCost->created_at->toFormattedDateString() }}</span>
                  </div>
                  <h3 class="mt-4">Biaya</h3>
                  <div class="d-flex justify-content-between">
                    <div>Total biaya:</div>
                    <span>Rp. {{ $onfarmCost->formattedPrice() }}</span>
                  </div>
                </div>
              </div>
            </div>
            {{-- CARD FOOTER --}}
            <div class="card-footer text-right">
              <form method="POST" action="/onfarmcost/{{$onfarmCost->id}}" class="d-inline">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" onclick="return confirm('Apakah anda yakin akan menghapus biaya?')" class="btn btn-danger">Hapus</button>
              </form>
              {{-- @can('update', $seed)
                <a href="/seed/{{$seed->id}}/edit" class="btn btn-warning">Edit</a>
              @endcan --}}
              <a href="/onfarmcost/{{$onfarmCost->id}}/edit" class="btn btn-warning">Edit</a>
              <a href="/onfarm/{{$onfarmCost->onfarm_id}}/view" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
