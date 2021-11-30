<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceProductInfoController;
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
Route::get('service-detail/{id}', [FrontendController::class, 'servicesdetail'])->name('servicedetail');
Route::get('latest-news', [FrontendController::class, 'latestNews'])->name('latestNews');
Route::get('latest-news-detail/{id}', [FrontendController::class, 'latestNewsDetail'])->name('latestNewsDetail');
Route::post('latest-news-detail-comment', [FrontendController::class, 'latestNewsDetailComment'])->name('latestNewsDetailComment');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::post('contact/message', [FrontendController::class, 'contact_message'])->name('contact.message');
Route::get('faq', [FrontendController::class, 'faq'])->name('faq');

//Start Backend Controller

//Dashboard Controller
Route::middleware(['auth:sanctum', 'verified'])->get('admin/dashboard', [DashboardController::class, 'index'])->name('dashboard');

//Service Category Controller
Route::resource('admin/service-category', ServiceCategoryController::class);
Route::get('admin/service-category-delete/{id}', [ServiceCategoryController::class, 'delete'])->name('service-category.delete');

//Service Controller
Route::resource('admin/service', ServiceController::class);
Route::get('admin/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');
Route::get('admin/service/action/{id}', [ServiceController::class, 'action'])->name('service.action');

//Service Product Information Controller
Route::get('admin/service/info/{id}', [ServiceProductInfoController::class, 'index'])->name('service.info');
Route::post('admin/service/product/', [ServiceProductInfoController::class, 'store'])->name('service.product.store');
Route::get('admin/service/product/action/{id}', [ServiceProductInfoController::class, 'action'])->name('service.product.action');
Route::get('admin/service/product/{id}/edit', [ServiceProductInfoController::class, 'edit'])->name('service.product.edit');
Route::post('admin/service/product/update/{id}', [ServiceProductInfoController::class, 'update'])->name('service.product.update');
Route::get('admin/service/product/delete/{id}', [ServiceProductInfoController::class, 'delete'])->name('service.product.delete');

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


