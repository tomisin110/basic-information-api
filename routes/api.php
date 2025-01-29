<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InformationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/hello', function (Request $request) {
    return response()->json(['message' => 'Hello World!']);
});

Route::get('/basic-information', [InformationController::class, 'generateUrl']);
