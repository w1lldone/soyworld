<div class="table-responsive">
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Petani</th>
	      <th>Stok</th>
	      <th class="hidden-sm-down">Tanam</th>
	      <th class="hidden-sm-down">Panen</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($harvests as $harvest)
	  		<tr class="linked-row" data-href="/soybean/harvest/{{ $harvest->id }}">
	  		  <th scope="row" class="align-middle">{{ $loop->index+1 }}</th>
	  		  <td>
	  		  	<b class="text-primary">{{ $harvest->onfarm->user->name }}</b><br>
	  		  	{{ $harvest->onfarm->name }} - <b>Yogyakarta</b>
	  		  </td>
	  		  <td class="align-middle">{{ $harvest->ending_stock }} Kg</td>
	  		  <td class="align-middle hidden-sm-down">{{ $harvest->onfarm->planted_at->format('j F Y') }}</td>
	  		  <td class="align-middle hidden-sm-down">{{ $harvest->harvested_at->format('j F Y') }} </td>
	  		</tr>
	  	@endforeach
	  </tbody>
	</table>
</div>
