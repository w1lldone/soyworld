@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Penanganan pasca panen</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/harvest">Panen</a></li>
    <li class="breadcrumb-item"><a href="/harvest/{{$postharvest->harvest_id}}/view">Detail panen</a></li>
    <li class="breadcrumb-item active">Penanganan pasca panen</li>
  </div>
</ul>

<div class="content-wrapper">
  <!-- TABLES SECTION  -->
  <section class="forms">
    <div class="container-fluid">
      <div class="row">
        {{-- HORIZONTAL FORM --}}
        <div class="offset-lg-3 col-lg-6">
          @include('layouts.alerts')
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Penanganan pasca panen {{ $postharvest->harvest->onfarm->name }}</h3>
            </div>
            <div class="card-body">
              <div class="clearfix">
                <span class="float-left"><strong>Nama kegiatan:</strong></span>
                <span class="float-right">{{ $postharvest->name }}</span>
              </div>
              <div class="clearfix">
                <span class="float-left"><strong>Tanggal pelaksanaan:</strong></span>
                <span class="float-right">{{ $postharvest->date->format('j F Y') }}</span>
              </div>
              <div class="clearfix">
                <span class="float-left"><strong>Biaya:</strong></span>
                <span class="float-right">Rp. {{ $postharvest->formattedCost() }}</span>
              </div>
            </div>
            {{-- CARD FOOTER --}}
            <div class="card-footer text-right">
              @can('delete', $postharvest)
                <form method="POST" action="/postharvest/{{$postharvest->id}}" class="d-inline">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              @endcan
              @can('update', $postharvest)
                <a href="/postharvest/{{$postharvest->id}}/edit" class="btn btn-warning">Edit</a>
              @endcan
              <a href="/harvest/{{$postharvest->harvest_id}}/view" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
