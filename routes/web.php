<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactDetailController;




Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/admin/contact', [ContactDetailController::class, 'edit'])->name('contact.edit');
Route::post('/admin/contact', [ContactDetailController::class, 'update'])->name('contact.update');


Route::middleware('auth')->group(function () {
    Route::get('/admin/contact/edit', [ContactDetailController::class, 'edit'])->name('contact.edit');

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




require __DIR__.'/auth.php';

// Auth::routes();
