<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DaftarsoalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
// Route::get('/soal', [DaftarsoalController::class, 'index']);
// Route::get('/soal/{id}', [DaftarsoalController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/soal', [DaftarsoalController::class, 'index']);
    Route::get('/soal/{id}', [DaftarsoalController::class, 'show']);
});

// Route::resource('daftarsoals', DaftarsoalController::class);

// Route::post('login', [AuthController::class, 'signin']);
// Route::post('register', [AuthController::class, 'signup']);

// Route::middleware('auth:sanctum')->group( function () {
//     Route::resource('daftarsoals', DaftarsoalController::class);
// });

// Route::middleware('auth:sanctum')->get('/user', function () {
//     return $request->user();
// });
