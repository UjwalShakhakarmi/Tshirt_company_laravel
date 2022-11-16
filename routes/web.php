<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\projectController;


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

Route::get('/', [projectController::class,'index']);
Route::get('/delete/{id}', [projectController::class ,'delete']);
Route::get('/edit/{id}', [projectController::class ,'edit']);
Route::post('/save-list',[projectController::class ,'saveList'])->name('saveList');
Route::post('/edit-list',[projectController::class ,'update'])->name('editlist');


