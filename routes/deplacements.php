<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DeplacementController;


Route::resource("/deplacement", DeplacementController::class);

