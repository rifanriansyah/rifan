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
    return view('welcome');
});

Route::get('loginview', 'C_Home@Viewlogin' );
Route::get('regisview', 'C_Home@Viewregis');
//page
Route::get('dashboard', 'C_Home@Viewdashboard');
Route::get('myproject', 'C_Home@Viewmyproject');
Route::get('topworker', 'C_Home@Viewtopworker');




