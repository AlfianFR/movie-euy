@extends('layouts.admin')

@section('title', 'Halaman Profile')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <p>Nama : Alfian</p>
                        <p>TTL :Bandung 11-03-2004  </p>
                        <p><H2>hidup seperti Larry</H2></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Hallo Ini Halaman Profile!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
