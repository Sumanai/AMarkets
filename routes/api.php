<?php

use App\Http\Controllers\PosterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('poster', PosterController::class, [])->only([
    'index',
    'store',
    'destroy',
]);
