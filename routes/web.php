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

Route::get('/', function () {
    // return view('welcome');
    return redirect('test');
});
Route::get('/test/{id}', function ($id) {  // route with paramater
    echo "".$id;
    return view('test');
});
route::view('here','test'); //autre form de route
route::view('/test','test'); //autre form de route

