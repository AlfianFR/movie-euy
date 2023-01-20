@extends('layouts.admin')

@section('title', 'Halaman Tahun Rilis')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tahun Rilis
                        <a href="{{ route('tahun_rilis.create') }}" class="btn btn-sm btn-outline-primary" style="float:right">
                            Tambah Data
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table" id="dataTable">
                                <thead>
                                    <th>No</th>
                                    <th>Tahun Rilis</th>
                                    <th>Jumlah Film</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($tahun as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->tahun }}</td>
                                            <td>{{ $data->movie->count() }}</td>
                                            <td>
                                                <form action="{{ route('tahun_rilis.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('tahun_rilis.edit', $data->id) }}"
                                                        class="btn btn-sm btn-outline-warning">
                                                        Edit
                                                    </a>
                                                    <a href="{{ route('tahun_rilis.show', $data->id) }}"
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
