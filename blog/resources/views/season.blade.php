@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Saison {{$season->season_number}} de la série {{$season->serie->title}}</h1>

            <h2>Episodes</h2>
            @foreach($season->episodes as $episode)
                <div>
                    <p><a href="{{route('episode', ['episode_id'=>$episode->id])}}">Episode {{$episode->episode_number}}</a></p>
                </div>
            @endforeach
        </div>
    </div>

@endsection