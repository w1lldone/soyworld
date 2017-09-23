@extends('layouts.master')

@section('content')
  <!-- Page Header-->
  <header class="page-header">
    <div class="container-fluid">
      <h2 class="no-margin-bottom">Detail riwayat penjualan</h2>
    </div>
  </header>

  <!-- Breadcrumb-->
  <ul class="breadcrumb">
    <div class="container-fluid">
      <li class="breadcrumb-item"><a href="/sold">Riwayat penjualan</a></li>
      <li class="breadcrumb-item active">Detail</li>
    </div>
  </ul>

  <div class="content-wrapper">
    <section>
      <div class="row">
        <div class="col-6 offset-lg-3">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <h3 class="h4">Informasi penjualan</h3>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <h4 class="text-light text-muted">Nama pembeli</h4>
                  <span><b>{{ $detail->transaction->user->name }}</b></span>
                </div>
                <div class="col-md-6 mb-3">
                  <h4 class="text-light text-muted">Alamat</h4>
                  <span><b>{{ $detail->transaction->user->address }}</b></span>
                </div>
                <div class="col-md-6 mb-3">
                  <h4 class="text-light text-muted">Kontak</h4>
                  <span><b>{{ $detail->transaction->user->contact }}</b></span>
                </div>
                <div class="col-md-6 mb-3">
                  <h4 class="text-light text-muted">Tanggal pembelian</h4>
                  <span><b>{{ $detail->created_at->format('j F Y') }}</b></span>
                </div>
                <div class="col-12 mt-2">
                  <h4 class="text-light text-muted">Detail penjualan</h4>
                  <table class="table table-hover">
                    <tr>
                      <th>Jumlah kedelai</th>
                      <td>{{ $detail->quantity }} Kg</td>
                    </tr>
                    <tr>
                      <th>Harga per Kg</th>
                      <td>Rp. {{ $detail->price }}</td>
                    </tr>
                    <tr>
                      <th>Total pembayaran</th>
                      <td>Rp. {{ $detail->formattedTotalPrice() }}</td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection