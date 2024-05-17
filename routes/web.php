<?php

use App\Http\Controllers\PhotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PhotoController::class, 'gallery']);

Route::get('/gallery', [PhotoController::class, 'gallery']);

Route::get('/photo/create', [PhotoController::class, 'create']);

Route::post('/photo/store', [PhotoController::class, 'store']);

Route::get('/photo/view/{id}', [PhotoController::class, 'view']);

Route::delete('/photo/delete/{id}', [PhotoController::class, 'delete']);
