<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

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

Route::get('/', [MemoController::class, 'top'])->name('memo.top');
Route::get('/create', [MemoController::class, 'create'])->name('memo.create');
Route::post('/store', [MemoController::class, 'store'])->name('memo.store');
Route::get('/edit', [MemoController::class, 'edit'])->name('memo.edit');
Route::put('/update/{id}', [MemoController::class, 'update'])->name('memo.update');
Route::delete('/destroy', [MemoController::class, 'destroy'])->name('memo.destroy');


// Route::get('/', function () {
//     return view('welcome');
// });
