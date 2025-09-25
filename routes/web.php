<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NinjaController;
use App\Models\Ninja;

Route::get('/', function () {
    return view('welcome');
});

//without using controllers:
    // Route::get('/ninjas/create', function () {
    //     return view('ninjas.create');
    // });

Route::get('/ninjas', [NinjaController::class, 'index'])->name('ninjas.index');
Route::get('/ninjas/create', [NinjaController::class, 'create'])->name('ninjas.create');
Route::get('/ninjas/{id}', [NinjaController::class, 'show'])->name('ninjas.show');