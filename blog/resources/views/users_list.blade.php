@extends('layouts.app')

@section('content')

    <h1>Utilisateurs</h1>
    <ul>
        @foreach($users as $user)

            <li> {{ $user->name }} ({{$user->email}})</li>

        @endforeach
    </ul>

    {{ $users->links() }}

@endsection