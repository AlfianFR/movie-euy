@extends('layouts.front')

@section('title', 'About')
@section('content')
    <div class="page">
        <div class="container">
            <div class="breadcrumbs">
                <a href="index.html">Home</a>
                <span>Your Profile</span>
            </div>

            <div class="row">
                <div class="col-md-5">
                    <figure><img src="{{ asset('assets/dist/img/tomhaland.jpg') }}" alt="figure image"
                            style="border-radius: .5rem"></figure>
                </div>
                <div class="col-md-7">
                    <p class="leading">{{ Auth::user()->name }}</p>
                    <p>Umur : 18</p>
                    <h2><i>Hidup seperti larry</i></h2>
                </div>
            </div>
        </div>
    </div>
@endsection
