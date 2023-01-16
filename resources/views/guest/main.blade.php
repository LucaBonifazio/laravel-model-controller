@extends('guest.layouts.base')

@section('content')
    <div class="card" style="width: 18rem;">
        @foreach ($movies as $movie)
        <div class="card-body">
          <h5 class="card-title">{{$movies['title']}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$movies['original_title']}}</h6>
          <div class="card-text">{{$movies['nationality']}}</div>
          <div class="card-text">{{$movies['date']}}</div>
          <div class="card-text">{{$movies['vote']}}</div>
        </div>
    </div>
        @endforeach
@endsection
