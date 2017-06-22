@extends('layouts.master')

@section('sidebar')
  @include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Aktivitas tanam</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item"><a href="/onfarm/{{$activity->onfarm_id}}/view">Detail</a></li>
    <li class="breadcrumb-item active">Aktivitas tanam</li>
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
              <h3 class="h4">Aktivitas tanam - {{ $activity->onfarm->name }}</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 mb-4">
                  <h3>Foto</h3>
                  @empty ($activity->activity_photo->first())
                      <div class="text-center">
                        <h4 class="text-muted text-light">Tidak ada foto</h4>
                      </div>
                  @endempty
                  <div class="row">
                    @foreach ($activity->activity_photo as $photo)
                      <div class="col-sm-6">
                        <img src="{{ $photo->path }}" class="img-fluid" style=" height: 200px">
                      </div>
                    @endforeach
                  </div>
                </div>
                <div class="col-sm-6">
                  <h3>Nama kegiatan</h3>
                  <p>{{ $activity->name }}</p>
                </div>
                <div class="col-sm-6">
                  <h3 class="text-right">Tanggal pelaksanaan</h3>
                  <p class="text-right">{{ $activity->created_at->toFormattedDateString() }}</p>
                </div>
                <div class="col-sm-12">
                  <h3>Deskripsi kegiatan</h3>
                  @empty ($activity->description)
                      <h4 class="text-muted text-light text-center mt-3">Tidak ada deskripsi</h4>
                  @endempty
                  <p>{{ $activity->description }}</p>
                </div>
              </div>
            </div>
            {{-- CARD FOOTER --}}
            <div class="card-footer text-right">
              @can('delete', $activity)
                <form method="POST" action="/activity/{{$activity->id}}" class="d-inline">
                  {{ csrf_field() }}
                  {{ method_field('DELETE') }}
                  <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
              @endcan
              @can('update', $activity)
                <a href="/activity/{{$activity->id}}/edit" class="btn btn-warning">Edit</a>
              @endcan
              <a href="/onfarm/{{$activity->onfarm->id}}/view" class="btn btn-success">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
