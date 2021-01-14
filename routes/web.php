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

/* --------------------- AUTHENTIFICATION ---------------------------------------------- */
Route::get('/login', 'Auth\AuthentificationController@execute')->name('login');
Route::get('/register', 'Auth\AuthentificationController@register')->name('register');
Route::get('/logout', 'Auth\AuthentificationController@logout')->name('logout');

Route::post('/login/etablishLogin', 'Auth\AuthentificationController@login')->name('verifyLogin');
Route::post('/register/newUser', 'Auth\AuthentificationController@createUser')->name('newUser');


/* --------------------- DASHBOARD ----------------------------------------------------- */
Route::get('/', 'AppsController\DashBoardController@execute');
Route::get('dashboard', 'AppsController\DashBoardController@execute')->name('dashboard');


/* --------------------- SEARCH -------------------------------------------------------- */
Route::get('search', 'AppsController\RechercheController@execute')->name('search');


/* --------------------- MY PROJECTS -------------------------------------------------------- */
Route::get('myprojects', 'AppsController\MesProjetsController@execute')->name('myprojects');

/* --------------------- USER INFOS -------------------------------------------------------- */
Route::group(['prefix' => 'userprofile'], function(){
    Route::get('userProfile/{Tab}', 'AppsController\UserProfilController@execute')->name('user.personalInfos');
    Route::post('updateProfil/updatePwd', 'AppsController\UserProfilController@updatePwd')->name('user.updatePwd');
    Route::post('updateProfil/updateAccount', 'AppsController\UserProfilController@updateAccount')->name('user.updateAccount');
    Route::post('updateProfil/updatePic', 'AppsController\UserProfilController@updatePic')->name('user.updatePic');
    Route::get('updateProfil/resetPic', 'AppsController\UserProfilController@resetPic')->name('user.resetPic');
});

/* --------------------- PROJECTS BOARDS -------------------------------------------------------- */
Route::group(['prefix' => 'projects'], function(){
    Route::post('createProject', 'AppsController\ProjectController@createProject')->name('project.createProject');
    Route::get('overview/{fkProject}', 'AppsController\ProjectController@showOverview')->name('project.overview');
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

/* --------------------- Applications Infos -------------------------------------------------------- */
Route::group(['prefix' => 'Application'], function(){
    Route::get('getColors', 'AppsController\AppController@getColors')->name('application.getColors');
});

 
