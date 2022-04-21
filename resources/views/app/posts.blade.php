@extends('layouts.app')

@section('content')

<h1>Feedback van klanten:</h1>
    @foreach($posts as $post)
        <div class="posts"> 
            <p id="post">{{$post->title}}<p>
            <p id="name">Gepost door: {{$post->user->name}}<p>
            <p id="lastupdate">Laatste wijziging: {{$post->updated_at}}<p>
            <p id="description">{{$post->description}}</p>
            <button id="btninfo">Meer informatie</button>
        </div>
    @endforeach
@endsection
