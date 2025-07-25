<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\DocumentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Static pages
Route::get('/', fn() => view('home'));
Route::get('/blog', fn() => view('blog'));
Route::get('/gallery', fn() => view('gallery'));

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/documents', [DocumentController::class, 'index'])->name('admin.documents.index');
    Route::post('/documents', [DocumentController::class, 'store'])->name('admin.documents.store');
    Route::delete('/documents/{document}', [DocumentController::class, 'destroy'])->name('admin.documents.destroy');
});

// About page (dynamic from DB)
Route::get('/about', [AboutController::class, 'index'])->name('about');
