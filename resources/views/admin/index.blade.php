@extends('admin.master')
@section('content')
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				Información general de la Graduacion
			</div>
			<div class="card-body">
				<h5>Graduación 29 de Mayo</h5>
				<p class="mb-1">Número de graduados registrados: <strong>{{ $usuarios_mayo }}</strong></p>
				<p class="mb-1">Número de boletos solicitados: <strong>0</strong></p>
				<a href="/admin/graduacion/mayo" class="btn btn-sm btn-primary">Aministrar</a>
				<hr>
				<h5>Graduación 05 de Junio</h5>
				<p class="mb-1">Número de graduados registrados: <strong>{{ $usuarios_junio }}</strong></p>
				<p class="mb-1">Número de boletos solicitados: <strong>0</strong> </p>
				<a href="/admin/graduacion/junio" class="btn btn-sm btn-primary">Administrar</a>
			</div>
		</div>
	</div>
@endsection