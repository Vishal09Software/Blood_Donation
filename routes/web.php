<?php

use Illuminate\Support\Facades\Route;
// backend Controller
use App\Http\Controllers\backend\DashboardController;
 use App\Http\Controllers\backend\BloodDonorsController;
 use App\Http\Controllers\backend\BloodRequestController;
 use App\Http\Controllers\backend\SliderController;
 use App\Http\Controllers\backend\CampesController;
 use App\Http\Controllers\backend\GalleryDataController;
 use App\Http\Controllers\backend\BloodbankController;
 use App\Http\Controllers\backend\TestimonalController;

// frontend Controller
 use App\Http\Controllers\frontend\HomeController;
 use App\Http\Controllers\frontend\AboutController;
 use App\Http\Controllers\frontend\GalleryController;
 use App\Http\Controllers\frontend\SearchdonorController;
 use App\Http\Controllers\frontend\CampController;
 use App\Http\Controllers\frontend\ContactController;




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

// All Frontend Controller
Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/gallery',[GalleryController::class,'index']);
Route::get('/search_donor',[SearchdonorController::class,'index']);
Route::get('/cities',[SearchdonorController::class,'getCity']);
Route::get('/campes',[CampController::class,'index']);
Route::get('/contact',[ContactController::class,'index']);

Route::middleware(['auth'])->group(function(){
    Route::post('/',[HomeController::class,'store']);
    Route::post('/',[HomeController::class,'store2']);
});



// All Backend Controller
Route::middleware(['auth'])->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);

    // blood_donors controllers
    Route::post('/blood_donors',[BloodDonorsController::class,'store']);
    Route::get('/blood_donors',[BloodDonorsController::class,'show']);
    Route::get('/cities',[BloodDonorsController::class,'getCity']);
    Route::get('/blood_donors/edit/{id}',[BloodDonorsController::class,'edit']);
    Route::put('/blood_donors/update_data/{id}',[BloodDonorsController::class,'update']);
    Route::get('blood_donors/update-status/{id}',[BloodDonorsController::class,'updateStatus']);
    Route::get('/blood_donors/delete/{id}',[BloodDonorsController::class,'destroy']);

    // BloodRequest controllers
    Route::get('/blood_request',[BloodRequestController::class,'show']);
    Route::get('/blood_request/edit/{id}',[BloodRequestController::class,'edit']);
    Route::put('/blood_request/update_data/{id}',[BloodRequestController::class,'update']);
    Route::get('blood_request/update-status/{id}',[BloodRequestController::class,'updateStatus']);
    Route::get('/blood_request/delete/{id}',[BloodRequestController::class,'destroy']);


    // slider Controller
    Route::post('/slider',[SliderController::class,'store']);
    Route::get('/slider',[SliderController::class,'show']);
    Route::get('/slider/edit/{id}',[SliderController::class,'edit']);
    Route::put('/slider/update_data/{id}',[SliderController::class,'update']);
    Route::get('/slider/delete/{id}',[SliderController::class,'destroy']);

    // Campes Controller
    Route::post('/camp',[CampesController::class,'store']);
    Route::get('/camp',[CampesController::class,'show']);
    Route::get('/camp/edit/{id}',[CampesController::class,'edit']);
    Route::put('/camp/update_data/{id}',[CampesController::class,'update']);
    Route::get('/camp/delete/{id}',[CampesController::class,'destroy']);


    // gallery Controller
    Route::post('/galleries',[GalleryDataController::class,'store']);
    Route::get('/galleries',[GalleryDataController::class,'show']);
    Route::get('/galleries/edit/{id}',[GalleryDataController::class,'edit']);
    Route::put('/galleries/update_data/{id}',[GalleryDataController::class,'update']);
    Route::get('/galleries/delete/{id}',[GalleryDataController::class,'destroy']);


    // Testimonal Controller
    Route::post('/testimonal_slider',[TestimonalController::class,'store']);
    Route::get('/testimonal_slider',[TestimonalController::class,'show']);
    Route::get('/testimonal_slider/edit/{id}',[TestimonalController::class,'edit']);
    Route::put('/testimonal_slider/update_data/{id}',[TestimonalController::class,'update']);
    Route::get('/testimonal_slider/delete/{id}',[TestimonalController::class,'destroy']);

    // Blood Bank Controller
    Route::post('/blood_bank',[BloodbankController::class,'store']);
    Route::get('/blood_bank',[BloodbankController::class,'show']);
    Route::get('/blood_bank/edit/{id}',[BloodbankController::class,'edit']);
    Route::put('/blood_bank/update_data/{id}',[BloodbankController::class,'update']);
    Route::get('/blood_bank/delete/{id}',[BloodbankController::class,'destroy']);


});

require __DIR__.'/auth.php';
