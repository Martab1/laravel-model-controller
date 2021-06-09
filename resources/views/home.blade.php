
@extends('layouts.app')

@section('main-content')

    <h2 class="uppercase"> movies database</h2>
    <section class="container">
        <div class="flex cards">
            @foreach ( $movies as $movie )
            <div class="card">
                <h3 class="uppercase"> {{$movie->title}}</h3>
                <div> Original: {{$movie->original_title}}</div>
                <div> Nationality: {{$movie->nationality}}</div>
                <div>{{$movie->date}}</div>
                <div> vote: {{$movie->vote}}</div>
            </div>
            @endforeach
        </div>
    </section>

    
@endsection
 
