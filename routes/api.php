<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::resource('books', BookController::class)->except(['create','edit']);
Route::prefix('auth')->group(function(){
    Route::post('/register',[AuthController::class,'register']);
    Route::post('/login',[AuthController::class,'login']);
    Route::post('/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
}
);

// Global authentication for API routes
Route::middleware('auth:sanctum')->group(function () { 

    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Other API routes requiring general authentication go here...

    // Admin-only routes
    Route::middleware('CheckRole:admin')->group(function() {
        // Routes accessible only by admins (e.g., POST /books, PUT /books/{id}, DELETE /books/{id} )
        // Bookstore API routes
        Route::resource('books', BookController::class)->except(['create', 'edit']);
    });
});