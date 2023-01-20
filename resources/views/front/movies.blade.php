@extends('layouts.front')

@section('content')
    <div class="page">
        <div class="container">
            <div class="breadcrumbs">
                <a href="index.html">Home</a>
                <span>Movie Review</span>
            </div>

            <div class="filters">
                <select name="#" id="#" placeholder="Choose Category">
                    @foreach ($genres as $genre)
                        <option data-filter=".{{ $genre->kategori }}">{{ $genre->kategori }}</option>
                    @endforeach
                </select>
                <select name="#" id="#">
                    <option value="#">2012</option>
                    <option value="#">2013</option>
                    <option value="#">2014</option>
                </select>
            </div>
            <div class="movie-list">
                @foreach ($movies as $movie)
                    <div class="movie {{ $movie->genreFilm->kategori }}">
                        <figure class="movie-poster">
                            <a href="movie/{{ $movie->id }}"><img src="{{ $movie->background() }}" alt="#"
                                style="width: 330px; height: 240px; object-fit: cover"></a>
                            </figure>
                        <div class="movie-title"><a href="movie/{{ $movie->id }}">{{ $movie->judul }}</a></div>
                        <p>{{ Str::limit($movie->sinopsis, 100, '....') }}</p>
                    </div>
                @endforeach
            </div> <!-- .movie-list -->

            <div class="pagination">
                <a href="#" class="page-number prev"><i class="fa fa-angle-left"></i></a>
                <span class="page-number current">1</span>
                <a href="#" class="page-number">2</a>
                <a href="#" class="page-number">3</a>
                <a href="#" class="page-number">4</a>
                <a href="#" class="page-number">5</a>
                <a href="#" class="page-number next"><i class="fa fa-angle-right"></i></a>
            </div>
        </div>
    </div>
@endsection
