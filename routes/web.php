<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\ThemeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Theme Routes
Route::controller(ThemeController::class)->name('Theme.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/category', 'category')->name('category');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/recipe', 'recipe')->name('recipe');
});

Route::view('/blog', 'theme.blog')->name('theme.blog');
Route::view('/reg', 'theme.register')->name('theme.register');
// Route::view('/recipe', 'theme.recipe');


// Subscriber Routes

Route::post('/subscriber/store', [SubscriberController::class, 'store'])->name('Subscriber.store');


// Contact routes
Route::post('/contact-us/store', [ContactController::class, 'store'])->name('contact-us.store');

// Route::get('/', function () {
//     return view('theme/index');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
