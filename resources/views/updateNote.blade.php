@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">
@endsection
@section('content')

	@include('partials/modal')
	
    <div class="container">

        <div class="index-slider" >
        	<table with="50%">
        		<tr >
        			<td>
						<label>Notas disponibles:</label><br>
         				<select id="idnota" onchange="mostrarValor(this.value);">
         					<option value="" >Seleccione la nota a actualizar</option>
         					@foreach($notes as $note)
         					<option value="{{$note->id}}">{{$note->title}}</option>
         					@endforeach
         				</select>
                		<script type="text/javascript">
                	    	var mostrarValor = function(x){
            					document.getElementById('idN').value=x;
            				}
                		</script>
                		<br>
                		<input type="text" name="idN" id="idN" value="" style="display:none" />
        			</td>
        		</tr>
        		<tr>
        			<td>
        				@foreach($notes as $note)
        				
         					{{$note->id}}
         					{{$note->title}}
         				
         				@endforeach
        			</td>
        		</tr>
        	</table>
         		
		</div>

    </div>




	@endsection
@section('extra-js')
@endsection