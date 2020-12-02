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


/* --------------------- MY PROJECTS -------------------------------------------------------- */
Route::get('myprojects', 'AppsController\MesProjetsController@execute')->name('myprojects');



/* --------------------- USER INFOS -------------------------------------------------------- */
Route::group(['prefix' => 'userprofile'], function(){
    Route::get('personalInfos', 'AppsController\UserProfilController@execute')->name('personalInfos');
    Route::get('passwdInfos', 'AppsController\UserProfilController@showPassword')->name('passwdInfos');
    Route::get('notifisInfos', 'AppsController\UserProfilController@showNotifs')->name('notifisInfos');
    Route::get('paramsInfo', 'AppsController\UserProfilController@showParams')->name('paramsInfo');
});


/* --------------------- PROJECTS BOARDS -------------------------------------------------------- */
Route::group(['prefix' => 'board'], function(){
    Route::get('scrumView/{fkBoard}', 'AppsController\BoardScrumController@execute')->name('scrumView');
    Route::get('kabanView/{fkBoard}', 'AppsController\BoardKabanController@execute')->name('kabanView');
    Route::get('BugsView/{fkBoard}', 'AppsController\BoardBugsController@execute')->name('bugsView');
    Route::get('TeamView/{fkBoard}', 'AppsController\BoardTeamController@execute')->name('teamboardView');
});

