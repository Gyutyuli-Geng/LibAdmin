@extends('layouts.app')

@section('content')

    <h1>Hozzáadás</h1>
    
{!! Form::open(['action'=>['App\Http\Controllers\MembersController@update',$member->id],'method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('name','Név')}}
    {{Form::text('name', $member->name, ['class'=>'form-control', 'placeholder'=> 'Szerző'])}}
    </div>

    <div class="form-group">
        {{Form::label('address','Cím')}}
        {{Form::text('address', $member->address, ['class'=>'form-control', 'placeholder'=> 'Cím'])}}
    </div>

    <div class="form-group">
        {{Form::label('type','Típus:')}}
        {{Form::select('type', $data)}}
    </div>

    <div class="form-group">
        {{Form::label('phone','Telefon')}}
        {{Form::text('phone', $member->phone, ['class'=>'form-control', 'placeholder'=> 'Év'])}}
    </div>

    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email', $member->email, ['class'=>'form-control', 'placeholder'=> 'ISBN'])}}
    </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Módosít',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

{!! Form::open(['action' =>['App\Http\Controllers\MembersController@update',$member->id], 'method'=> 'POST', 'class'=> 'pull-right']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Törlés',['class'=>'btn btn-danger'])}}

{!!Form::close()!!}

@endsection