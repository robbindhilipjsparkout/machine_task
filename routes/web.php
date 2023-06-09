<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;


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



Route::get('/', function(){

return view('machine_task.mainpage');

})->name('mainpage');

Route::controller(TestController::class)->group(function(){
  
    //Route::get('/questions', 'index')->name('dashboard');

    Route::get('/attendtest', 'show')->name('attendshow');
    
    Route::get('/questionscreate', 'create')->name('questionscreate');
    Route::post('/questionstore', 'store')->name('questionstore');


    Route::post('/score', 'score')->name('score');

});
