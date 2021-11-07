<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\QuestionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Frontend Controller
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('services', [FrontendController::class, 'services'])->name('service');
Route::get('service-detail', [FrontendController::class, 'servicesdetail'])->name('servicedetail');
Route::get('gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('gallery-detail', [FrontendController::class, 'gallerydetail'])->name('gallerydetail');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('news', [FrontendController::class, 'news'])->name('news');
Route::get('news-detail', [FrontendController::class, 'newsdetail'])->name('newsdetail');

//Backend Controller

//Dashboard Controller
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Question Controller
Route::resource('question', QuestionController::class);
Route::get('question/delete/{id}', [QuestionController::class, 'delete'])->name('question.delete');
Route::get('question/action/{id}', [QuestionController::class, 'action'])->name('question.action');
