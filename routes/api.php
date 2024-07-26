<?php

use App\Http\Controllers\Api\AktorController;
use App\Http\Controllers\Api\Authcontroller;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\KategoriController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware((['auth:sanctum']))->group(function () {
    Route::post('logout', [Authcontroller::class, 'logout']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('genre', GenreController::class);
    Route::resource('aktor', AktorController::class);
});

Route::post('login', [Authcontroller::class, 'login']);
Route::post('register', [Authcontroller::class, 'register']);
