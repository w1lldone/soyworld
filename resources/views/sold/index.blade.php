@extends('layouts.master')

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Riwayat penjualan</h2>
  </div>
</header>
<!-- Breadcrumb-->
{{-- <ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item active">Anggota</li>
  </div>
</ul> --}}

<div class="content-wrapper">
  <section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
      <div class="row bg-white has-shadow py-2">
        <div class="col-12">
          @include('layouts.alerts')
        </div>
        <!-- Item -->
        <div class="col-xl-6 col-sm-6">
          <div class="item">
            <div class="title clearfix">
              <span class="float-left">Total kedelai terjual</span>
              <span class="badge bg-info float-right">{{ $sold }} Kg</span>
            </div>
          </div>
        </div>
        <!-- Item -->
        <div class="col-xl-6 col-sm-6">
          <div class="item">
            <div class="title clearfix">
              <span class="float-left">Total pendapatan</span>
              <span class="badge bg-orange float-right">Rp. {{ $income }}</span>
            </div>
          </div>
        </div>        
      </div>
    </div>
  </section>

  <!-- TABLE SECTION -->
  <section class="tables pt-2">
  	<div class="container-fluid">
  	  <div class="row">
  	    <div class="col-12">
  	      <div class="card">
            <div class="card-body">
              <form class="form-inline">
                <label class="mr-sm-2" for="sort">Urutkan</label>
                <select name="sort" class="custom-select mb-2 mr-sm-2 mb-sm-0" id="sort">
                  <option value="latest">Terbaru</option>
                  <option value="oldest">Terlama</option>
                  <option value="expensive">Termahal</option>
                </select>

                <label class="mr-sm-2" for="month">Bulan</label>
                <input name="month" class="form-control mb-2 mr-sm-2 mb-sm-0" value="{{ request('month') }}" type="month" id="month">

                <button type="submit" class="btn btn-primary ml-auto">Submit</button>
              </form>
            </div>
  	        <div class="card-body table-responsive">
  	          <table class="table table-hover">
  	            <thead>
  	              <tr>
                    <th>Pembeli</th>
                    <th>Jumlah kedelai</th>
                    <th>Total pembayaran</th>
                    <th>Tanggal transaksi</th>
  	              </tr>
  	            </thead>
                <tbody>
                  @foreach ($sales as $sale)
                    <tr class="linked-row" data-href="/sold/{{ $sale->id }}">
                      <td>{{ $sale->transaction->user->name }}</td>
                      <td>{{ $sale->quantity }} Kg</td>
                      <td>Rp. {{ $sale->formattedTotalPrice() }}</td>
                      <td>{{ $sale->transaction->created_at->format('j F Y') }}</td>
                    </tr>
                  @endforeach
                </tbody>
  	          </table>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  </section>
</div>
@endsection

@section('script')
  <script type="text/javascript">
    $(function(){
      $("#sort").val("{{ request('sort') }}");
    });

    $(".linked-row").click(function() {
        window.location = $(this).data("href");
    });
  </script>
@endsection