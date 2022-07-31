@extends('layouts.main')

@section('content')
    <div class="container">
        @if (request()->has('genre'))
            {{-- filter --}}
            <h4 class="text-light">{{ $genres->name }}</h4>
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-md-3">
                        <div class="card mb-4 border-0 rounded-0">
                            <img src="{{ asset('storage/photos/' . $movie->photo) }}" class="card-img-top rounded-0"
                                style="height: 450px">
                            <div class="card-body bg-dark text-light">
                                <h5 class="card-title text-center">{{ $movie->title }}</h5>
                            </div>
                            <a href="/movies/{{ $movie->id }}" class="btn btn-warning rounded-0"> <b>LIHAT
                                    FILM</b>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            {{-- no filter --}}
            @foreach ($genres as $genre)
                <h4 class="text-light">{{ $genre->name }}</h4>
                <div class="row">
                    @foreach ($movies as $movie)
                        @if ($movie->genre_id == $genre->id)
                            <div class="col-md-3">
                                <div class="card mb-4 border-0 rounded-0">
                                    <img src="{{ asset('storage/photos/' . $movie->photo) }}"
                                        class="card-img-top rounded-0" style="height: 450px">
                                    <div class="card-body bg-dark text-light">
                                        <h5 class="card-title text-center">{{ $movie->title }}</h5>
                                    </div>
                                    <a href="/movies/{{ $movie->id }}" class="btn btn-warning rounded-0"> <b>LIHAT
                                            FILM</b>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            @endforeach
        @endif


    </div>
@endsection
