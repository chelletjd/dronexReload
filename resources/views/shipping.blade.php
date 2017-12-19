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
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>155</td>
						<td>South Beach</td>
						<td>Delivered</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

@stop