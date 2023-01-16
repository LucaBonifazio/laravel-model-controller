@extends('guest.layouts.base')

@section('content')
    @foreach ($movies as $movie)
    <div>{{$movie['title']}}</div>
    @endforeach
@endsection
