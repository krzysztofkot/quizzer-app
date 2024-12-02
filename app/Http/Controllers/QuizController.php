<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class QuizController extends Controller
{
    public function create()
    {
        return view('Quizes.create');
    }

    public function store(Request $request)
    {
        $quiz = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:255']
        ]);

        $quiz['slug'] = Str::slug($request->input('title'));

        $result = Auth::user()->quizes()->create($quiz);

        return redirect()->route('quizes.show', ['quiz' => $result->id]);
    }

    public function show(Quiz $quiz)
    {
        return view('Quizes.show', ['quiz' => $quiz]);
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect(route('dashboard'));
    }
}
