<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Counter;
 use App\Http\Controllers\FormController;

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

Route::get('/livewire/counter', Counter::class);

//.....form

Route::get('/portfolio', [FormController::class, 'index']);
// Route::post('/submit', [FormController::class, 'submit']);