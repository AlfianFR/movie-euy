@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Edit Data
                    </div>
                    <div class="card-body">
                        <form action="{{ route('movie.update', $movie->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="form-group">
                                <label for="">Judul</label>
                                <input type="text" name="judul"
                                    class="form-control @error('judul') is-invalid @enderror" id=""
                                    value="{{ $movie->judul }}">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Sinopsis</label>
                                <textarea type="text" name="sinopsis" class="form-control @error('sinopsis') is-invalid @enderror" id="">{{ $movie->sinopsis }} </textarea>
                                @error('sinopsis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Cover</label>
                                @if (isset($movie) && $movie->cover)
                                    <p>
                                        <img src="{{ asset('images/movies/' . $movie->cover) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" name="cover" value="{{ $movie->cover }}"
                                    class="form-control @error('cover') is-invalid @enderror" id="">
                                @error('cover')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Background</label>
                                @if (isset($movie) && $movie->background)
                                    <p>
                                        <img src="{{ asset('images/movies/' . $movie->background) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" name="background" value="{{ $movie->background }}"
                                    class="form-control @error('background') is-invalid @enderror" id="">
                                @error('background')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Genre</label>
                                <select name="id_genre" class="form-control @error('background') is-invalid @enderror"
                                    id="">
                                    <option>Pilih</option>
                                    @foreach ($genre as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $movie->id_genre ? 'selected' : '' }}>
                                            {{ $data->kategori }}</option>
                                    @endforeach
                                </select>
                                @error('id_genre')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Rilis</label>
                                <select name="id_tahun_rilis"
                                    class="form-control @error('id_tahun_rilis') is-invalid @enderror" id="">
                                    <option>Pilih</option>
                                    @foreach ($tahun as $data)
                                        <option value="{{ $data->id }}"
                                            {{ $data->id == $movie->id_tahun_rilis ? 'selected' : '' }}>
                                            {{ $data->tahun }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('id_tahun_rilis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Casting</label>
                                <select name="casting[]" class="form-control @error('casting') is-invalid @enderror"
                                    id="" multiple>
                                    <option>Pilih</option>
                                    @foreach ($casting as $data)
                                        <option value="{{ $data->id }}"
                                            {{ in_array($data->id, $selectCast) ? 'selected' : '' }}>
                                            {{ $data->nama }}</option>
                                    @endforeach
                                </select>
                                @error('id_tahun_rilis')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Durasi Film</label>
                                <input type="number" min="0" name="durasi" value="{{ $movie->durasi }}"
                                    class="form-control @error('durasi') is-invalid @enderror" id="">
                                @error('durasi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-outline-primary">
                                    Tambah
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection