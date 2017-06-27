@extends('layouts.master')



@section('content')
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Anggota</h2>
  </div>
</header>
<!-- Breadcrumb-->
<ul class="breadcrumb">
  <div class="container-fluid">
    <li class="breadcrumb-item"><a href="/user">Anggota</a></li>
    <li class="breadcrumb-item active">Edit anggota</li>
  </div>
</ul>

<div class="content-wrapper">
	<!-- TABLES SECTION  -->
	<section class="forms">
		<div class="container-fluid">
			<div class="row">
				{{-- HORIZONTAL FORM --}}
				<div class="col-md-8 offset-md-2">
					<div class="card">
					  <div class="card-header d-flex align-items-center">
					    <h3 class="h4">Form edit anggota</h3>
					  </div>
					  <div class="card-body">
					    <form class="form-horizontal" method="POST" action="/user/{{$user->id}}">
					      {{ method_field('PUT') }}	
					      {{ csrf_field() }}
					      {{-- INPUT NAME --}}
					      <div class="form-group row {{ $errors->has('name') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Nama</label>
					        <div class="col-sm-9">
					          <input name="name" id="inputHorizontalSuccess" type="text" placeholder="Nama lengkap" class="form-control form-control-success" value="{{ $user->name }}" required>
					          @if ($errors->has('name'))
						          <small class="form-text text-danger">{{ $errors->first('name') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT ADDRESS --}}
					      <div class="form-group row {{ $errors->has('address') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">Alamat</label>
					        <div class="col-sm-9">
					          <input name="address" id="inputHorizontalSuccess" type="text" placeholder="Alamat lengkap" class="form-control form-control-success " value="{{ $user->address }}" required>
					          @if ($errors->has('address'))
						          <small class="form-text text-danger">{{ $errors->first('address') }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT CONTACT --}}
					      <div class="form-group row {{ $errors->has('contact') ? ' has-danger' : '' }}">
					        <label class="col-sm-3 form-control-label">No Hp</label>
					        <div class="col-sm-9">
					          <input name="contact" id="inputHorizontalSuccess" type="text" placeholder="0812306*****" class="form-control form-control-success " value="{{$user->contact }}" required>
					          @if ($errors->has('contact'))
						          <small class="form-text text-danger">{{ $user->contact }}</small>
					          @endif
					        </div>
					      </div>
					      {{-- INPUT PRIVILAGES --}}
					      <div class="form-group row">
					        <label class="col-sm-3 form-control-label">Kewenangan</label>
					        <div class="col-sm-9">
					          <select id="privilage" name="privilage_id" class="form-control">
                                @foreach ($privilages as $privilage)
                                	<option value="{{ $privilage->id }}">{{ $privilage->name }}</option>
                                @endforeach
                              </select>
					        </div>
					      </div>
					      {{-- HIDDEN INPUT POKTAN --}}
					      <div id="selectPoktan" class="form-group row" style="display: none;">
					        <label class="col-sm-3 form-control-label">Kelompok tani</label>
					        <div class="col-sm-9">
					          <select id="poktan" name="poktan_id" class="form-control">
					          	<option value="">PILIH KELOMPOK TANI</option>
                                @foreach (\App\Poktan::all() as $poktan)
                                	<option value="{{ $poktan->id }}">{{ $poktan->name }}</option>
                                @endforeach
                              </select>
					        </div>
					      </div>

					      <div class="form-group row">       
					        <div class="col-sm-9 offset-sm-3">
					          <input type="submit" value="Simpan" class="btn btn-primary">
					        </div>
					      </div>
					    </form>
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

		$(function() {
			if ('{{ $user->privilage_id }}' === '2') {
				$('#selectPoktan').show()
			}
		})
		


		$(function(){
			$("#privilage").val("{{ $user->privilage_id }}");
		});

		$(function(){
			$("#poktan").val("{{ $poktan->poktan_id }}");
		});

		$('#privilage').change(function() {
			if ($(this).val() === '2') {
				$('#selectPoktan').show()
			} else{
				$('#selectPoktan').hide()
			}
		});
	</script>
@endsection