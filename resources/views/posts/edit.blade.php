@extends('layouts.app')

@section('content')
    <h1>Edit Post 📝</h1>

    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label fw-bold">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold">Body</label>
            <textarea name="body" class="form-control" rows="5">{{ $post->body }}</textarea>
        </div>

        <button type="submit" class="btn btn-cute">Update Post</button>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-cute ms-2">Cancel</a>
    </form>
@endsection