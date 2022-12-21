<?php

use App\Http\Controllers\Contactus;
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