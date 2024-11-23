<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\ProfileController;

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

Route::get('/', function () {
    return view('auth.login');
});
Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'profile'],function(){
        Route::get('/index/{id}',[App\Http\Controllers\User\ProfileController::class,'index'])
        ->name('profile.index');
        Route::get('/edit/{id}',[App\Http\Controllers\User\ProfileController::class,'edit'])
        ->name('profile.edit');
        Route::post('/update/{id}',[App\Http\Controllers\User\ProfileController::class,'update'])
        ->name('profile.update');
        

    });

});