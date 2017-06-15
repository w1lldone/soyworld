@extends('layouts.master')

@section('sidebar')
	@include('layouts.sidebar')
@endsection

@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">On farm Kedelai</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/onfarm">On farm</a></li>
    <li class="breadcrumb-item active">Detail</li>
  </div>
</ul>

<div class="content-wrapper">
	<section class="dashboard-counts no-padding-bottom">
	    <div class="container-fluid">
    	  <div class="project">
            <div class="row bg-white has-shadow" style="padding: 5px 15px;">
              <div class="col-lg-4 d-flex align-items-center justify-content-between">
                <div class="project-title d-flex align-items-center pt-4 py-4">
                  {{-- <div class="image has-shadow"><img src="/img/project-1.jpg" alt="..." class="img-fluid"></div> --}}
                  <div class="text">
                    <h3 class="h4">Tanam kedelai bulan juli</h3><small>Lorem Ipsum Dolor</small>
                  </div>
                </div>
                <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
              </div>
              <div class="statistic col-lg-4 clearfix align-items-center" style="margin-bottom: inherit;">
               <div class="icon bg-green float-left"><i class="fa fa-line-chart"></i></div>
               <div class="text text-right float-right"><strong>700 Kg</strong><br><small>Benih digunakan</small></div>
              </div>
              <div class="statistic col-lg-4 clearfix align-items-center" style="border-right: none; margin-bottom: inherit;">
               <div class="icon bg-orange float-left"><i class="fa fa-calendar-o"></i></div>
               <div class="text text-right float-right"><small>Tanggal tanam</small><br><strong>27 Mei, 2017</sup></strong></div>
              </div>

            </div>
          </div>
	    </div>
    </section>
	<section class="dashboard-header">
      <div class="container-fluid">
        <div class="row">
          {{-- AKTIVITAS TANAM --}}
          <div class="col-lg-5">
            <div class="recent-updates card">
              <div class="card-close">
                <div class="dropdown">
                  <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                  <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                </div>
              </div>
              <div class="card-header">
                <h3 class="h4">Aktifitas tanam</h3>
              </div>
              <div class="card-body no-padding">
                <!-- Item-->
                <div class="item d-flex justify-content-between">
                  <div class="info d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title">
                      <h5>Lorem ipsum dolor sit amet.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                    </div>
                  </div>
                  <div class="date text-right"><strong>24</strong><span>May</span></div>
                </div>
                <!-- Item-->
                <div class="item d-flex justify-content-between">
                  <div class="info d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title">
                      <h5>Lorem ipsum dolor sit amet.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                    </div>
                  </div>
                  <div class="date text-right"><strong>24</strong><span>May</span></div>
                </div>
                <!-- Item        -->
                <div class="item d-flex justify-content-between">
                  <div class="info d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title">
                      <h5>Lorem ipsum dolor sit amet.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                    </div>
                  </div>
                  <div class="date text-right"><strong>24</strong><span>May</span></div>
                </div>
                <!-- Item-->
                <div class="item d-flex justify-content-between">
                  <div class="info d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title">
                      <h5>Lorem ipsum dolor sit amet.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                    </div>
                  </div>
                  <div class="date text-right"><strong>24</strong><span>May</span></div>
                </div>
                <!-- Item-->
                <div class="item d-flex justify-content-between">
                  <div class="info d-flex">
                    <div class="icon"><i class="icon-rss-feed"></i></div>
                    <div class="title">
                      <h5>Lorem ipsum dolor sit amet.</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed.</p>
                    </div>
                  </div>
                  <div class="date text-right"><strong>24</strong><span>May</span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="articles card">
              <div class="card-close">
                <div class="dropdown">
                  <button type="button" id="closeCard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                  <div aria-labelledby="closeCard" class="dropdown-menu has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                </div>
              </div>
              <div class="card-header d-flex align-items-center">
                <h2 class="h3">Biaya pra-panen   </h2>
                <div class="badge badge-rounded bg-green">4 New       </div>
              </div>
              <div class="card-body no-padding">
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="/img/avatar-1.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="text"><a href="#">
                      <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Aria Smith.   </small></div>
                </div>
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="/img/avatar-2.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="text"><a href="#">
                      <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Frank Williams.   </small></div>
                </div>
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="/img/avatar-3.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="text"><a href="#">
                      <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Ashley Wood.   </small></div>
                </div>
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="/img/avatar-4.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="text"><a href="#">
                      <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Jason Doe.   </small></div>
                </div>
                <div class="item d-flex align-items-center">
                  <div class="image"><img src="/img/avatar-5.jpg" alt="..." class="img-fluid rounded-circle"></div>
                  <div class="text"><a href="#">
                      <h3 class="h5">Lorem Ipsum Dolor</h3></a><small>Posted on 5th June 2017 by Sam Martinez.   </small></div>
                </div>
              </div>
            </div>
          </div>
          <div class="chart col-lg-3 col-12">
            <!-- Bar Chart   -->
            <div class="bar-chart has-shadow bg-white pb-3">
              <div class="title"><strong class="text-violet">Rp. 553.000</strong><br><small>Total biaya pra-panen</small></div>
            </div>
            <!-- Numbers-->
            <div class="statistic d-flex align-items-center bg-white has-shadow">
              <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
              <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>


@endsection
