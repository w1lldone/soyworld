<div class="table-responsive">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Petani</th>
	      <th>Tanggal tanam</th>
	      <th>Benih</th>
	      <th>Luas tanam</th>
	      <th>Perkiraan panen</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($onfarms as $onfarm)
	  		<tr class="linked-row" data-href="/soybean/{{ $onfarm->id }}">
	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
	  		  <td>
	  		  	<b class="text-primary">{{ $onfarm->user->name }}</b><br>
	  		  	{{ $onfarm->name }}
	  		  </td>
	  		  <td class="align-middle">{{ $onfarm->planted_at->format('j F Y') }}</td>
	  		  <td class="align-middle">{{ $onfarm->seed->quantity }} Kg</td>
	  		  <td class="align-middle">{{ $onfarm->area }} m<sup>2</sup></td>
	  		  <td class="align-middle hidden-sm-down">{{ $onfarm->harvest_estimation }} </td>
	  		</tr>
	  	@endforeach
	  </tbody>
	</table>
</div>