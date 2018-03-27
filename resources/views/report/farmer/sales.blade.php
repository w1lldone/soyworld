@extends('layouts.master')

@section('content')
    <!-- Page Header-->
    <header class="page-header">
      <div class="container-fluid">
        @include('report.farmer.nav')
      </div>
    </header>

    <div class="content-wrapper">
      <!-- LIST SECTION -->
      <section class="dashboard-header pb-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
              {{-- ONFARM --}}
              <div class="articles card mb-3">
                <div class="card-header d-flex align-items-center bg-violet">
                  <h2 class="h3">Penjualan Kedelai</h2>
                </div>
                <div class="card-body">
                  <form method="GET" id="filterForm">
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label">Pilih tahun</label>
                      <div class="col-sm-2">
                        <select class="form-control" name="year" onchange="$('#filterForm').submit()">
                          <option value="" @if(request('year') == '') selected @endif>All</option>
                          @foreach ($years->reverse() as $year)
                            <option @if(request('year') == $year) selected @endif>{{ $year }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </form>
                  <canvas id="salesChart" height="100rem"></canvas>
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
        var ctx = document.getElementById("salesChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                labels: {!! $sales->keys() !!},
                datasets: [{
                    label: 'kg Kedelai',
                    data: {!! $sales->values() !!},
                    borderColor: 'rgba(255, 99, 132, 1)',
                    backgroundColor: 'rgba(0, 0, 0, 0)'
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
