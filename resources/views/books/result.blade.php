@extends('layouts.app')

@section('content')    
    <div class="d-flex justify-content-center p-4"><h1>Könyveink</h1></div>
    @if(count($books)>0)
    <div class="container">
    
        <div class="row">
        @foreach($books as $book)

            
            <div class="col-md">
                <div class="row p-3">
                    @if ($loop->last&&$loop->index%2==0)

                    <div class="col-md-3">
                    @else
                    <div class="col-md-6">
                    @endif
                        <img src="/assets/img/books/{{$book->id}}.jpg" width="100%" height="100%">
                    </div>
                
                    <div class="col-sm">
                        <h1> <a href="/books/{{$book->id}}" class="text-decoration-none text-reset"> {{$book->title}}</a></h1>
                        <h3>{{$book->author}}</h3>
                        <h5>{{$book->publisher}}</h5>
                        <h5>{{$book->year}}</h5>
                        @php
                        @endphp
                        @if ($book->rentable==1)
                        @if ($book->available>0)
                        <h5>{{$book->available}} darab elérhető</h5>
                        @else
                        <h5>Nem elérhető</h5>
                        @endif
                        @else
                        <h5 class="text-danger">Nem kölcsönözhető</h5>
                        @endif

                        
                    </div>
                </div>
            </div>

            @if($loop->iteration%2==0)
            
            </div>
            <div class="row">
          @endif

 

        @endforeach
    </div>
    </div>
    
    @else
    <p>üres<p>
    @endif
@endsection