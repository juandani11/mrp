<div class="row">
	<div class="form-group col-md-4">
		{{ Form::label('codigo', 'Código:') }}
		<fieldset disabled>
		{{ Form::text('codigo', null, ['class' => 'form-control', 'id' => 'codigo','placeholder'=>$nrocodigo]) }}
		</fieldset>
		</div>
	<div class="form-group col-md-8">
		{{ Form::label('nombre', 'Nombre Completo:') }}
		{{ Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) }}
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
		{{ Form::label('direccion', 'Dirección:') }}
		{{ Form::text('direccion', null, ['class' => 'form-control', 'id' => 'direccion']) }}
	</div>
	<div class="form-group col-md-6">
		{{ Form::label('correo', 'Correo Electrónico:') }}
		{{ Form::email('correo', null, ['class' => 'form-control ', 'id' => 'correo']) }}
	</div>
</div>

<div class="row">
	<div class="form-group col-md-6">
		{{ Form::label('telefono', 'Teléfono:') }}
		{{ Form::tel('telefono', null, ['class' => 'form-control', 'id' => 'telefono','maxlength'=>'8','minlength'=>'8', 'placeholder'=>'3 3360000']) }}
	</div>
	<div class="form-group col-md-6">
		{{ Form::label('imagen', 'Foto:') }}
		{{ Form::text('imagen', null, ['class' => 'form-control', 'id' => 'imagen']) }}
	</div>
</div>

<div class="form-row">
	<div class="form-group col-md-4">
		{{Form::label('id_estado','Seleccionar Estado: ')}}
		<select name="id_estado" id="id_estado" class="custom-select">Seleccionar Estado
			<option value="">Seleccione un estado</option>
			@foreach($estados as $estado)
				<option value="{{ $estado->id }}">
					{{$estado->nombre}}
				</option>
			@endforeach
		</select>
	</div>

	<div class="form-group col-md-4">
		{{Form::label('id_provincia','Seleccionar Provincia: ')}}
		<select name="id_provincia" id="id_provincia" class="custom-select">Seleccionar Provincia
				<option value="">Seleccione provincia</option>
		</select>
	</div>

	<div class="form-group col-md-4">
		{{Form::label('id_municipio','Seleccionar Municipio: ')}}
		<select name="id_municipio" id="id_municipio" class="custom-select">Seleccionar Municipio
				<option value="">Seleccione municipio</option>
		</select>
	</div>
</div>


<div class="form-group">
	{{ Form::label('estado', 'Estado:') }}
	{{ Form::select('estado', ['1'=>'Activo','0'=>'Inactivo'], ['class' => 'form-control']) }}
</div>

<div class="form-group">
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>


@section('scripts')

	<script src="/js/proveedor/edit.js"></script>

@endsection 