<?php

use App\Http\Controllers\Contactus;
use App\Http\Controllers\HomeController;
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
Route::redirect('/', '/ar');//ok
Route::redirect('contactus',[Contactus::class, 'ContactUsForm'])->name('ContactUsForm');
Route::get('/', function () {
    return view('Pages/HomePage');
});

Route::post("getImeageSlider", [HomeController::class, "getImeageSlider"])->name('getImeageSlider');
Route::post("setImeageSlider", [HomeController::class, "setImeageSlider"])->name('setImeageSlider');
Route::post("setaboutusslider", [HomeController::class, "setaboutusslider"])->name('setaboutusslider');
Route::post("setImeagesecondBanner", [HomeController::class, "setImeagesecondBanner"])->name('setImeagesecondBanner');
