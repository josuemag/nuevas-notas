@extends('layouts.layout-index')

@section('title', 'Codizer - Portafolio')

@section('extra-css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/atv/atvImg.css') }}">

@section('title', "Note {$notes->id}")

@endsection

@section('content')

@include('partials/modal')

    <div class="conteiner">
        <h1>askdj</h1>
<h1>Edit Note</h1>

        {!!Form::open(['url'=>'update'])!!}
        <div class="form-group">
            {!!Form::label('Title: ')!!}
            {!!Form::text('title', $notes->title,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!!Form::label('Content: ')!!}
            {!!Form::text('content', $notes->content, ['class'=>'form-control'])!!}
        </div>
        {!!Form::submit('Update', ['class'=>'btn-primary'])!!}
        {!!Form::close()!!}
    </div>
@endsection