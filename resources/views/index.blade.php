@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">
@endsection

@section('content')

	@include('partials/modal')
	
    <div class="container">

        <div class="index-slider">
            
		 	<div class="slider-item">
<<<<<<< HEAD
                <a href="{{ url('/notes/index') }}">Notes</a>
=======
                <a href="list-notes">Notes</a><br>
                <a href="createNote">CreateNote</a>
>>>>>>> a2a21f40ba4da1e07279df2a78dee8db2e002290
				<p>Power GYM (In progress)</p>
				<h1><span>P</span>ower GYM (In progress)</h1>
				<div class="slider-img">
					<img src="{{ asset('media/photo-item/img-01.png') }}" />
				</div>
				<a href="#" class="generic-btn show-modal-btn">Read more</a>
		  	</div>


			<div class="slider-item">
				<p>Data analysis</p>
				<h1><span>D</span>ata analysis</h1>
				<div class="slider-img">
					<img src="{{ asset('media/photo-item/img-02.png') }}" />
				</div>
				<a href="#" class="generic-btn show-modal-btn">Read more</a>
		  	</div>



			<div class="slider-item">
				<p>Comercio aplicable</p>
				<h1><span>C</span>omercio aplicable</h1>
				<div class="slider-img">
					<img src="{{ asset('media/photo-item/img-00.png') }}" />
				</div>
				<a href="#" class="generic-btn show-modal-btn">Read more</a>
		  	</div>

		  	

		  	<div class="slider-item">
				<p>Tecnomecánica mx</p>
				<h1><span>T</span>ecnomecánica mx</h1>
				<div class="slider-img">
					<img src="{{ asset('media/photo-item/img-03.png') }}" />
				</div>
				<a href="#" class="generic-btn show-modal-btn">Read more</a>
		  	</div>
		</div>


    </div>

@endsection

@section('extra-js')
@endsection