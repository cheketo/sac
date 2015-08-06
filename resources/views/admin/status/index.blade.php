@extends('layouts.admin')

@section('title')
	Estados
@endsection

@section('content')
	<h1>Estados</h1>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Español</th>
				<th>Inglés</th>
				<th>Portugués</th>
				<th>Francés</th>
				<th>Italiano</th>
				<th>Ruso</th>
				<th>Alemnán</th>
				<th>Japonés</th>
				<th>Fecha de Creación</th>
			</tr>
		</thead>
		<tbody>
			@foreach($status as $state)
			<tr>
				<td>{{ $state->id }}</td>
				<td>{{ $state->es_name }}</td>
				<td>{{ $state->en_name }}</td>
				<td>{{ $state->pt_name }}</td>
				<td>{{ $state->fr_name }}</td>
				<td>{{ $state->it_name }}</td>
				<td>{{ $state->ru_name }}</td>
				<td>{{ $state->ge_name }}</td>
				<td>{{ $state->jp_name }}</td>
				<td>{{ $state->created_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	

@endsection