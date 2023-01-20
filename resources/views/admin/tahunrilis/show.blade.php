@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Show Data
                        <a href="{{ route('tahun_rilis.index') }}" class="btn btn-sm btn-outline-primary" style="float: right">
                            Kembali
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Tahun Rilis</label>
                            <input type="text" name="tahun" value="{{ $tahun->tahun }}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection