<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\QuizRequest;
use App\Models\Quiz;


class QuizController extends Controller
{

    /**
     * Gets the quiz, can be get or post
     *
     * @param      \App\Requests\QuizRequest  $request  The request
     *
     * @return     JSON response
     */
    public function getQuiz(QuizRequest $request)
    {
        $quiz = Quiz::with('questions.options')->find($request->id);

        return response()->json([
            'message' => 'success',
            'data' => $quiz
        ], 200);
    }

}
