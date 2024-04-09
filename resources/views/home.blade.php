@extends('layouts/app')

@section('content')


<h1 class="text-center mb-5">   
 I miei film Preferiti
</h1>


<div class="container">
    
    <div class="row row-cols-3 row-gap-3">
        
        @foreach ($movies as $movie)
            
        <div class="col">
            <div class="card inner-shadow">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->original_title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->title}}</h6>
                    <p class="card-text">{{$movie->nationality}}</p>
                    <p class="card-text">{{$movie->vote}}</p>
                    <p class="card-text">{{$movie->date}}</p>
                </div>
            </div>
        </div>
        
        @endforeach
    </div>
    
    </div>
    
@endsection