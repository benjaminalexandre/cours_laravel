@extends ('layouts.app')

@section('content')

    <h1>Édition de la série {{ $serie->title }}</h1>
    <form method="post" action="{{ route('serie_edit_post') }}">

        {{ csrf_field() }}

        <input type="hidden" name="serie_id" value="{{ $serie->id }}">

        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $serie->title) }}">

        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif

        <label for="summary">Résumé</label>
        <textarea class="form-control" id="summary" name="summary">{{ old('summary', $serie->summary) }}</textarea>

        @if ($errors->has('summary'))
            <span class="help-block">
                <strong>{{ $errors->first('summary') }}</strong>
            </span>
        @endif

        <input type="submit" class="btn btn-primary" value="Enregistrer">

    </form>

@endsection