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
            <div class="row bg-white has-shadow">
              <div class="left-col col-lg-6 d-flex align-items-center justify-content-between">
                <div class="project-title d-flex align-items-center">
                  <div class="image has-shadow"><img src="/img/project-1.jpg" alt="..." class="img-fluid"></div>
                  <div class="text">
                    <h3 class="h4">Tanam kedelai bulan juli</h3><small>Lorem Ipsum Dolor</small>
                  </div>
                </div>
                <div class="project-date"><span class="hidden-sm-down">Today at 4:24 AM</span></div>
              </div>
              <div class="right-col col-lg-6 d-flex align-items-center">
                <div class="time"><i class="fa fa-clock-o"></i>12:00 PM </div>
                <div class="comments"><i class="fa fa-comment-o"></i>20</div>
                <div class="project-progress">
                  <div class="progress">
                    <div role="progressbar" style="width: 45%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
	    </div>
  </section>
</div>


@endsection
