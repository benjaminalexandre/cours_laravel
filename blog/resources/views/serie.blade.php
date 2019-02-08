@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <h1>{{$serie->title}}</h1>
            <p><strong>Synopsis:</strong>
            {{$serie->summary}}</p>

            <h2>Saisons</h2>
            @foreach($serie->seasons as $season)
                <div>
                    <h5><a href="{{route('season', ['season_id'=>$season->id])}}">Saison {{$season->season_number}}</a></h5>
                </div>
                <h6>{{count($season->episodes)}} épisodes</h6>
                @foreach($season->episodes as $episode)
                    <div>
                        <p><a href="{{route('episode', ['episode_id'=>$episode->id])}}">S{{$season->season_number}}E{{$episode->episode_number}} : {{$episode->title}}</a></p>
                    </div>
                    <div>
                        <p>Acteurs:</p>
                        <ul>
                            @foreach($episode->actors as $actor)
                                <li>
                                    {{$actor->name}}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            @endforeach

        </>
    </div>

@endsection