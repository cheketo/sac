@extends('layouts.admin')

@section('title')
	Crear un Estado
@endsection

@section('content')

	<h1>Crear Estado</h1>

	{!! Form::open(['route'=>'status.store']) !!}

		<div class="col-sm-6">

			<div class="form-group">
				{!! Form::text('es_name',null,['class'=>'form-control floating-label','placeholder'=>'Español:']) !!}
				@if($errors->has('es_name'))
					<p class="text-danger">{{ $errors->first('es_name') }}</p>
				@endif
			</div>

			<div class="form-group">
				{!! Form::text('en_name',null,['class'=>'form-control floating-label','placeholder'=>'Inglés:']) !!}
				@if($errors->has('en_name'))
					<p class="text-danger">{{ $errors->first('en_name') }}</p>
				@endif
			</div>
			
			<div class="form-group">
				{!! Form::text('fr_name',null,['class'=>'form-control floating-label','placeholder'=>'Francés:']) !!}
				@if($errors->has('fr_name'))
					<p class="text-danger">{{ $errors->first('fr_name') }}</p>
				@endif
			</div>

			<div class="form-group">
				{!! Form::text('pt_name',null,['class'=>'form-control floating-label','placeholder'=>'Portugués:']) !!}
				@if($errors->has('pt_name'))
					<p class="text-danger">{{ $errors->first('pt_name') }}</p>
				@endif
			</div>

		</div>

		<div class="col-sm-6">

			<div class="form-group">
				{!! Form::text('it_name',null,['class'=>'form-control floating-label','placeholder'=>'Italiano:']) !!}
				@if($errors->has('it_name'))
					<p class="text-danger">{{ $errors->first('it_name') }}</p>
				@endif
			</div>

			<div class="form-group">
				{!! Form::text('ge_name',null,['class'=>'form-control floating-label','placeholder'=>'Alemán:']) !!}
				@if($errors->has('ge_name'))
					<p class="text-danger">{{ $errors->first('ge_name') }}</p>
				@endif
			</div>

			<div class="form-group">
				{!! Form::text('ru_name',null,['class'=>'form-control floating-label','placeholder'=>'Ruso:']) !!}
				@if($errors->has('ru_name'))
					<p class="text-danger">{{ $errors->first('ru_name') }}</p>
				@endif
			</div>

			<div class="form-group">
				{!! Form::text('jp_name',null,['class'=>'form-control floating-label','placeholder'=>'Japonés:']) !!}
				@if($errors->has('jp_name'))
					<p class="text-danger">{{ $errors->first('jp_name') }}</p>
				@endif
			</div>

		</div>

		<div class="form-group col-xs-12">
			{!! Form::button('Guardar',['type'=>'submit', 'class'=>'btn btn-primary']) !!}
		</div>
	{!! Form::close() !!}

@endsection