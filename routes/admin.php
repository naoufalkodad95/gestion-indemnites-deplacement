<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdminController;


Route::middleware('auth','is_admin')->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/create',[AdminController::class,'create'])->name('admin.create');
    Route::post('/store',[AdminController::class,'store'])->name('admin.store');
});


