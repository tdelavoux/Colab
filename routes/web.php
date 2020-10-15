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

/* --------------------- DASHBOARD ----------------------------------------------------- */
Route::get('/', 'AppsController\DashBoardController@execute');
Route::get('dashboard', 'AppsController\DashBoardController@execute')->name('dashboard');


/* --------------------- SEARCH -------------------------------------------------------- */
Route::get('search', 'AppsController\RechercheController@execute')->name('search');


/* --------------------- PROJECTS -------------------------------------------------------- */
Route::get('myprojects', 'AppsController\MesProjetsController@execute')->name('myprojects');



/* --------------------- PROJECTS -------------------------------------------------------- */
Route::group(['prefix' => 'userprofile'], function(){
    Route::get('personalInfos', 'AppsController\UserProfilController@execute')->name('personalInfos');
    Route::get('passwdInfos', 'AppsController\UserProfilController@showPassword')->name('passwdInfos');
    Route::get('notifisInfos', 'AppsController\UserProfilController@showNotifs')->name('notifisInfos');
});

