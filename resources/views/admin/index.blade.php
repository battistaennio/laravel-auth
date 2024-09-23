@extends('layouts.app')

@section('content')
    <div class="container p-4">
        <h3>Questa è la home page dell'admin</h3>
        <h5>Benvenuto {{ Auth::user()->name }}!</h5>
    </div>
@endsection
