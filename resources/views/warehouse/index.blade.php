@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Gudang</h2>
  </div>
</header>

<div class="content-wrapper">

  <!-- TABLE SECTION -->
  <section class="tables pt-2">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          @include('layouts.alerts')
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Daftar panen kedelai Kelompok tani {{ auth()->user()->poktan->name }}</h3>
            </div>
            <div class="card-body table-responsive">
              <form action="{{ route('handling.store') }}" method="POST">
                {{ csrf_field() }}
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th></th>
                      <th>Sisa stok</th>
                      <th>
                        <div class="btn-group">
                          <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Terapkan penanganan
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            @foreach ($harvests->first()->handlings as $handling)
                              <button name="handling" class="dropdown-item" type="submit" value="{{ $handling }}" href="#">{{ $handling }}</button>
                            @endforeach
                          </div>
                        </div>
                        <button class="btn btn-secondary btn-sm" type="button">Jual</button>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($harvests as $harvest)
                    <tr>
                      <td>
                        <div class="form-check">
                          <label class="form-check-label">
                            <input name="id[{{ $loop->index }}]" value="{{ $harvest->id }}" type="checkbox" class="form-check-input">
                            {{-- {{ $harvests->toArray()['from']+$loop->index }} --}}
                          </label>
                        </div>
                      </td>
                      <td>
                        <b>{{ $harvest->onfarm->name }}</b> <br>
                        <span class="text-muted">
                          <i class="fa fa-calendar fa-fw"></i> Panen: {{ $harvest->harvested_at->format('j F Y') }} &nbsp;
                          <i class="fa fa-user-o fa-fw"></i> {{ $harvest->onfarm->user->name }}
                        </span>
                      </td>
                      <td>
                        @if (empty($harvest->ending_stock) && $harvest->on_sale == 0)
                          <button type="button" data-toggle="modal" data-target="#tambahStok{{$harvest->id}}" class="round-link btn">Tambah stok</button>
                          @include('harvest.modal')
                        @else
                          {{ $harvest->ending_stock }} Kg
                        @endif
                      </td>
                      <td></td>
                    </tr>
                    @endforeach   
                  </tbody>
                </table>
              </form>
              <div class="text-center">
                {{ $harvests->links() }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
