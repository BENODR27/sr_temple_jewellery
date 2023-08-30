<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/categories', function () {
//     return view('admin.categories.browse');
// });
// Route::get('/edit_add', function () {
//     return view('admin.categories.edit_add');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//categories

Route::get('/categories_list',[App\Http\Controllers\CategoryController::class, 'categoryList'])->name('category.list.view');
Route::get('/category_add',[App\Http\Controllers\CategoryController::class, 'addNewCategoryPage'])->name('category.add');
Route::post('/category_save',[App\Http\Controllers\CategoryController::class, 'saveNewCategory'])->name('category.save');
Route::get('/category_edit',[App\Http\Controllers\CategoryController::class, 'editCategoryPage'])->name('category.edit');
Route::any('/category_update',[App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('category.update');
Route::get('/category_delete',[App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('category.delete');
Route::get('/category_product_images',[App\Http\Controllers\CategoryController::class, 'categoryProductGallery'])->name('category.product.view');



//products
Route::get('/product_images',[App\Http\Controllers\ProductController::class, 'productGallery'])->name('product.images.view');
Route::get('/product_add',[App\Http\Controllers\ProductController::class, 'addNewProductPage'])->name('product.images.add');
Route::post('/product_save',[App\Http\Controllers\ProductController::class, 'saveNewProduct'])->name('product.images.save');
Route::get('/product_edit',[App\Http\Controllers\ProductController::class, 'editProductPage'])->name('product.edit');
Route::put('/product_update',[App\Http\Controllers\ProductController::class, 'updateProduct'])->name('product.update');
Route::get('/product_delete',[App\Http\Controllers\ProductController::class, 'deleteProduct'])->name('product.delete');

//slides

Route::get('/slide_images',[App\Http\Controllers\SlideController::class, 'slideGallery'])->name('slide.images.view');
Route::get('/slide_add',[App\Http\Controllers\SlideController::class, 'addNewSlidePage'])->name('slide.images.add');
Route::post('/slide_save',[App\Http\Controllers\SlideController::class, 'saveNewSlide'])->name('slide.images.save');
Route::get('/slide_edit',[App\Http\Controllers\SlideController::class, 'editSlidePage'])->name('slide.edit');
Route::put('/slide_update',[App\Http\Controllers\SlideController::class, 'updateSlide'])->name('slide.update');
Route::get('/slide_delete',[App\Http\Controllers\SlideController::class, 'deleteSlide'])->name('slide.delete');


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});



//website routes

Route::get('/', function () {
    return view('website.index');
});
Route::get('/products', function () {
    return view('website.products');
})->name('products');
Route::get('/aboutus', function () {
    return view('website.aboutus');
})->name('aboutus');