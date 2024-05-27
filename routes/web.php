<?php

use App\Http\Controllers\HomeController; // Importe a classe HomeController
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/portfolio', [PortfolioController::class, 'index']);
Route::get('/portfolio', 'PortfolioController@index');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
