<?php

use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\SiteController;

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/contatos', [SiteController::class, 'contatos']);

Route::get('/', function () {
    return view('welcome');
});