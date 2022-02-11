@extends('layouts.app')

@section('content')

    <h1>Hozzáadás</h1>
    
{!! Form::open(['action'=>['App\Http\Controllers\RentsController@update',$rent->id],'method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('bookname','Könyv')}}
    {{Form::text('bookname', $rent->bookname, ['class'=>'form-control', 'placeholder'=> 'Szerző','readonly' => 'true'])}}
    </div>

    <div class="form-group">
        {{Form::label('renter','Kölcsönző')}}
        {{Form::text('renter', $rent->renter, ['class'=>'form-control', 'placeholder'=> 'Cím','readonly' => 'true'])}}
    </div>

    <div class="form-group">
        {{Form::label('active','Típus:')}}
        {{Form::select('active', $data)}}
    </div>

    <div class="form-group">
        {{Form::label('start','Kezdet')}}
        {{Form::text('start', $rent->start, ['class'=>'form-control', 'placeholder'=> 'ISBN'])}}
    </div>

    <div class="form-group">
        {{Form::label('end','Vég')}}
        {{Form::text('end', $rent->end, ['class'=>'form-control', 'placeholder'=> 'Év'])}}
    </div>

   
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Módosít',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

{!! Form::open(['action' =>['App\Http\Controllers\RentsController@update',$rent->id], 'method'=> 'POST', 'class'=> 'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Törlés',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}

@endsection