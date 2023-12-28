<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');;

    Route::get('/client', [App\Http\Controllers\ClientController::class, 'index'])->name('client-index');
    Route::get('/client/create', [App\Http\Controllers\ClientController::class, 'create'])->name('client-create');
    Route::get('/client/edit/{id}', [App\Http\Controllers\ClientController::class, 'edit'])->name('client-edit');
    Route::post('/client/store', [App\Http\Controllers\ClientController::class, 'store'])->name('client-store');
    Route::post('/client/update/{id}', [App\Http\Controllers\ClientController::class, 'store'])->name('client-update');
    Route::get('/client/destroy/{id}', [App\Http\Controllers\ClientController::class, 'destroy'])->name('client-destroy');

    Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project-index');
    Route::get('/project/create', [App\Http\Controllers\ProjectController::class, 'create'])->name('project-create');
    Route::get('/project/edit/{id}', [App\Http\Controllers\ProjectController::class, 'edit'])->name('project-edit');
    Route::post('/project/store', [App\Http\Controllers\ProjectController::class, 'store'])->name('project-store');
    Route::post('/project/update/{id}', [App\Http\Controllers\ProjectController::class, 'store'])->name('project-update');
    Route::get('/project/destroy/{id}', [App\Http\Controllers\ProjectController::class, 'destroy'])->name('project-destroy');
    Route::get('/project/show/{id}', [App\Http\Controllers\ProjectController::class, 'show'])->name('project-show');
});

require __DIR__.'/auth.php';
