<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeachersLoginController;
use App\Http\Controllers\Stud_Log_RegController;

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


// Route::get('teachlogin', function(){

// return view('login.teachers_login');

// })->name('teachlogin');


Route::get('/teachlogin',[TeachersLoginController::class, 'showLoginForm'])->name('teachlogin');
Route::post('/teachcreate',[TeachersLoginController::class, 'teacherslogin'])->name('teachcreate');




Route::get('/studlogin',[Stud_Log_RegController::class, 'studloginForm'])->name('studlogin');
Route::post('/studattend',[Stud_Log_RegController::class, 'studnetslogin'])->name('studattend');



Route::get('/studreg',[Stud_Log_RegController::class, 'studregForm'])->name('studreg');
Route::post('/studinsert',[Stud_Log_RegController::class, 'studinsert'])->name('studinsert');
