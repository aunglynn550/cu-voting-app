<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
});

Route::group( [ 'middleware' =>'auth'], function()
{


    Route::prefix('admin')->group(function () {

        Route::resource('/king', 'App\Http\Controllers\Admin\KingController')->middleware('is_admin');
     
        //  Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.users');       
    });


    Route::get('/welcome', function () {
        return view('welcome');
    });
   
  
  
    Route::prefix('king')->group(function () {

        Route::get('/', [\App\Http\Controllers\King\KingController::class, 'index'])
            ->name('king.index')->middleware('voted');
    
        Route::get('/voted', [\App\Http\Controllers\King\KingVotedController::class, 'index'])
            ->name('kingvoted.index');
    });
    
Route::prefix('queen')->group(function () {

    Route::get('/', [\App\Http\Controllers\Queen\QueenController::class, 'index'])
        ->name('queen.index')->middleware('voted');

    Route::get('/voted', [\App\Http\Controllers\Queen\QueenVotedController::class, 'index'])
        ->name('queenvoted.index');

});

});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/register', '\App\Http\Controllers\Auth\RegisterController@register');
// declare auth routes after the routes to login controller
Auth::routes();
