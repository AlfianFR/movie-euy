@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Show Data
                        <a href="{{ route('casting.index') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Pemain</label>
                            <input type="text" name="tahun" value="{{ $casting->nama }}" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="text" name="tahun" value="{{ $casting->tanggal_lahir }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <input type="text" name="tahun" value="{{ $casting->jenis_kelamin }}" class="form-control"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Foto</label>
                            <p>
                                <img src="{{ asset('images/casting/' . $casting->foto) }}"
                                    class="img-rounded img-responsive" style="width: 175px; height:175px;" alt="">
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection