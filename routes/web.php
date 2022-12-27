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

Route::redirect('/', '/ar'); //ok
Route::redirect('contactus', [Contactus::class, 'ContactUsForm'])->name('ContactUsForm');
Route::get('/', function () {
    return view('Pages/HomePage');
});

Route::post("getImeageSlider", [HomeController::class, "getImeageSlider"])->name('getImeageSlider');
Route::post("setImeageSlider", [HomeController::class, "setImeageSlider"])->name('setImeageSlider');
Route::post("setaboutusslider", [HomeController::class, "setaboutusslider"])->name('setaboutusslider');
Route::post("getImeagesecondBanner", [HomeController::class, "getImeagesecondBanner"])->name('getImeagesecondBanner');
Route::post("setImeagesecondBanner", [HomeController::class, "setImeagesecondBanner"])->name('setImeagesecondBanner');
Route::post("setImeageofferBanner", [HomeController::class, "setImeageofferBanner"])->name('setImeageofferBanner');
Route::post("getImeageofferBanner", [HomeController::class, "getImeageofferBanner"])->name('getImeageofferBanner');
Route::post("setImageFourthBanner", [HomeController::class, "setImageFourthBanner"])->name('setImageFourthBanner');
Route::post("getImageFourthBanner", [HomeController::class, "getImageFourthBanner"])->name('getImageFourthBanner');
Route::post("removeImageSlider", [HomeController::class, "removeImageSlider"])->name('removeImageSlider');

Route::post('/conctus', [HomeController::class, 'ContactUsForm'])->name('ContactUsForm');
Route::get("toastr-notification", [HomeController::class, "showToastrMessages"]);
