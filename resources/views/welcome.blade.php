@extends('layout.master')

@section("content")
    <div class="container py-5">
        <h1 class="mb-4 text-center fw-bold">Film Collection</h1>
        <div class="row g-4">
            @foreach($movies as $movie)
                <x-card :movie="$movie" />
            @endforeach
        </div>
    </div>
@endsection