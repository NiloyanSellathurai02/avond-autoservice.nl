<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/service', function () {
    return view('service'); // Maak een aparte service.blade.php voor deze pagina
});

Route::get('/about', function () {
    return view('about'); // Maak een aparte about.blade.php voor deze pagina
});

Route::get('/portfolio', function () {
    return view('portfolio'); // Maak een aparte portfolio.blade.php voor deze pagina
});

Route::get('/contact', function () {
    return view('contact'); // Maak een aparte contact.blade.php voor deze pagina
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
