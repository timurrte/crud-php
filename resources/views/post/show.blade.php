@extends('layouts.main')
@vite(['resources/css/show.css'])
@section('content')
    <div class='post'>
        <h3>{{$post->title}}</h3>
        <p class='text'>{{$post->content}}</p>
    </div>
@endsection