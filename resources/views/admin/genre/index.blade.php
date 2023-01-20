@extends('layouts.admin')

@section('title', 'Halaman Genre')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Genre Film
                        <button type="button" class="btn btn-sm btn-outline-primary" style="float:right" data-toggle="modal"
                            data-target="#addGenreFilm">
                            Tambah Data
                        </button>
                        @include('admin.genre.create')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($genres as $genre)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $genre->kategori }}</td>
                                            <td>
                                                <form action="{{ route('genre.destroy', $genre->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-sm btn-outline-warning"
                                                        data-toggle="modal"
                                                        data-target="#editGenreFilm-{{ $genre->id }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-info"
                                                        data-toggle="modal"
                                                        data-target="#showGenreFilm-{{ $genre->id }}">
                                                        Show
                                                    </button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @include('admin.genre.edit')
                                        @include('admin.genre.show')
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
