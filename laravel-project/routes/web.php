<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemoController;

Route::get('/', [MemoController::class, 'top'])->name('memo.top');
Route::get('/new', [MemoController::class, 'new'])->name('memo.new');
Route::get('/old', [MemoController::class, 'old'])->name('memo.old');
Route::get('/create', [MemoController::class, 'create'])->name('memo.create');
Route::post('/store', [MemoController::class, 'store'])->name('memo.store');
Route::get('/edit/{id}', [MemoController::class, 'edit'])->name('memo.edit');
Route::put('/update/{id}', [MemoController::class, 'update'])->name('memo.update');
Route::delete('/destroy/{id}', [MemoController::class, 'destroy'])->name('memo.destroy');
Route::get('/verror', [MemoController::class, 'verror'])->name('memo.verror');
