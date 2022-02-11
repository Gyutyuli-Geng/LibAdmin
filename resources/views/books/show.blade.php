@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md">
<div class="row p-3">
<div class="col-md-3">
    <img src="/assets/img/books/{{$book->id}}.jpg" width="100%" height="100%">
</div>
<div class="col-sm p-5">
    <h1 class="display-1">Cím: {{$book->title}}</h1>
    <h2 class="display-4 pt-1">Szerző: {{$book->author}}</h2>
    <h2 class="pt-2">Kiadó: {{$book->publisher}}</h2>
    <h2 class="pt-2">Kiadás éve: {{$book->year}}</h2>
    <h2 class="pt-2">ISBN szám: {{$book->id}}</h2>
    <h5 class="pt-2">Élerhető-e? 
        @if ($book->available>0)
        {{$book->available}} darab elérhető
        @else
        Nem elérhető
        @endif
    </h5>
    <h5 class="pt-2">Raktár mennyiség: {{$book->storage}}</h5>
    <h5 class="pt-2">Kis leírás:</h5>
    <a>{{$book->description}} </a>
</div>
<a href="/books/{{$book->id}}/edit" class="btn btn-default">Módosít</a>
</div>
</div>
</div>
@endsection
