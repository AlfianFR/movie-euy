{{-- @extends('layouts.front')

@section('title', 'About')
@section('content')
    <div class="page">
        <div class="breadcrumbs">
            <a href="index.html">Home</a>
            <span>Your Profile</span>
        </div>

        <div class="row">
            <div class="col-md-5">
                <figure><img src="{{ asset('assets/dist/img/tomhaland.jpg') }}" alt="figure image" style="border-radius: .5rem"></figure>
            </div>
            <div class="col-md-7">
                <p class="leading">Alfian Fahrull Rizki</p>
                <p>Umur : 18</p>
                <p><h2><i><q>Hidup seperti larry</q></i></h2></p>
            </div>
        </div>
    </div>
@endsection --}}

@extends('layouts.front')
@include('layouts.components.bootstrap.bootstrap-css')
@section('title', 'Profile')
@section('content')
    <div class="page">
        <div class="container">
            <img src="{{ $movie->background() }}" class="rounded-3" alt="" style="width: 100%; max-height: 500px; object-fit: cover; object-position: center">

            <div class="row">
                <div class="col-md-10 mx-auto pt-5">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <figure><img src="{{ $movie->image() }}" alt="figure image" class="w-100 rounded-3"></figure>
                        </div>
                        <div class="col-md-8">
                            <h1>{{ $movie->judul }}</h1>
                            <hr>
                            <p class="fs-5 mb-0">{{ $movie->tahunRilis->tahun . ' | ' . $movie->genreFilm->kategori }}</p>
                            <p class="fs-5">{{ $movie->durasi }} Menit</p>
                            <hr>
                            <p class="fs-5">{{ $movie->sinopsis }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <h2 class="section-title">Cast</h2>
            <div class="row">

                @foreach ($movie->casting as $cast)
                    <div class="col-md-3">
                        <div class="team">
                            <figure class="team-image"><img src="{{ $cast->image() }}" alt=""></figure>
                            <h2 class="team-name">{{ $cast->nama }}</h2>
                        </div>
                    </div>
                @endforeach

            </div>
            <hr />
            <div class="d-flex justify-content-end">
                <a href="{{ url('/') }}" class="btn btn-primary me-3">Home</a>
                <a href="{{ url('/movies') }}" class="btn btn-primary">Movies Page</a>
            </div>
        </div>
        <div class="container" style="margin-top: 10px">
            <h1>Komentar</h1>
            <form action="{{ route('kirimReview') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="" class="form-control" required>
                    </div>
                    <input type="hidden" name="id_movie" value="{{ $movie->id }}">
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="text" name="email" id="" class="form-control" required>
                    </div>
                </div>
                <div class="" style="margin-top: 10px">
                    <label for="">Komentar</label>
                    <textarea name="komentar" id="" cols="100" rows="10" class="form-control" required></textarea>
                </div>
                <button class="btn btn-primary mt-4" type="submit">Kirim Komentar</button>
            </form>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Komentar</th>
                    </tr>
                    @foreach ($review as $rev)
                        <tr>
                            <td>{{ $rev->nama }}</td>
                            <td>{{ $rev->email }}</td>
                            <td>{{ $rev->komentar }}</td>
                        </tr>
                    @endforeach
                </thead>
            </table>
        </div>
    </div>
    @include('layouts.components.bootstrap.bootstrap-js')
@endsection
