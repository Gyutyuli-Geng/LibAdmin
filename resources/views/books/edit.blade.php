@extends('layouts.app')

@section('content')
    <h1>Módosítás</h1>
{!! Form::open(['action'=>['App\Http\Controllers\BooksController@update',$book->id],'method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('author','Szerző')}}
    {{Form::text('author', $book->author, ['class'=>'form-control', 'placeholder'=> 'Szerző'])}}
    </div>

    <div class="form-group">
        {{Form::label('title','Cím')}}
        {{Form::text('title', $book->title, ['class'=>'form-control', 'placeholder'=> 'Cím'])}}
    </div>

    <div class="form-group">
        {{Form::label('publisher','Kiadó')}}
        {{Form::text('publisher', $book->publisher, ['class'=>'form-control', 'placeholder'=> 'Kiadó'])}}
    </div>

    <div class="form-group">
        {{Form::label('year','Év')}}
        {{Form::text('year',  $book->year, ['class'=>'form-control', 'placeholder'=> 'Év'])}}
    </div>

    <div class="form-group">
        {{Form::label('id','ISBN')}}
        {{Form::text('id', $book->id, ['class'=>'form-control', 'placeholder'=> 'ISBN'])}}
    </div>

    <div class="form-group">
        {{Form::label('storage','Raktáron')}}
        {{Form::text('storage', $book->storage, ['class'=>'form-control', 'placeholder'=> 'Elérhető'])}}
    </div>

    <div class="form-group">
        {{Form::label('rentable','Kölcsönözhető?')}}
        {{Form::select('rentable', $data,$book->rentable)}}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Módosít',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}


{!! Form::open(['action' =>['App\Http\Controllers\BooksController@update',$book->id], 'method'=> 'POST', 'class'=> 'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Törlés',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}

@endsection