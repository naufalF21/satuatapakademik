<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieProgramController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramsController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/student', [StudentController::class, 'index'])->name('student');
Route::get('/programs', [ProgramsController::class, 'index'])->name('programs');
Route::get('/programs/movie', [MovieProgramController::class, 'index'])->name('programs.movie');
Route::get('/programs/movie/{id}', [MovieProgramController::class, 'detail'])->name('programs.movie.detail');
