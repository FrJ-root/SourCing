<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Quiz;

class RegistrationController extends Controller
{
    public function register(Request $request)
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }
}
