@extends('layouts.app')

@section('content')
    <h1>Hozzáadás</h1>
{!! Form::open(['action'=>'App\Http\Controllers\MembersController@store','method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('name','Név')}}
    {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=> 'Szerző'])}}
    </div>

    <div class="form-group">
        {{Form::label('address','Cím')}}
        {{Form::text('address', '', ['class'=>'form-control', 'placeholder'=> 'Cím'])}}
    </div>

    <div class="form-group">
        {{Form::label('type','Típus:')}}
        {{Form::select('type', $data)}}
    </div>

    <div class="form-group">
        {{Form::label('phone','Telefon')}}
        {{Form::text('phone', '', ['class'=>'form-control', 'placeholder'=> 'Év'])}}
    </div>

    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email', '', ['class'=>'form-control', 'placeholder'=> 'ISBN'])}}
    </div>

        {{Form::submit('Hozzáad',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

@endsection