@extends('layouts.app')


@section('content')

{!! Form::open(['action'=>'App\Http\Controllers\MembersController@search','method'=>'POST']) !!}
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
    <th class="col-md-4">Név</th>
    <th class="col-md-2">Lakcím</th>
    <th class="col-md-2">Típus</th>
    <th class="col-md-1">Telefon</th>
    <th class="col-md-5">email</th>
  </tr>
</thead>

<tbody>

    @foreach($members as $member)
    <tr>
        <th scope="row">{{$member->id}}</th>
        <td><a href="/members/{{$member->id}}"class="text-decoration-none text-reset">{{$member->name}}</td>
        <td>{{$member->address}}</td>

        
        @switch($member->type)
        @case(1)
        <td>Egyetemi hallgató</td>
            @break
    
        @case(2)
        <td>Egyetemi oktató</td>
            @break

        @case(3)
        <td>Egyetemi hallgató (Máshonnan)</td>
            @break

        @case(4)
        <td>Tag</td>
            @break
    

    @endswitch

        <td>{{$member->phone}}</td>

        <td>{{$member->email}}</td>

        

        
    </tr>
    @endforeach


</tbody>
</table>

@endsection
