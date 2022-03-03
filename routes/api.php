<?php

use App\Http\Controllers\PosterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Для простоты можно было бы так, но по ТЗ надо делать защиту на nginx, а вешать ограничения на HTTP методы сложнее
// Route::resource('poster', PosterController::class);

Route::prefix('poster')->group(function () {
    Route::get('/', [PosterController::class, 'index'])
        ->name('posterIndex');

    Route::get('/create', [PosterController::class, 'create'])
        ->name('posterCreate');

    Route::get('/delete/{id}', [PosterController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('posterDelete');
});
