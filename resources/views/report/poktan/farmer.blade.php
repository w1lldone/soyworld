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
          <div class="col-lg-12">
            {{-- ONFARM --}}
            <div class="articles card mb-3">
              <div class="card-header d-flex align-items-center bg-violet">
                <h2 class="h3">Kontribusi petani</h2>
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
                <canvas id="contributionChart" height="150rem"></canvas>
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
    var ctx = document.getElementById("contributionChart");
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            // labels: ["Red", "Blue", "Yellow", "Green", "Purple", "Orange"],
            labels: {!! $farmers->pluck('name') !!},
            datasets: [{
                label: 'kg Kedelai',
                data: {!! $farmers->pluck('total_harvest') !!},
                backgroundColor: 'rgba(255,99,132,1)',
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
