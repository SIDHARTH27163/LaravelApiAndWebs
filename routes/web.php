<?php
use App\Http\Controllers\ITServiceController;
use App\Http\Controllers\ITCaseStudiesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TouristPlaceController;
use App\Http\Controllers\LocationController;

// use App\Http\Middleware\LogRequestMiddleware;
// Route::middleware(LogRequestMiddleware::class)->group(function () {
// Public routes
Route::get('/', function () {
    return view('welcome');
});
Route::view('home', 'home');

// Admin routes
Route::prefix('admin')->group(function () {
    // Admin dashboard route
    Route::view('/', 'admin.admin')->name('admin.dashboard');
    // Route::view('manage-categories', 'admin.categories');
    Route::resource('manage-categories', CategoryController::class);
    Route::post('/categories/{id}/toggle-status', [CategoryController::class, 'changeStatus'])->name('categories.toggle-status');

    Route::resource('touristplaces', TouristPlaceController::class)->except(['show']);
    Route::get('/tourist-places/search', [TouristPlaceController::class, 'search'])->name('touristplaces.search');

    Route::resource('managelocations', LocationController::class)->except(['show']);
    Route::post('/managelocations/{id}/toggle-status', [LocationController::class, 'changeStatus'])->name('managelocations.toggle-status');

    // Resource routes for managing IT services
    Route::resource('manageitservices', ITServiceController::class)->except(['show']);
    Route::prefix('manageitservices/{id}')->group(function () {
        Route::get('gallery', [ITServiceController::class, 'gallery'])->name('manageitservices.gallery');
        Route::post('gallery', [ITServiceController::class, 'addImageToGallery'])->name('manageitservices.addImageToGallery');
        Route::delete('gallery/{imageId}', [ITServiceController::class, 'deleteImageFromGallery'])->name('manageitservices.deleteImageFromGallery');
    });
    // Resource routes for managing case studies
    Route::resource('managecasestudies', ITCaseStudiesController::class)->except(['show']);

    // Additional routes for gallery management within ITCaseStudiesController
    Route::prefix('managecasestudies/{id}')->group(function () {
        Route::get('gallery', [ITCaseStudiesController::class, 'gallery'])->name('managecasestudies.gallery');
        Route::post('gallery', [ITCaseStudiesController::class, 'addImageToGallery'])->name('managecasestudies.addImageToGallery');
        Route::delete('gallery/{imageId}', [ITCaseStudiesController::class, 'deleteImageFromGallery'])->name('managecasestudies.deleteImageFromGallery');
    });

});
// routes/for upload immages from text editor quill.js used
// routes/for upload images from text editor quill.js used

Route::post('/upload', [ImageUploadController::class, 'upload']);


Route::prefix('touristplaces')->group(function () {
    Route::get('/', [TouristPlaceController::class, 'home'])->name('touristplaces.home');
    Route::get('popularplaces', [TouristPlaceController::class, 'popularPlaces'])->name('touristplaces.popularplaces');
    Route::get('{title}', [TouristPlaceController::class, 'viewtouristplace'])->name('touristplaces.viewplace')
        ->where('title', '[A-Za-z0-9\-]+'); // Restrict to only match titles

    // Add a prefix to distinguish category from title
    Route::get('Category/{category}', [TouristPlaceController::class, 'filterbyCategory'])->name('touristplaces.filterPlaceCategory');
});
