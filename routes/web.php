<?php

use App\Http\Controllers\DurasiFilmController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ReviewerController;
use App\Http\Controllers\TahunRilisController;
use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('about', [MyController::class, 'about']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// route admin
Route::group(['prefix' => 'admin',
    'middleware' => ['auth', 'isAdmin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::resource('genre', GenreController::class);
    Route::resource('movie', MovieController::class);
    Route::resource('reviewer', ReviewerController::class);
    Route::resource('tahun_rilis', TahunRilisController::class);
    Route::resource('casting',CastingController ::class);

});

Route::get('/errors', function () {
    return view('403');
});

Route::get('/', [FrontController::class, 'index'])->name('front');
Route::get('/about', [FrontController::class, 'about']);
Route::get('/profile', [FrontController::class, 'profile']);
Route::get('/movies', [FrontController::class, 'movies']);
Route::get('/movie/{id}', [FrontController::class, 'singleMovie']);
Route::post('/sendReview', [FrontController::class, 'sendReview'])->name('kirimReview');
