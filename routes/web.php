<?php

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
Route::get('projects/', function () {
    return view('projects');
});
Route::get('insertProject/', function () {
    return view('insertProject');
});
Route::post('projects/', [App\Http\Controllers\ProjectController::class, 'viewAll'])->name('project');

Route::post('insertProject/',[App\Http\Controllers\ProjectController::class, 'store'])->name('add');
Route::get('showProject/',[App\Http\Controllers\ProjectController::class, 'view'])->name('projects');
Route::post('searchProject/',[App\Http\Controllers\ProjectController::class, 'search'])->name('result');
Route::get('editProject/{id}',[App\Http\Controllers\ProjectController::class, 'edit'])->name('edit');
Route::post('updateProject/',[App\Http\Controllers\ProjectController::class, 'update'])->name('update');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
