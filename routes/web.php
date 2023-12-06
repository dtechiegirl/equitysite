<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquityController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
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



Route::get('/', [EquityController::class, 'index'])->name('index');
Route::get('/about', [EquityController::class, 'about'])->name('about');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/auth', [UserController::class, 'auth'] )->name('auth');
Route::post('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/blog',[BlogController::class, 'index'])->name('blog');
Route::get('/create-post', [BlogController::class, 'create'])->name('create-post')->middleware('auth');
Route::post('/store-post', [BlogController::class, 'store'])->name('store-post');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact-us');
Route::post('/contact-us', [ContactController::class, 'contactus'])->name('contact');
Route::post('/contactPage', [ContactController::class, 'contactPage'])->name('contactPage');
Route::get('/entertainment', [BlogController::class, 'entertainment'])->name('entertainment');