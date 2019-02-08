@extends('layouts.app')

@section('content')

    <h1>{{$user->name}}</h1>
    <div>
        <p><strong>Voici vos rôles</strong></p>
        <ul>
            <li>Admin : {{var_dump($isAdmin)}}</li>
        </ul>

    </div>
    <div>
        <p><strong>Voici vos permissions</strong></p>
    </div>

@endsection