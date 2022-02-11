@extends('layouts.app')

@section('content')
    <h1>Hozzáadás</h1>
{!! Form::open(['action'=>'App\Http\Controllers\RentsController@store','method'=>'POST']) !!}

    <div class="form-group">
    {{Form::label('renter_id','Vásárló')}}
    {{Form::select('renter_id', $members)}}
    </div>
    <div class="form-group">
        {{Form::label('book_id','könyv')}}
        {{Form::select('book_id', $books)}}
    </div>

        {{Form::submit('Hozzáad',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

@endsection