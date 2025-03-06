<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::all();
        return view('admin.quizzes.index', compact('quizzes'));
    }

    public function start(Quiz $quiz)
    {
        return view('quizzes.start', compact('quiz'));
    }

    public function attachQuestions(Request $request, Quiz $quiz)
    {
        $request->validate([
            'question_ids' => 'required|array',
            'question_ids.*' => 'exists:questions,id',
        ]);
        $quiz->questions()->attach($request->question_ids);
        return redirect()->route('quizzes.index')->with('success', 'Questions attached to the quiz successfully.');
    }

    public function showAttachQuestions(Quiz $quiz)
    {
        $questions = Question::all();
        return view('quizzes.attach_questions', compact('quiz', 'questions'));
    }

    public function create()
    {
        return view('quizzes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_questions' => 'required|integer|min:1',
        ]);

        Quiz::create($request->all());
        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    }

    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quiz'));
    }

    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'total_questions' => 'required|integer|min:1',
        ]);

        $quiz->update($request->all());
        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }
    public function show(Quiz $quiz)
    {
        $questions = $quiz->questions;
        return view('quizzes.show', compact('quiz', 'questions'));
    }
}