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
            <div class="card">
              <div class="card-header d-flex align-items-center">
                <h3 class="h4">Daftar panen kedelai Kelompok tani {{ auth()->user()->poktan->name }}</h3>
              </div>
              <div class="card-body table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama</th>
                      <th>Penanganan</th>
                      <th>Sisa stok</th>
                    </tr>
                  </thead>
                  <tbody>
                    <form>
                      @foreach ($harvests as $harvest)
                        <tr>
                          <td>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input name="id" value="{{ $harvest->id }}" type="checkbox" class="form-check-input">
                                {{-- {{ $harvests->toArray()['from']+$loop->index }} --}}
                              </label>
                            </div>
                          </td>
                          <td>
                            <b>{{ $harvest->onfarm->name }}</b> <br>
                            <span class="text-muted">
                              <i class="fa fa-calendar fa-fw"></i> Panen: {{ $harvest->harvested_at->format('j F Y') }} <br>
                              <i class="fa fa-user-o fa-fw"></i> {{ $harvest->onfarm->user->name }}
                            </span>
                          </td>
                          <td>
                            @foreach ($harvest->handlings as $handling)
                              
                            @endforeach
                          </td>
                          <td>
                            @if (empty($harvest->ending_stock) && $harvest->on_sale == 0)
                              <button type="button" data-toggle="modal" data-target="#tambahStok{{$harvest->id}}" class="round-link btn">Tambah stok</button>
                              @include('harvest.modal')
                            @else
                              {{ $harvest->ending_stock }} Kg
                            @endif
                          </td>
                        </tr>
                       @endforeach   
                    </form>
                  </tbody>
                </table>
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
