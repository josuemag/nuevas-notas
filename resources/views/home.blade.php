@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if(Auth::guest())
                        No esta logeado... no puede ver este contenido
                    @else
                    You are logged in!<br>
                    There are yours notes:<br> 
                    <a href="{{ url('/notes/index') }}">Notes</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
