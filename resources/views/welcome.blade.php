@extends('layout.master')

@section("content")
    <div class="container py-5">
        <h1 class="mb-4 text-center fw-bold">Film Collection</h1>
        <div class="row g-4">
            @foreach($movies as $movie)
                <div class="col-12 col-md-6 col-xl-4">
                    <div class="card shadow-sm h-100 border-0">
                        <div class="card-header bg-white border-0">
                            <h5 class="card-title mb-0 fw-semibold text-primary">{{ $movie->title }}</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted fst-italic">{{ $movie->original_title }}</h6>
                            <ul class="list-unstyled mb-0">
                                <li><strong>Nationality:</strong> {{ $movie->nationality }}</li>
                                <li><strong>Date:</strong> {{ $movie->date }}</li>
                                <li>
                                    <strong>Vote:</strong>
                                    @php
                                        $vote = $movie->vote; // voto da 0 a 10
                                        $fullStars = floor($vote);
                                        $hasHalfStar = ($vote - $fullStars) >= 0.5;
                                    @endphp
                                    <div class="star-rating d-inline-block">
                                        @for ($i = 1; $i <= 10; $i++)
                                            @if ($i <= $fullStars)
                                                <span class="star full">★</span>
                                            @elseif ($i == $fullStars + 1 && $hasHalfStar)
                                                <span class="star half">★</span>
                                            @else
                                                <span class="star empty">★</span>
                                            @endif
                                        @endfor
                                    </div>
                                    <span class="ms-2 text-muted">({{ $movie->vote }}/10)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection