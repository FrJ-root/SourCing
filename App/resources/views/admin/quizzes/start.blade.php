@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Manage Quizzes</h2>
            <a href="{{ route('admin.quizzes.create') }}" class="btn btn-primary">Create Quiz</a>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            
            <table class="table">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Total Questions</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($quizzes as $quiz)
                        <tr>
                            <td>{{ $quiz->title }}</td>
                            <td>{{ Str::limit($quiz->description, 50) }}</td>
                            <td>{{ $quiz->total_questions }}</td>
                            <td>
                                <a href="{{ route('admin.quizzes.show', $quiz) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('admin.quizzes.edit', $quiz) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('quizzes.showAttachQuestions', $quiz) }}" class="btn btn-warning btn-sm">Attach Questions</a>
                                <form action="{{ route('admin.quizzes.destroy', $quiz) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No quizzes found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection