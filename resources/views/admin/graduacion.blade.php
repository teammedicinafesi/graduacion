@extends('admin.master')
@section('content')
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				Información general graduación 
				@if ($mes == 'mayo')
					{{'29 de Mayo'}}
				@endif
				@if ($mes == 'Junio')
					{{'5 de Junio'}}
				@endif &nbsp;&nbsp;
				<a href="/admin">regresar al Index</a>
				<!--Poder enlistar por los que piden mas boletos -->
			</div>
			<div class="card-body">
				<table class="table">
					<thead>
						<tr>
							<th>##</th>
							<th>Graduad@</th>
							<th>Boletos</th>
							<th>Pagos</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td></td>
								<td>{{ $user->name }} {{ $user->apellidos }}</td>
								
								<td>{{ $user->boletos->count() }}</td>
								<td>
									<a href="/admin/registrar_boletos/{{ $user->id }}" class="btn btn-sm btn-primary">Registrar Boletos</a>
									<a href="" class="btn btn-sm btn-primary">Registrar Pago</a>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
@endsection