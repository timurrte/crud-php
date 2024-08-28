@extends('layouts.main')
@vite(['resources/css/form.css'])
@section('content')
    <div class="form">
        <form action="{{route('post.update', $post->id)}}" method="POST">
        @csrf
        @method('patch')
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name='title' class="form-control" id="title" placeholder="Title" value='{{ $post->title }}'>
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" name='content' id="content" rows="3" placeholder="Content">{{ $post->content }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="text" name='image' class="form-control" id="image" placeholder="Image" value='{{ $post->image }}'>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection