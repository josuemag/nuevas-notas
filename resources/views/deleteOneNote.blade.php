@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">
@endsection

	@section('content')

		@include('partials/modal')
	
    	<div class="container">

        	<div class="index-slider">
        		<h1>Eliminar nota</h1>
        		
        		{!!Form::open(['route'=>['note.delete',$notas->id],'method'=>'DELETE'])!!}
				<div class='form-group'>
					{!!Form::label('Desea eliminar')!!}
					{!!Form::label('La nota N° ')!!}
					{{$notas->id}}
				</div>
				<div class='form-group'>
					{!!Form::label('Titulo: ')!!}
					{{$notas->title}}
				</div>
				{!!Form::submit('Eliminar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}	

			</div>	

    	</div>

	@endsection
@section('extra-js')
@endsection