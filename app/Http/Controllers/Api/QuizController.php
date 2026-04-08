<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quiz = Quiz::with('soals')->get();

        return response()->json([
            'status' => true,
            'data' => $quiz
        ]);
    }

    public function show($id)
    {
        $quiz = Quiz::with('soals')->findOrFail($id);

        return response()->json([
            'status' => true,
            'data' => $quiz
        ]);
    }
}