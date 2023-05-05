<?php

use App\Http\Controllers\DesignController;
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

Route::get('/factory', [DesignController::class, 'factory'])->name('design.factory');
Route::get('/abstractFactory', [DesignController::class, 'abstractFactory'])->name('design.abstractFactory');
