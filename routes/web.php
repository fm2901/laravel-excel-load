<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;


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

Route::get('/excel', [App\Http\Controllers\ExcelController::class, 'index'])->name('excel');
Route::get('/upload', [App\Http\Controllers\ExcelController::class, 'upload'])->name('upload');
Route::post('/excelUpload', [App\Http\Controllers\ExcelController::class, 'excelUpload']);


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
