<?php
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\AktorController;
use App\Http\Controllers\Api\GenreController;
use App\Http\controllers\Api\Authcontroller;
use App\Http\Controller\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Json Kategori
Route::get('kategori', [KategoriController::class,'index']);
Route::post('kategori', [KategoriController::class,'store']);
Route::get('kategori/(id)', [KategoriController::class,'show']);
Route::put('kategori/{id}', [KategoriController::class,'update']);
Route::delete('kategori/{id}', [KategoriController::class,'destroy']);

Route::get('genre', [GenreController::class,'index']);
Route::post('genre', [GenreController::class,'store']);
Route::get('genre/(id)', [GenreController::class,'show']);
Route::put('genre/{id}', [GenreController::class,'update']);
Route::delete('genre/{id}', [GenreController::class,'destroy']);

// Route::middleware(['auth:sanctum'])->group(function () {
// Route::post('logout', [AuthController::class, 'logout']);
// Route::resource('kategori', KategoriController::class);
// Route::resource('genre', GenreController::class);
// Route::resource('aktor', AktorController::class);
// });
//auth route

Route::post('register', [Authcontroller::class, 'register']);
Route::post('login', [Authcontroller::class, 'login']);

