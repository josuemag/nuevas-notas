@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">
@endsection
@section('content')

	@include('partials/modal')
	
    <div class="container">

        <div class="index-slider">

			{!!Form::open(['route' =>'note.store', 'method'=>'POST'])!!}
				<div class='form-group'>
					{!!form::label('Titulo:')!!}
					{!!form::text('title',null,['class'=>'form-control','placeholder'=>'Ingresa el titulo'])!!}
				</div>
				<div class='form-group'>
					{!!form::label('Contenido:')!!}
					{!!form::text('conten',null,['class'=>'form-control','placeholder'=>'Ingresa el contenido'])!!}
				</div>
				{!!form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}

    </div>




	@endsection
@section('extra-js')
@endsection


