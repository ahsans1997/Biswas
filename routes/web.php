<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
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
Route::get('gallery-detail/{id}', [FrontendController::class, 'gallerydetail'])->name('gallerydetail');
Route::post('gallery-detail-comment', [FrontendController::class, 'gallerydetailcomment'])->name('gallerydetailcomment');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact/message', [FrontendController::class, 'contact_message'])->name('contact.message');
Route::get('faq', [FrontendController::class, 'faq'])->name('faq');

//Start Backend Controller

//Dashboard Controller
Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Latest News Controller
Route::resource('admin/news', NewsController::class);
Route::get('admin/news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');
Route::get('admin/news/action/{id}', [NewsController::class, 'action'])->name('news.action');

//Question Controller
Route::resource('admin/question', QuestionController::class);
Route::get('admin/question/delete/{id}', [QuestionController::class, 'delete'])->name('question.delete');
Route::get('admin/question/action/{id}', [QuestionController::class, 'action'])->name('question.action');

//Contact Controller
Route::get('admin/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('admin/message/{id}', [ContactController::class, 'show'])->name('contact.show');
Route::get('admin/message/delete/{id}', [ContactController::class, 'delete'])->name('contact.delete');


