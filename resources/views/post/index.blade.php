@extends('layouts.main')
@section('content')
    <div>
        @foreach($posts as $post)
        <h3><a href='{{ route('post.show', $post->id) }}'>{{$post->title}}</a></h3>
        @endforeach
    </div>
    <a class="btn btn-primary" id='create-button' href="{{ route('post.create') }}" role="button">Create</a>
@endsection