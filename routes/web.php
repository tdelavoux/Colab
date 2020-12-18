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
    Route::get('userProfile/{Tab}', 'AppsController\UserProfilController@execute')->name('personalInfos');
});


/* --------------------- PROJECTS BOARDS -------------------------------------------------------- */
Route::group(['prefix' => 'board'], function(){
    Route::get('wikiView/{fkBoard}', 'AppsController\BoardWikiController@execute')->name('wiki.view');
    Route::get('kabanView/{fkBoard}', 'AppsController\BoardKabanController@execute')->name('kaban.view');
    Route::get('BugsView/{fkBoard}', 'AppsController\BoardBugsController@execute')->name('bugs.view');
    Route::get('TeamView/{fkBoard}', 'AppsController\BoardTeamController@execute')->name('team.view');
    Route::get('ChatView/{fkBoard}', 'AppsController\BoardChatController@execute')->name('chat.view');
    Route::get('LogsView/{fkBoard}', 'AppsController\BoardLogsController@execute')->name('logs.view');
    Route::get('ParamsView/{Tab}/{fkBoard}', 'AppsController\BoardParamsController@execute')->name('params.view');
    Route::get('StatsView/{fkBoard}', 'AppsController\BoardStatsController@execute')->name('stats.view');

    Route::get('scrumView/{fkBoard}', 'AppsController\BoardScrumController@execute')->name('scrum.view');
    Route::post('scrum/getLine', 'AppsController\BoardScrumController@getEmptyLine')->name('scrum.projectLine');
    Route::post('scrum/getSprint', 'AppsController\BoardScrumController@getEmptySprint')->name('scrum.projectSprint');
});
