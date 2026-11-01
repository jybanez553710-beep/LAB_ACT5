@extends('layouts.app')

@section('content')
    <h1 class="mb-4">{{ $post->title }}</h1>

    <div class="p-4 rounded-3 mb-4" style="background-color: var(--cute-pink-bg); border: 2px dashed var(--cute-pink-border);">
        <p class="fs-5 mb-0" style="line-height: 1.8;">{{ $post->body }}</p>
    </div>

    <a href="{{ route('posts.index') }}" class="btn btn-cute">← Back to Posts</a>
    <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-cute ms-2">Edit</a>
@endsection