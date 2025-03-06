@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Attach Questions to {{ $quiz->title }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('quizzes.attachQuestions', $quiz) }}" method="POST">
                @csrf
                
                @if($questions->count() > 0)
                    <div class="form-group">
                        @foreach($questions as $question)
                            <div class="form-check mb-2">
                                <input type="checkbox" 
                                       name="question_ids[]" 
                                       value="{{ $question->id }}" 
                                       class="form-check-input"
                                       id="question_{{ $question->id }}"
                                       {{ $quiz->questions->contains($question->id) ? 'checked' : '' }}>
                                <label class="form-check-label" for="question_{{ $question->id }}">
                                    {{ $question->question_text }}
                                </label>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save Questions</button>
                        <a href="{{ route('admin.quizzes.show', $quiz) }}" class="btn btn-secondary">Cancel</a>
                    </div>
                @else
                    <p>No questions available to attach.</p>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection