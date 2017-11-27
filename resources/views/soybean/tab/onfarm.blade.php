<div class="table-responsive">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Petani</th>
	      <th class="hidden-sm-down">Tanggal tanam</th>
	      <th class="hidden-sm-down">Benih</th>
	      <th class="hidden-sm-down">Luas tanam</th>
	      <th>Perkiraan panen</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($onfarms as $onfarm)
	  		<tr class="linked-row" data-href="/soybean/onfarm/{{ $onfarm->id }}">
	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
	  		  <td class="align-middle">
	  		  	<b class="text-primary">{{ $onfarm->user->name }}</b><br>
	  		  	<span class="hidden-sm-down">{{ $onfarm->name }}</span>
	  		  </td>
	  		  <td class="align-middle hidden-sm-down">{{ $onfarm->planted_at->format('j F Y') }}</td>
	  		  <td class="align-middle hidden-sm-down">{{ $onfarm->seed->quantity }} Kg</td>
	  		  <td class="align-middle hidden-sm-down">{{ $onfarm->area }} m<sup>2</sup></td>
	  		  <td class="align-middle">{{ $onfarm->harvest_estimation }} </td>
	  		</tr>
	  	@endforeach
	  </tbody>
	</table>
</div>