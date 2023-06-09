<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;
use App\Http\Controllers\admin\ContentController;
use App\Http\Controllers\admin\SliderController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/category/{id}', [HomeController::class, 'category'])->name('category');
Route::get('/service-detail/{id}', [HomeController::class, 'serviceDetail'])->name('detail');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-category', [CategoryController::class, 'index'])->name('add.category');
    Route::post('/new-category', [CategoryController::class, 'create'])->name('new.category');
    Route::get('/manage-category', [CategoryController::class, 'manage'])->name('manage.category');
    Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('edit.category');
    Route::post('/update-category/{id}', [CategoryController::class, 'update'])->name('update.category');
    Route::get('/delete-category/{id}', [CategoryController::class, 'delete'])->name('delete.category');

    Route::get('/add-sub-category', [SubCategoryController::class, 'index'])->name('add.subcategory');
    Route::post('/new-sub-category', [SubCategoryController::class, 'create'])->name('new.subcategory');
    Route::get('/manage-sub-category', [SubCategoryController::class, 'manage'])->name('manage.subcategory');
    Route::get('/edit-sub-category/{id}', [SubCategoryController::class, 'edit'])->name('edit.sub-category');
    Route::get('/edit-sub-category/{id}', [SubCategoryController::class, 'edit'])->name('edit.sub-category');
    Route::post('/update-sub-category/{id}', [SubCategoryController::class, 'update'])->name('update.subcategory');
    Route::get('/delete-sub-category/{id}', [SubCategoryController::class, 'delete'])->name('delete.sub-category');

    Route::get('/add-content', [ContentController::class, 'index'])->name('add.content');
    Route::post('/new-content', [ContentController::class, 'create'])->name('new.content');
    Route::get('/manage-content', [ContentController::class, 'manage'])->name('manage.content');

    Route::get('/add-slider', [SliderController::class, 'index'])->name('index.slider');
    Route::post('/new-slider', [SliderController::class, 'create'])->name('new.slider');
    Route::get('/manage-slider', [SliderController::class, 'manage'])->name('manage.slider');
    Route::get('/edit-slider/{id}', [SliderController::class, 'edit'])->name('edit.slider');
    Route::post('/update-slider/{id}', [SliderController::class, 'update'])->name('update.slider');
    Route::get('/delete-slider/{id}', [SliderController::class, 'delete'])->name('delete.slider');
});
