@extends('layouts.main-layout')

@section('pageName')
    home
@endsection

@section('content')
    <h1>prova di contenuti</h1>
    <div id="cards" class="container d-flex flex-wrap justify-content-between">

        @foreach ($fumetti as $fumetto)
            <div class="card mb-4 text-white">
                <div class="image">
                    <img src="{{ $fumetto['thumb'] }}" alt="{{ $fumetto['title'] }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $fumetto['title'] }}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection
