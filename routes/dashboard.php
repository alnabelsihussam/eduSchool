<?php

use App\Http\Controllers\Dashboard\CatsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;


Route::resource('dashboard/cats', CatsController::class);


//Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


?>
