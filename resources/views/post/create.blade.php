@extends('layouts.main')
@vite(['resources/css/form.css'])
@section('content')
    <div class="form form-group">
        <form action="{{route('post.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input value='{{ old('title') }}' type="text" name='title' class="form-control" id="title" placeholder="Title">
                @error('title')
                <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" name='content' id="content" rows="3" placeholder="Content">{{ old('content') }}</textarea>
                @error('content')
                <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input value='{{ old('image') }}' type="text" name='image' class="form-control" id="image" placeholder="Image">
                @error('image')
                <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div class='mb-3'>
                <label for="category">Category</label>
                <select name='category_id' class="form-control" id="category">
                    @foreach($categories as $category)
                        <option
                        {{ old('category_id') == $category->id ? 'selected' : '' }}
                         value="{{ $category->id }}">{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for='tags'>Tags</label>
                <select class="form-select" multiple aria-label="multiple select example" id='tags' name='tags[]'>
                    @foreach($tags as $tag)
                        <option value='{{ $tag->id }}'>{{ $tag->title }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection