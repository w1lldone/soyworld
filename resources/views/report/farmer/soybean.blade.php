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
                  <h2 class="h3">Tanam dan Panen Kedelai</h2>
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
                  <div class="row">
                    <div class="col-md-6">
                      <canvas id="onfarmsChart" height="200rem"></canvas>
                    </div>
                    <div class="col-md-6">
                      <canvas id="harvestsChart" height="200rem"></canvas>
                    </div>
                  </div>
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
        var ctx = document.getElementById("onfarmsChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                labels: {!! $onfarms->keys() !!},
                datasets: [{
                    label: 'kg benih',
                    data: {!! $onfarms->values() !!},
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
              },
              title: {
                display: true,
                text: 'Grafik tanam kedelai'
              }
            }
        });

        var ctx = document.getElementById("harvestsChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
                labels: {!! $harvests->keys() !!},
                datasets: [{
                    label: 'kg kedelai',
                    data: {!! $harvests->values() !!},
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
              },
              title: {
                display: true,
                text: 'Grafik panen kedelai'
              }
            }
        });
    </script>
@endsection
