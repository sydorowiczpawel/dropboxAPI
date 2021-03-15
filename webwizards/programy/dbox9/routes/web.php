<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/show');
});

Route::get('/show', [App\Http\Controllers\DropboxController::class, 'show']);

Route::get('/back', [App\Http\Controllers\DropboxController::class, 'back']);

Route::get('/openFolder', [App\Http\Controllers\DropboxController::class, 'openFolder']);

Route::post('/download', [App\Http\Controllers\DropboxController::class, 'download']);

Route::post('/createFolder', [App\Http\Controllers\DropboxController::class, 'createFolder']);

Route::post('/addFile', [App\Http\Controllers\DropboxController::class, 'store']);

Route::get('/error', [App\Http\Controllers\DropboxController::class, 'error']);