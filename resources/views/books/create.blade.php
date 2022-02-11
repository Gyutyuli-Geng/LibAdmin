@extends('layouts.app')

@section('content')

    <h1>Hozzáadás</h1>
{!! Form::open(['action'=>'App\Http\Controllers\BooksController@store','method'=>'POST']) !!}   
    <div class="form-group">
    {{Form::label('author','Szerző')}}
    {{Form::text('author', '', ['class'=>'form-control', 'placeholder'=> 'Szerző'])}}
    </div>

    <div class="form-group">
        {{Form::label('title','Cím')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=> 'Cím'])}}
    </div>

    <div class="form-group">
        {{Form::label('publisher','Kiadó')}}
        {{Form::text('publisher', '', ['class'=>'form-control', 'placeholder'=> 'Kiadó'])}}
    </div>

    <div class="form-group">
        {{Form::label('year','Év')}}
        {{Form::text('year', '', ['class'=>'form-control', 'placeholder'=> 'Év'])}}
    </div>

    <div class="form-group">
        {{Form::label('id','ISBN')}}
        {{Form::text('id', '', ['class'=>'form-control', 'placeholder'=> 'ISBN'])}}
    </div>
    <div class="form-group">
        {{Form::label('storage','Raktáron')}}
        {{Form::text('storage', '', ['class'=>'form-control', 'placeholder'=> 'Elérhető'])}}
    </div>
    <div class="form-group">
        {{Form::label('rentable','Kölcsönözhető?')}}
        {{Form::select('rentable', $data)}}
    </div>
        {{Form::submit('Hozzáad',['class'=>'btn btn-primary'])}}
    {!!Form::close() !!}
@endsection