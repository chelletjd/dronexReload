@extends('layout')

@section('content')
<div class="container fondo">
	<div class="row">
		<div class="col-8 offset-2">
			<h2>Shipments</h2>
			<table class="table table-responsive-sm borde">
				<thead>
					<tr>
						<th>Shipping N°</th>
						<th>Shipping Cost</th>
						<th>Shipping Address</th>
						<th>Reception Address</th>
						<th>Weigth</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					@foreach($ship as $sh)
					<tr>
						<td>{{ $sh->id }}</td>
						<td>{{ $sh->cost }}</td>
						<td>{{ $sh->shipAd }}</td>
						<td>{{ $sh->recepAd }}</td>
						<td>{{ $sh->weight }}</td>
						<td>{{ $sh->status }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop