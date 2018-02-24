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
    <li class="breadcrumb-item"><a href="{{ route('harvest.show', $harvest) }}">Detail panen</a></li>
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
              <h3 class="h4">Penanganan pasca panen {{ $harvest->onfarm->name }}</h3>
            </div>
            <div class="card-body">
              <div class="clearfix">
                <span class="float-left"><strong>Nama kegiatan:</strong></span>
                <span class="float-right">{{ $postharvest->name }}</span>
              </div>
              <div class="clearfix">
                <span class="float-left"><strong>Tanggal pelaksanaan:</strong></span>
                <span class="float-right">{{ $postharvest->formatDate($pivot->date) }}</span>
              </div>
              <div class="clearfix">
                <span class="float-left"><strong>Biaya:</strong></span>
                <span class="float-right">Rp. {{ $pivot->cost }}</span>
              </div>
              <div class="clearfix">
                <span class="float-left"><strong>Pengurangan berat:</strong></span>
                <span class="float-right">{{ $pivot->weight_reduction }} kg</span>
              </div>
            </div>
            {{-- CARD FOOTER --}}
            <div class="card-footer text-right">
              @can('deletePostharvest', $harvest)
                <form method="POST" action="{{ route('postharvest.destroy', [$harvest, $postharvest]) }}" class="d-inline">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button onclick="return confirm('Apakah anda yakin menghapus penanganan?')" type="submit" class="btn btn-danger">Hapus</button>
                </form>
              @endcan
              @can('updatePostharvest', $harvest)
                <a href="{{ route('postharvest.edit', [$harvest, $postharvest]) }}" class="btn btn-warning">Edit</a>
              @endcan
              <a href="{{ route('harvest.show', $harvest) }}" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
