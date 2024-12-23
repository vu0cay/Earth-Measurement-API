<?php

use App\Http\Controllers\TreeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/trees', [TreeController::class, 'index']);
Route::get('/trees/{tree_id}', [TreeController::class, 'show']);
Route::post('/trees', [TreeController::class, 'store']);
Route::delete('/trees/{tree_id}', [TreeController::class, 'destroy']);

