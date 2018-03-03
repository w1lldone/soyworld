@extends('layouts.master')

@section('content')
    <!-- Page Header-->
    <header class="page-header">
      <div class="container-fluid">
        @include('report.poktan.nav')
      </div>
    </header>

    <div class="content-wrapper">
      <!-- LIST SECTION -->
      <section class="dashboard-header pb-0">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-8">
              {{-- ONFARM --}}
              <div class="articles card mb-3">
                <div class="card-header d-flex align-items-center bg-violet">
                  <h2 class="h3">Penjualan Kedelai</h2>
                </div>
                <div class="card-body">
                  <canvas id="salesChart" height="150rem"></canvas>
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
