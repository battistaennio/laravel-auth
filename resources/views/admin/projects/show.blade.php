@extends('layouts.app')

@section('content')
    <div class="container m-3">
        <h1>
            Dettaglio progetto "<strong>{{ $project->name }}</strong>"
        </h1>

        <div class="row my-1">
            <h3>Nome Progetto:</h3>
            <div class="col">
                <p>{{ $project->name }}</p>
            </div>
        </div>

        <div class="row my-1">
            <h3>Slug:</h3>
            <div class="col">
                <p>{{ $project->slug }}</p>
            </div>
        </div>

        <div class="row my-1">
            <h3>Argomento principale:</h3>
            <div class="col">
                <p>{{ $project->main_topic }}</p>
            </div>
        </div>

        <div class="row my-1">
            <h3>Link repository:</h3>
            <div class="col">
                <p>{{ $project->repo_link }}</p>
            </div>
        </div>

        <div class="row my-1">
            <h3>Descrizione:</h3>
            <div class="col">
                <p>{{ $project->description }}</p>
            </div>
        </div>

        <div class="col my-1">
            <a class="btn btn-warning" href="{{ route('admin.projects.index') }}">Torna alla lista</a>
        </div>

    </div>
@endsection
