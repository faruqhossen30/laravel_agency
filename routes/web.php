<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\BlogComtroller;
use App\Http\Controllers\ConditionController;
use App\Http\Controllers\ContuctController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\PricepageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TearmsController;
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

Route::get('/', [HomepageController::class, 'index'])->name('homepage');
Route::get('about',[AboutController::class,'index'])->name('aboutpage');
Route::get('price', [PricepageController::class, 'index'])->name('pricepage');
// Route::get('blog', [BlogComtroller::class, 'index'])->name('blogpage');
Route::get('terms', [TearmsController::class, 'index'])->name('termspage');
Route::get('articles',[ArticlesController::class,'index'])->name('articlespage');
Route::get('faq',[FaqController::class,'index'])->name('faqpage');
Route::get('contact',[ContuctController::class,'index'])->name('contactpage');

Route::get('/test', function () {
    return view('test');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
