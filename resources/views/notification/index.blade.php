@extends('layouts.master')

@section('new_styles')
	<style type="text/css">
		.page {
			background: white !important;
		}
	</style>
@endsection

@section('content')
<div class="content-wrapper">
	<!-- Dashboard Counts Section-->
	<section class="dashboard-counts p-0">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-8 offset-lg-2">
	      	<!-- BREADCRUMB -->
		      <div class="breadcrumb text-fade">
		      	<span class="breadcrumb-item h3 active">Notifikasi</span>
		      </div>
	        <h1 class="text-light" style="font-size: 2rem;">Lihat semua notifikasi</h1>
	      </div>
	    </div>
	    <div class="row">
	    	<div class="col-lg-8 offset-lg-2">
	    		@include('layouts.alerts')
			    <div class="table-responsive">
			      <table class="table table-hover">
			      	  <tbody>
			      	  	@foreach ($notifications as $notification)
			      	  		<tr class="linked-row {{ empty($notification->read_at) ? '' : 'notification-read' }}" data-href="/notifications/{{ $notification->id }}">
			      	  			<td class="align-middle">
			      	  				<i class="notification-icon {{ $notification->data['icon'] }}"></i>
			      	  				<span class="pr-4 align-middle">{{ $notification->data['message'] }}</span>
			      	  			</td>
			      	  			<td class="align-middle">{{ $notification->created_at->diffForHumans() }}</td>
			      	  		</tr>
			      	  	@endforeach
			      	  </tbody>
			      	</table>
			    </div>
	    	</div>
	    </div>
	  </div>
	</section>
</div>


@endsection

@section('script')
  <script type="text/javascript">
    $(".linked-row").click(function() {
        window.location = $(this).data("href");
    });
  </script>
@endsection
