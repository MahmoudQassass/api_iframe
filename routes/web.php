<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IFrameController;
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
    return view('welcome');
});

//Route::get('/get_info',[IFrameController::class,'get_info']);
Route::group(['prefix'=>'api','middleware'=>['']],function(){
    Route::resource('informations',IFrameController::class);
});

