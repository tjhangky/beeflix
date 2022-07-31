@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row text-light">
            <div class="col-md-4">
                <img src="{{ asset('storage/photos/' . $movie->photo) }}" style="width:300px">
            </div>
            <div class="col-md-4">
                <h5>{{ $movie->title }}</h5>
                @for ($i = 0; $i < 5; $i++)
                    @if ($i < $movie->rating)
                        <i class="bi bi-star-fill text-warning"></i>
                    @else
                        <i class="bi bi-star text-warning"></i>
                    @endif
                @endfor
                <p>{{ $movie->description }}</p>
                <p>Kategori: <a href="/?genre={{ $movie->genre->name }}"
                        class="text-warning">{{ $movie->genre->name }}</a></p>
            </div>
            <div class="col-md-4">
                <h5>Episode</h5>
                <table class="table table-hover table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Episode</th>
                            <th scope="col">Judul</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($episodes as $episode)
                            <tr>
                                <td>{{ $episode->episode }}</td>
                                <td>{{ $episode->title }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $episodes->links() }}
            </div>
        </div>



    </div>
@endsection
