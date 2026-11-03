@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>All Cute Posts</h1>
        <div>
            <a href="{{ route('posts.create') }}" class="btn btn-cute">+ Create New Post</a>
            <a href="{{ route('posts.reports.index') }}" class="btn btn-outline-cute">View Reports</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-cute mb-4">
            {{ $message }}
        </div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td><strong>{{ $post->title }}</strong></td>
                    <td>{{ Str::limit($post->body, 50) }}</td>
                    <td>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-cute btn-sm">View</a>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-cute btn-sm">Edit</a>
                        
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-cute btn-sm" onclick="return confirm('Delete this post?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center py-4 text-muted">No posts yet. Create one!</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection