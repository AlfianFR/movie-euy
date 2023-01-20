@extends('layouts.admin')

@section('title', 'Halaman Movie')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Cast Film
                        <a href="{{ route('movie.create') }}" class="btn btn-sm btn-outline-primary" style="float:right">
                            Tambah movie
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Genre</th>
                                    <th>Tahun Rilis</th>
                                    <th>Cover</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($movies as $movie)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $movie->judul }}</td>
                                            <td>{{ $movie->genreFilm->kategori }}</td>
                                            <td>{{ $movie->tahunRilis->tahun }}</td>
                                            <td>
                                                <img src="{{ $movie->image() }}" alt="" style="width: 75px">
                                            </td>
                                            <td>
                                                <form action="{{ route('movie.destroy', $movie->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('movie.edit', $movie->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('movie.show', $movie->id) }}"
                                                        class="btn btn-sm btn-outline-info">
                                                        Show
                                                    </a>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
