<?php

use App\Http\Controllers\Poster;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Для простоты можно было бы так, но по ТЗ надо делать защиту на nginx, а вешать ограничения на HTTP методы сложнее
// Route::resource('poster', Poster::class);

Route::prefix('poster')->group(function () {
    Route::get('/', [Poster::class, 'index'])
        ->name('posterIndex');

    Route::get('/create', [Poster::class, 'create'])
        ->name('posterCreate');

    Route::get('/delete/{id}', [Poster::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('posterDelete');
});
