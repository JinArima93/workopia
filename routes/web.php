<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
    
Route::get('/', [HomeController::class, 'index']);
Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');
Route::post('/jobs', [JobController::class, 'store'] )->name('jobs.store');
Route::get('/jobs/create', [JobController::class, 'create'] )->name('jobs.create');
Route::get('/jobs/{job}', [JobController::class, 'show'] )->name('jobs.show');