<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TeachersLoginController;
use App\Http\Controllers\Stud_Log_RegController;
use App\Http\Middleware\PreventUrlAccess;
// use App\Services\Output\Page\MachineTask;
use App\Facades\Task;
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


Route::get('/page', function(){

    return Task::getpage();
    
    });
    


Route::get('/', function(){

return view('machine_task.mainpage');

})->name('mainpage');


// Route::middleware(['preventUrlAccess'])->group(function(){
  
//         //Route::get('/questions', 'index')->name('dashboard');
    
//         Route::get('/attendtest', [TestController::class,'show'])->name('attendshow');
        
//         Route::get('/questionscreate', [TestController::class, 'create'])->name('questionscreate');
//         Route::post('/questionstore',  [TestController::class,'store'])->name('questionstore');
    
    
//         Route::get('/score',  [TestController::class,'score'])->name('score');
    
//     });

Route::controller(TestController::class)->group(function(){
  
    //Route::get('/questions', 'index')->name('dashboard');

    Route::get('/attendtest', 'show')->name('attendshow');
    
    Route::get('/questionscreate', 'create')->name('questionscreate');
    Route::post('/questionstore', 'store')->name('questionstore');


    Route::post('/score', 'score')->name('score');

});


Route::controller(TeachersLoginController::class)->group(function(){

    Route::get('/teachlogin', 'showLoginForm')->name('teachlogin');
    Route::post('/teachcreate', 'teacherslogin')->name('teachcreate');
    
});




Route::controller(Stud_Log_RegController::class)->group(function(){


    Route::get('/studlogin', 'studloginForm')->name('studlogin');
    Route::post('/studattend', 'studnetslogin')->name('studattend');
    
    Route::get('/studreg', 'studregForm')->name('studreg');
    Route::post('/studinsert','studinsert')->name('studinsert');
    
});



// Route::get('teachlogin', function(){

// return view('login.teachers_login');

// })->name('teachlogin');

