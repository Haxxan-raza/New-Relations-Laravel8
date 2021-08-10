<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\http\Controllers\ImageController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('show',[MemberController::class,'show']);
// Route::post('store',[MemberController::class,'store']);
Route::post('save_form', [MemberController::class, 'saveForm'])->name('save_form');

 
Auth::routes();
Route::get('data', [MemberController::class, 'index'])->name('save_table')->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('images', [ ImageController::class, 'index' ]);
Route::post('images', [ ImageController::class, 'store' ])->name('images.store');