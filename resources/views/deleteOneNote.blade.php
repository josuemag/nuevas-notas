@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">
@endsection

	@section('content')

		@include('partials/modal')
	
    	<div class="container">

        	<div class="index-slider">
        		<table with="50%">
        			<tr>
        				<td>
							<h1>Eliminar nota</h1>
        					<br>
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
							<br>
							{!!Form::submit('Eliminar',['class'=>'btn btn-primary'])!!}
							{!!Form::close()!!}	
							<br>
							<br>
							<a href="{{url('notes/index')}}">Regresar</a>
        				</td>
        			</tr>
        		</table>
        		
			</div>	

    	</div>

	@endsection
@section('extra-js')
@endsection