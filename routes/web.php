<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/deplacements', [DeplacementController::class, 'create'])->name('deplacements.create');
    Route::patch('/deplacements', [DeplacementController::class, 'update'])->name('deplacements.update');
    Route::delete('/deplacements', [DeplacementController::class, 'destroy'])->name('deplacements.destroy');
    Route::post('/deplacements', 'App\Http\Controllers\DeplacementController@recherche')->name('recherche');
    

});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
require __DIR__.'/deplacements.php';
