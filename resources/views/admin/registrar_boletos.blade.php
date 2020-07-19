@extends('admin.master')
@section('content')
	<div class="col-md-9">
		<div class="card">
			<div class="card-header">
				Registro de boletos para graduad@ <a href="{{ route('listado_graduacion',$user->fiesta) }}">Regresar al listado</a>
			</div>
			<div class="card-body">
				<h5>Registrar Boletos para: {{ $user->name }} {{ $user->apellidos }}</h5>
				<p>
					Fecha:
					@if ($user->fiesta == 'mayo')
						{{ '29 de Mayo' }}
					@endif
					@if ($user->fiesta == 'junio')
						{{ '5 de Junio' }}
					@endif
				</p>
				@if (session('status'))
					<div class="alert alert-success">
						{{ session('status') }}
					</div>
				@endif
				@if($errors->any())
					@foreach($errors->all() as $error)
						<div class="alert alert-danger">
							{{ $error }}
						</div>
					@endforeach
				@endif
				<form action="{{ route('strore_boletos',$user->id) }}" method="POST">
					@csrf
					@method('POST')
					<label>Numero de boletos a registrar</label>
					<select name="cantidad" class="form-control input-sm">
						@for ($i = 1; $i < 25 ; $i++)
							<option value="{{ $i }}">{{ $i }}</option>
						@endfor
					</select>
					<label class="mt-2">Tipo de boleto</label>
					<select name="tipo" class="form-control">
						<option value="">--</option>
						<option value="adulto">Adult@</option>
						<option value="menor">Niñ@</option>
					</select>
					<button class="btn btn-primary mt-2 pt-1 pb-1">Aceptar</button>
				</form>
			</div>
		</div>
	</div>
@endsection