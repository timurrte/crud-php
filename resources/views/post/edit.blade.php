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
            <div class="mb-3">
                <label for="category">Category</label>
                <select name='category_id' class="form-control" id="category">
                    @foreach($categories as $category)
                        <option
                        {{ $category->id === $post->category->id ? 'selected' : '' }}
                        value='{{ $category->id }}'>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for='tags'>Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" id='tags' name='tags[]'>
                    @foreach($tags as $tag)
                        <option
                            @foreach($post->tags as $ptag)
                            {{ $ptag->id === $tag->id ? 'selected' : '' }}
                            @endforeach
                         value='{{ $tag->id }}'>{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>
@endsection