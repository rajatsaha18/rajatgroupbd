<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\website\HomeController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\SubCategoryController;

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
Route::get('/category', [HomeController::class, 'category'])->name('category');
Route::get('/service-detail', [HomeController::class, 'serviceDetail'])->name('detail');

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
});
