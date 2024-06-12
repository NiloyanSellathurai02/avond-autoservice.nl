<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactDetailController;

// Algemene Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews');

// Contact Routes
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/admin/contact', [ContactDetailController::class, 'edit'])->name('contact.edit');
Route::post('/admin/contact', [ContactDetailController::class, 'update'])->name('contact.update');

// Beveiligde Admin Routes
Route::middleware('auth')->group(function () {
    Route::get('/admin/contact/edit', [ContactDetailController::class, 'edit'])->name('admin.contact.edit');
});

// Statische Pagina Routes
Route::get('/service', function () {
    return view('service');
})->name('service');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/portfolio', function () {
    return view('portfolio');
})->name('portfolio');


Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/admin/contact', [ContactDetailController::class, 'edit'])->name('contact.edit');
Route::post('/admin/contact', [ContactDetailController::class, 'update'])->name('contact.update');

Route::middleware('auth')->group(function () {
    Route::get('/admin/contact/edit', [ContactDetailController::class, 'edit'])->name('contact.edit');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes for reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class , 'store'])->name('reviews.store');
Route::get('/reviews/{review}/edit', [ReviewController::class , 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class ,'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class ,'destroy'])->name('reviews.destroy');





require __DIR__.'/auth.php';

// Auth::routes();
