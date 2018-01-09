@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">
@endsection
@section('content')

	@include('partials/modal')
	
    <div class="container">

        <div class="index-slider">

			{!!Form::open(['url'=>'registrar'])!!}
				<div class='form-group'>
					{!!Form::label('Titulo:')!!}
					{!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Ingresa el titulo'])!!}
				</div>
				<div class='form-group'>
					{!!Form::label('Contenido:')!!}
					{!!Form::text('content',null,['class'=>'form-control','placeholder'=>'Ingresa el contenido'])!!}
				</div>
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}

    </div>




	@endsection
@section('extra-js')
@endsection


