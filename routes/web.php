<?php

use App\Http\Controllers\LinkController;
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

Route::get('/', [LinkController::class, 'index'])->name('home');

Route::get('/link/{id}', [LinkController::class, 'showOne'])->name('link.showOne');

Route::get('/create-link', [LinkController::class, 'create'])->name('link.create');

Route::post('/create-link', [LinkController::class, 'createInDB'])->name('link.createInDB');

Route::get('/update-link/{id}', [LinkController::class, 'updateOne'])->name('link.update');

Route::post('/update-link/{id}', [LinkController::class, 'updateOneInDB'])->name('link.updateOneInDB');

Route::get('/delete-link/{id}', [LinkController::class, 'deleteOne'])->name('link.deleteOne');
