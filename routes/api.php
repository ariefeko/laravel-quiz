<?php

use Illuminate\Http\Request;

Route::post('quiz', 'QuizController@getQuiz')->name('quiz');