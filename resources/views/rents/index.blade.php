@extends('layouts.app')


@section('content')

{!! Form::open(['action'=>'App\Http\Controllers\RentsController@search','method'=>'POST']) !!}
    <div class="form-group">
    {{Form::label('search','Keresés')}}
    {{Form::text('search', '', ['class'=>'form-control', 'placeholder'=> 'Keresés'])}}
    </div>
        {{Form::submit('Keresés',['class'=>'btn btn-primary'])}}
{!!Form::close() !!}

<table class="table" id="renttable">
<thead>
  <tr>
    <th class="col-md-1">#</th>
    <th class="col-md-4">Könyv Címe</th>
    <th class="col-md-2">Ettől</th>
    <th class="col-md-2">Eddig</th>
    <th class="col-md-3">Kinél van</th>
    <th class="col-md-3">Aktív?</th>
  </tr>
</thead>

<tbody>

    @foreach($rents as $rent)
    <tr>
      
        <th><a href="/rents/{{$rent->id}}/edit"class="text-decoration-none text-reset">{{$rent->id}}</th>
        <td><a href="/rents/{{$rent->id}}/edit"class="text-decoration-none text-reset">{{$rent->bookname}}</td>
        <td>{{$rent->start}}</td>
        <td>{{$rent->end}}</td>
        <td><a href="/members/{{$rent->user_id}}"class="text-decoration-none text-reset">{{$rent->renter}}</td>
        @if($rent->active==1)
        <td>Igen</td>
        @else
        <td>Nem</td>
        @endif
        
    </tr>
    @endforeach


</tbody>
</table>

@endsection
