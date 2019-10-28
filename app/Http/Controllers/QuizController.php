<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;


class QuizController extends Controller
{
    // public function calculate(Request $request)
    // {
    //     $score = $request->score;
    //     $count = Quiz::count();dd($count);

    //     // $result = 
    // }

    public function getQuiz(Request $request)
    {
        $quiz = Quiz::with('questions.options')->find($request->id);

        return response()->json([
            'message' => 'success',
            'data' => $quiz
        ], 200);
    }
}
