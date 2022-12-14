<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishController;

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

Route::get('/', [DishController::class, 'index']);
Route::post('/dishes', [DishController::class, 'store']);
Route::get('/dishes/create', [DishController::class, 'create']);
Route::get('/dishes/{dish}', [DishController::class ,'show']);
Route::get('dishes/{dish}/edit', [DishController::class, 'edit']);
Route::put('/dishes/{dish}', [DishController::class, 'update']);
Route::delete('/dishes/{dish}', [DishController::class,'delete']);

require __DIR__.'/auth.php';
