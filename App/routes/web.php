<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QuizController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Auth routes
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin routes
Route::prefix('admin')
    ->middleware(['auth', 'admin']) // Add admin middleware
    ->name('admin.')
    ->group(function () {
        // Dashboard
        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('dashboard');

        // Users Management
        Route::resource('users', UserController::class);

        // Quizzes Management
        Route::get('quizzes', [QuizController::class, 'index'])->name('quizzes.index');
        Route::get('quizzes/create', [QuizController::class, 'create'])->name('quizzes.create');
        Route::post('quizzes', [QuizController::class, 'store'])->name('quizzes.store');
        Route::get('quizzes/{quiz}', [QuizController::class, 'show'])->name('quizzes.show');
        Route::get('quizzes/{quiz}/edit', [QuizController::class, 'edit'])->name('quizzes.edit');
        Route::patch('quizzes/{quiz}', [QuizController::class, 'update'])->name('quizzes.update');
        Route::delete('quizzes/{quiz}', [QuizController::class, 'destroy'])->name('quizzes.destroy');
        
        // Quiz Questions
        Route::get('quizzes/{quiz}/attach-questions', [QuizController::class, 'showAttachQuestions'])
            ->name('quizzes.attach-questions');
        Route::post('quizzes/{quiz}/attach-questions', [QuizController::class, 'attachQuestions'])
            ->name('quizzes.attach-questions.store');
    });

// Auth routes
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout')->middleware('auth');

Route::get('/admin/quizzes', function () {
    return App\Models\Quiz::all();
})->name('quizzes.api');

Route::get('/quizzes/{quiz}/start', [QuizController::class, 'start'])
    ->name('quizzes.start');

require __DIR__.'/auth.php';