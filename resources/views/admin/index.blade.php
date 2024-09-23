@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4">
        <h3>Benvenuto {{ Auth::user()->name }}!</h3>
        <h5>Sono presenti {{ $count_projects }} progetti -> <a href="{{ route('admin.projects.index') }}">Vai alla lista</a>
        </h5>
    </div>
@endsection
