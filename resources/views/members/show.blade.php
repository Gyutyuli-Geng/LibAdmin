@extends('layouts.app')

@section('content')



    <h5 class="pt-2 d-flex justify-content-center">Név: {{$member->name}}</h5>
    <h5 class="pt-2 d-flex justify-content-center">Lakcím: {{$member->address}}</h5>
    <h5 class="pt-2 d-flex justify-content-center">Típus:
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
    
    </h5>
    <h5 class="pt-2 d-flex justify-content-center">Telefon: {{$member->phone}}</h5>
    <h5 class="pt-2 d-flex justify-content-center">Email: {{$member->email}}</h5>
    <a href="/members/{{$member->id}}/edit" class="btn btn-default">Módosít</a>

    <h5 class="pt-2 d-flex justify-content-center">Jelenlegi kölcsönzés(ek):</h5>
    <table class="table" id="renttable">
        <thead>
          <tr>
            <th class="col-md-1">#</th>
            <th class="col-md-1">ISBN</th>
            <th class="col-md-4">Könyv Címe</th>
            <th class="col-md-2">Ettől</th>
            <th class="col-md-2">Eddig</th>
          </tr>
        </thead>
        
        <tbody>
        
            @foreach($current as $c)
            <tr>
                <th scope="row">{{$c->id}}</th>
                <td>{{$c->isbn}}</td>
                <td><a href="/rents/{{$c->id}}/edit"class="text-decoration-none text-reset">{{$c->bookname}}</td>
                <td>{{$c->start}}</td>
                <td>{{$c->end}}</td> 
            </tr>
            @endforeach
        
        
        </tbody>
        </table>

    <h5 class="pt-2 d-flex justify-content-center">Régebbi kölcsözések:</h5>
    <table class="table" id="renttable">
        <thead>
          <tr>
            <th class="col-md-1">#</th>
            <th class="col-md-1">ISBN</th>
            <th class="col-md-4">Könyv Címe</th>
            <th class="col-md-2">Ettől</th>
            <th class="col-md-2">Eddig</th>
          </tr>
        </thead>
        
        <tbody>
        
            @foreach($old as $o)
            <tr>
                <th scope="row">{{$o->id}}</th>
                <td>{{$o->isbn}}</td>
                <td><a href="/rents/{{$o->id}}/edit"class="text-decoration-none text-reset">{{$o->bookname}}</td>
                <td>{{$o->start}}</td>
                <td>{{$o->end}}</td>
                
            </tr>
            @endforeach
        
        
        </tbody>
        </table>


</div>
</div>
</div>
@endsection