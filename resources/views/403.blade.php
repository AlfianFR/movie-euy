@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>:(</h1>
        <h2>Maaf Anda Tidak Punya Akses Ke Halaman Berikut</h2>
        <a href="{{ url('/') }}">silahkan masuk</a>
    </center>
</body>
</html>
@endsection