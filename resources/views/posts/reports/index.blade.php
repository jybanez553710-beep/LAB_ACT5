@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Blog Post Reports</h1>
        <a href="{{ route('posts.index') }}" class="btn btn-outline-cute">Back to Blog Posts</a>
    </div>

    <!-- Error Messages -->
    @if ($errors->any())
        <div class="alert alert-danger mb-4" style="border-radius: 15px;">
            <strong>Please correct the following:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Filter Box -->
    <div class="card mb-4" style="border: 2px solid #ffb6c1; border-radius: 15px; box-shadow: 0 4px 15px rgba(255, 182, 193, 0.2);">
        <div class="card-body p-4">
            <p class="text-muted mb-4">Filter your blog posts by date to generate and download a report.</p>
            
            <form action="{{ route('posts.reports.index') }}" method="GET">
                <div class="row align-items-end">
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="start_date" class="form-label fw-bold">Start Date</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="start_date" 
                            name="start_date" 
                            value="{{ old('start_date', $startDate) }}"
                        >
                    </div>
                    
                    <div class="col-md-4 mb-3 mb-md-0">
                        <label for="end_date" class="form-label fw-bold">End Date</label>
                        <input 
                            type="date" 
                            class="form-control" 
                            id="end_date" 
                            name="end_date" 
                            value="{{ old('end_date', $endDate) }}"
                        >
                    </div>

                    <div class="col-md-4 d-flex gap-2">
                        <button type="submit" class="btn btn-cute w-100">Generate</button>
                        <a href="{{ route('posts.reports.index') }}" class="btn btn-outline-cute w-100">Reset</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Report Summary & Export Buttons -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <h5 class="mb-0">
                <strong>Period:</strong> 
                <span class="text-muted">
                    {{ $startDate ? \Carbon\Carbon::parse($startDate)->format('M d, Y') : 'Beginning' }} 
                    to 
                    {{ $endDate ? \Carbon\Carbon::parse($endDate)->format('M d, Y') : 'Present' }}
                </span>
            </h5>
            <h4 class="mt-1 mb-0 text-dark">Total Posts: {{ $totalPosts }}</h4>
        </div>
        
        <div>
            <!-- Note: We pass the current dates to the export routes so it downloads the filtered data -->
            <a href="{{ route('posts.reports.pdf', ['start_date' => $startDate, 'end_date' => $endDate]) }}" class="btn btn-cute">
                Export PDF
            </a>
            <a href="{{ route('posts.reports.csv', ['start_date' => $startDate, 'end_date' => $endDate]) }}" class="btn btn-outline-cute">
                Export CSV
            </a>
        </div>
    </div>

    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Body Preview</th>
                    <th>Created Date</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td><strong>{{ $post->title }}</strong></td>
                    <td>{{ Str::limit($post->body, 100) }}</td>
                    <td>{{ $post->created_at->format('M d, Y') }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center py-4 text-muted">
                        No posts found for the selected dates.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection