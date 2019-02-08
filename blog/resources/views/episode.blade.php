@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col">
            <h1>Episode {{$episode->episode_number}} de la saison {{$episode->season->season_number}}</h1>
            <p><strong>Synopsis:</strong>
                {{$episode->title}}</p>
        </div>
    </div>

@endsection