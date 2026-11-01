@extends('layouts.app')

@section('content')
    <h1>Create a New Post ✨</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Enter a cute title...">
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">Body</label>
            <textarea name="body" class="form-control" rows="5" placeholder="What's on your mind?"></textarea>
        </div>

        <button type="submit" class="btn btn-cute">Save Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-cute ms-2">Cancel</a>
    </form>
@endsection