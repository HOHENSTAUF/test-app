<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Custom route
Route::get('/transactions', [\App\Http\Controllers\transactionController::class, 'index']);
Route::get('/transactions/{transaction}', [\App\Http\Controllers\transactionController::class, 'show']);

// Another custom routes
Route::get('/transactions/create/post', [\App\Http\Controllers\transactionController::class, 'create']); //shows create post form
Route::post('/transactions/create/post', [\App\Http\Controllers\transactionController::class, 'store']); //saves the created post to the databse
Route::get('/transactions/{transaction}/edit', [\App\Http\Controllers\transactionController::class, 'edit']); //shows edit post form
Route::put('/transactions/{transaction}/edit', [\App\Http\Controllers\transactionController::class, 'update']); //commits edited post to the database 
Route::delete('/transactions/{transaction}', [\App\Http\Controllers\transactionController::class, 'destroy']); //deletes post from the database