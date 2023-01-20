@extends('layouts.front')

@section('title', 'Home')
@section('content')
<div class="page">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="slider">
                    <ul class="slides">
                        @foreach ($movies as $movie)
                        <li><a href="movie/{{ $movie->id }}"><img src="{{ $movie->background() }}" alt="Slide 1" style="height: 503px; object-fit: cover;"></a></li>
                        @endforeach
                        {{-- <li><ahref="#"><imgsrc="asset('template_front/dummy/9793central-intelligence-film-poster.jpg')" alt="Slide 2"></a></li>
                        <li><a href="#"><img src="{{ asset('template_front/dummy/slide-3.jpg') }}" alt="Slide 3"></a></li> --}}
                    </ul>
                </div>
            </div>
        </div> <!-- .row -->
        <div class="row">
            @foreach ($allMovies as $movie_item)
            <div class="col-sm-6 col-md-3">
                <div class="latest-movie">
                    <a href="movie/{{ $movie_item->id }}"><img src="{{ $movie_item->background() }}" alt="Movie 3" style="height: 250px; object-fit: cover; object-position: center;"></a>
                </div>
            </div>
            @endforeach
        </div> <!-- .row -->

        {{-- <div class="row">
            <div class="col-md-4">
                <h2 class="section-title">november berdarah Coming soon</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <ul class="movie-schedule">
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                </ul> <!-- .movie-schedule -->
            </div>
            <div class="col-md-4">
                <h2 class="section-title">November premiere</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <ul class="movie-schedule">
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                </ul> <!-- .movie-schedule -->
            </div>
            <div class="col-md-4">
                <h2 class="section-title">October premiere</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                <ul class="movie-schedule">
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                    <li>
                        <div class="date">16/12</div>
                        <h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
                    </li>
                </ul> <!-- .movie-schedule -->
            </div>
        </div> --}}
    </div>
</div>
@endsection
