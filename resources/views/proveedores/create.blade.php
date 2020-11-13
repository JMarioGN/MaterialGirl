
@extends('layouts.internal')
@section('content')

<div style="display: flex; justify-content: center; align-items:center;">
	<div style="width: 50%;">
		<a href="{{ URL::to('proveedores') }}">Regresar</a> <br> <br>
		<h1 style="color: #000; text-align: center;">Formulario de creación</h1>
		{{ HTML::ul($errors->all()) }}
		{{ Form::open(array('url' => 'proveedores')) }}
		<div class="row" class="row" style="background-image: url({{ asset('images/fondoMd.jpg')}}); background-size: cover; border-radius: 4px; color:#fff; font:500 17px arial; padding: 12px 15px;">
			<div class="form-group col-md-12">
        		{{ Form::label('nombre', 'Nombre del proveedor') }}
        		{{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'style' => 'border:4px solid #00FFCC; border-radius:3px;', 'required'=>true, 'maxlength'=> 30, 'minlength'=> 4)) }}
    		</div>

    		<div class="form-group col-md-12">
        		{{ Form::label('direccion', 'Direccion') }}
        		{{ Form::text('direccion', Request::old('direccion'),
           array('class' => 'form-control', 'style' => 'border:4px solid #00FFCC; border-radius:3px;', 'required'=>true, 'maxlength'=> 200, 'minlength'=> 5)) }}
    		</div>

    		<div class="form-group col-md-12">
		        {{ Form::label('telefono', 'Teléfono') }}
		        {{ Form::number('telefono',	Request::old('telefono'), 
		           array('class' => 'form-control', 'style' => 'border:4px solid #00FFCC; border-radius:3px;', 'required'=>true, 'step'=>'.01')) }}
		    </div>
    	</div>
		<br>
    	{{ Form::submit('Registrar proveedor', ['style' => 'background: linear-gradient(to right, rgba(203,96,179,1) 0%, rgba(193,70,161,1) 0%, rgba(168,0,119,1) 70%, rgba(95,22,116,1) 100%); color:#fff; border-radius:4px; padding:15px 35px;',] ) }}
		{{ Form::close() }}
	</div>
</div>

@endsection