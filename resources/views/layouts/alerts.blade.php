@if (session('success'))
	<div class="alert alert-success alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	  <strong>Selesai!</strong> {{ session('success') }}
	</div>
@endif
@if (session('warning'))
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	  <strong>Perhatian!</strong> {{ session('warning') }}
	</div>
@endif
@if (session('danger'))
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	  <strong>Gagal!</strong> {{ session('danger') }}
	</div>
@endif

@if (count($errors))
	@foreach ($errors->all() as $error)
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		  <strong>Gagal!</strong> {{ $error }}
		</div>
	@endforeach
@endif
