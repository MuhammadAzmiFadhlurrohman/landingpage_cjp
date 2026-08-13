<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/kontak', [LandingPageController::class, 'storeKritikSaran'])->name('kontak.store');