<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PortfolioController::class, 'index']);
Route::get('/resume', [PortfolioController::class, 'resume']);
Route::get('/projets', [PortfolioController::class, 'projets']);
Route::get('/contact', [PortfolioController::class, 'contact']);
Route::post('/contact', [PortfolioController::class, 'store']);