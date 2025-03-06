@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>{{ $quiz->title }}</h2>
            <div>
                <a href="{{ route('admin.quizzes.edit', $quiz) }}" class="btn btn-primary">Edit Quiz</a>
                <a href="{{ route('quizzes.showAttachQuestions', $quiz) }}" class="btn btn-warning">Attach Questions</a>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-4">
                <h4>Description</h4>
                <p>{{ $quiz->description }}</p>
            </div>

            <div class="mb-4">
                <h4>Questions ({{ $quiz->questions->count() }}/{{ $quiz->total_questions }})</h4>
                @if($quiz->questions->count() > 0)
                    <ul class="list-group">
                        @foreach($quiz->questions as $question)
                            <li class="list-group-item">{{ $question->question_text }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>No questions attached to this quiz yet.</p>
                @endif
            </div>

            <a href="{{ route('admin.quizzes.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection