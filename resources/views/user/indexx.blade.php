@extends('user.master')
@section('content')
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				Panel de informacion del graduado o graduada
			</div>
			<div class="card-body">
				<h5>{{ $user->name }} {{ $user->apellidos }}</h5>
				<h5>Fecha de Graduación: 
					@if ($user->fiesta == 'mayo')
						{{'29 de Mayo'}}
					@endif
					@if ($user->fiesta == 'junio')
						{{'5 de Junio'}}
					@endif
				</h5>
				<p class="mb-1">Número de boletos solicitados: 
					<strong>Adulto - {{ $boletos_adulto }}</strong>
					@if ($boletos_menor != 0)
						<strong>, Niño o Niña - {{ $boletos_menor }}</strong>
					@endif
				</p>
				<p>Numero de boletos cubiertos hasta el momento</p>
				<!--<p>Cantidad total de pagos realizados: <strong>0</strong></p>-->
				<p><a href="">Ver Historial de Pagos</a></p>
				
				<a href="/admin/graduacion/mayo" class="btn btn-sm btn-primary">Solicitar más boletos</a>
				<a href="/admin/graduacion/mayo" class="btn btn-sm btn-primary">Enviar un mensaje al Comite</a>
				
			</div>
		</div>
	</div>
@endsection