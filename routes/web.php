<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Importe a classe HomeController

Route::get('/', [HomeController::class, 'index']);

use App\Http\Controllers\PortfolioController;

Route::get('/portfolio', [PortfolioController::class, 'index']);
