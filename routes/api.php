<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Api\QuizController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::post('/login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
});

Route::get('/dashboard', function () {
    return response()->json([
        'total_soal' => DB::table('soals')->count(),
        'total_user' => DB::table('users')->count(),
        'ujian_selesai' => DB::table('hasil_ujians')->count(),
    ]);
});

Route::get('/quiz', [QuizController::class, 'index']);
Route::get('/quiz/{id}', [QuizController::class, 'show']);