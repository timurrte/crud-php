@extends('layouts.main')
@vite(['resources/css/form.css'])
@section('content')
    <div class="form">
        <form action="{{route('post.store')}}" method="POST">
        @csrf
            <div class="mb-3">
                <label for="title">Title</label>
                <input type="text" name='title' class="form-control" id="title" placeholder="Title">
            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control" name='content' id="content" rows="3" placeholder="Content"></textarea>
            </div>
            <div class="mb-3">
                <label for="image">Image</label>
                <input type="text" name='image' class="form-control" id="image" placeholder="Image">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection