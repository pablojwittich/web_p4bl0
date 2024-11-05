<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

//GET
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/app', [WebController::class, 'app'])->name('app');
// Route::get('/proyectos', [WebController::class, 'proyectos'])->name('proyectos');
Route::get('/contacto', [WebController::class, 'contacto'])->name('contacto');
Route::get('/experiencia', [WebController::class, 'experiencia'])->name('experiencia');
Route::get('/sobremi', [WebController::class, 'sobremi'])->name('sobremi');
