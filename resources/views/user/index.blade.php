@extends('user.master')
@section('content')
	<div class="col-md-9 mr-2 ml-2">
		<div class="card">
			<div class="card-header">
				Panel de información del graduado o graduada
			</div>
			<div class="card-body">
				<div class="alert alert-secondary" role="alert">
					Perfil por verificar
				</div>
				<h5>{{ $user->name }} {{ $user->apellidos }}</h5>
				<h5>Fecha de Graduación: 
					@if ($user->fiesta == 'mayo')
						{{'29 de Mayo'}}
					@endif
					@if ($user->fiesta == 'junio')
						{{'5 de Junio'}}
					@endif
				</h5>
				<h5>Lugar: Hacienda Puerta Grande</h5>
				<p class="mt-5">Mayor información al telefono: 56 10 99 68 74</p>
			</div>
		</div>
	</div>
@endsection