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

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::group( [ 'middleware' =>'auth'], function()
{


    Route::prefix('admin')->group(function () {

        Route::resource('/king', 'App\Http\Controllers\Admin\KingController')->middleware('is_admin');
        Route::resource('/queen', 'App\Http\Controllers\Admin\QueenController')->middleware('is_admin');
        Route::resource('/users', 'App\Http\Controllers\Admin\UserController')->middleware('is_admin');
        

     
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('is_admin');       
        Route::get('/allkinglist', [App\Http\Controllers\Admin\AllKingController::class, 'index'])->name('allkinglist')->middleware('is_admin');       
        Route::get('/allqueenlist', [App\Http\Controllers\Admin\AllQueenController::class, 'index'])->name('allqueenlist')->middleware('is_admin');       
    });


    Route::get('/welcome', function () {
        return view('welcome');
    });
   
  
  
    Route::prefix('king')->group(function () {

        Route::get('/', [\App\Http\Controllers\King\KingController::class, 'index'])
            ->name('king')->middleware('king_voted');
    
        Route::get('/voted', [\App\Http\Controllers\King\KingVotedController::class, 'index'])
            ->name('kingvoted.index');
    });
    
Route::prefix('queen')->group(function () {

    Route::get('/', [\App\Http\Controllers\Queen\QueenController::class, 'index'])
        ->name('queen')->middleware('queen_voted');

    Route::get('/voted', [\App\Http\Controllers\Queen\QueenVotedController::class, 'index'])
        ->name('queenvoted.index');

});

Route::prefix('allking')->group(function () {

    Route::get('/', [\App\Http\Controllers\Allking\AllkingController::class, 'voteallking'])
        ->name('allking')->middleware('all_king_voted');


        Route::get('/show', [\App\Http\Controllers\Allking\AllkingController::class, 'index'])
        ->name('allking.show');

    Route::post('/vote', [\App\Http\Controllers\Allking\AllkingController::class, 'vote'])
        ->name('voteallking');
});

Route::prefix('allqueen')->group(function () {

    Route::get('/', [\App\Http\Controllers\Allqueen\AllqueenController::class, 'voteallqueen'])
        ->name('allqueen')->middleware('all_queen_voted');

        Route::get('/show', [\App\Http\Controllers\Allqueen\AllqueenController::class, 'index'])
        ->name('allqueen.show');

    Route::post('/vote', [\App\Http\Controllers\Allqueen\AllqueenController::class, 'vote'])
        ->name('voteallqueen');
});



});

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/register', '\App\Http\Controllers\Auth\RegisterController@register');
// declare auth routes after the routes to login controller
Auth::routes();
