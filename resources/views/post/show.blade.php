@extends('layouts.main')
@vite(['resources/css/show.css'])
@section('content')
    <div class='ml-3'>
        <a href='{{route('post.index')}}'>Back</a>
    </div>
    <div class='post'>
        <h3>{{$post->title}}</h3>
        <p class='text'>{{$post->content}}</p>
    </div>
    <div class='edit-buttons'>
        <button type="button" class="btn btn-success"><a class='edit-btn' href='{{ route('post.edit', $post->id) }}'>Edit</a></button>
        <form href='{{ route('post.delete', $post->id) }}' method='post' href>
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value='Delete'>
        </form>
    </div>
@endsection