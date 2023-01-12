<?php

use App\Models\Cat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Web\CatController;
use App\Http\Controllers\web\ExamController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\web\SkillController;

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

Route::get('/', [HomeController::class,'index']);

Route::get('/cat/show/{id}',[CatController::class,'show'])->name('cat.show');

Route::get('/skills/show/{id}',[SkillController::class,'show'])->name('skills.show');
Route::get('/exams/show/{id}',[ExamController::class,'show'])->name('exams.show');
Route::get('/exams/questions/{id}',[ExamController::class,'questions'])->name('exams.questions');
Route::get('/contact',[ContactController::class,'index'])->name('contact.create');
Route::post('/contact/message',[ContactController::class,'send'])->name('contact.store');

// Route::get('/dashboard', function () {
 //   return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

