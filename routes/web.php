<?php

use Illuminate\Support\Facades\Route;
//Frontend  Controller
use App\Http\Controllers\Frontend\PagesController;


//Backend Controller
use  App\Http\Controllers\Backend\DashboardController;


/*
|--------------------------------------------------------------------------
| Frontend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route:: get('/',[PagesController::class, "home"]);




/*
|--------------------------------------------------------------------------
| Backend Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route:: group(['prefix'=>'admin'], function(){
    Route:: get('/dashboard',[DashboardController::class, "dashboard"]);
    Route:: get('/blank',[DashboardController::class, "blank"]);

});
