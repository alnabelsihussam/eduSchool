<?php

use App\Http\Controllers\Dashboard\CatsController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard/cats/archive',[CatsController::class,'archive'])->name('cats.archive');
Route::get('/dashboard/cats/restore/{id}',[CatsController::class,'restore'])->name('cats.restore');
Route::get('/dashboard/cats/force/{id}',[CatsController::class,'force'])->name('cats.force');

Route::resource('dashboard/cats', CatsController::class);


//Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


?>
