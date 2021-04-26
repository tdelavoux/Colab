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

/* --------------------- PROJECTS -------------------------------------------------------- */
Route::group(['prefix' => 'projects'], function(){
    Route::post('createProject', 'AppsController\ProjectController@createProject')->name('project.createProject');
    Route::get('overview/{fkProject}', 'AppsController\ProjectController@showOverview')->name('project.overview');

    /* ------------- Team Managment ------------------- */
    Route::group(['prefix' => 'TeamView'], function(){
        Route::post('createTeam', 'AppsController\ProjectTeamController@createTeam')->name('team.create');
        Route::get('{fkProject}', 'AppsController\ProjectTeamController@execute')->name('team.view');
        Route::get('{fkProject}/viewMembers/{fkteam}', 'AppsController\ProjectTeamController@viewMembers')->name('team.viewMembers');    
        Route::post('addMember', 'AppsController\ProjectTeamController@addMember')->name('team.addMember');    
        Route::get('delete/{fkTeamMember}', 'AppsController\ProjectTeamController@deleteMember')->name('team.deleteMember');    
    });

    /* ------------- Params Managment ------------------- */
    Route::group(['prefix' => 'ProjectParamsView'], function(){
        Route::get('{Tab}/{fkfkProject}', 'AppsController\ProjectParamsController@execute')->name('params.project.view');
        Route::post('updateGeneral', 'AppsController\ProjectParamsController@updateGeneral')->name('params.project.updateGeneral');
        Route::post('updateAccess', 'AppsController\ProjectParamsController@updateAccess')->name('params.project.updateAccess');
    });
    
});

/* ---------------------  BOARDS -------------------------------------------------------- */
Route::group(['prefix' => 'board'], function(){
    Route::post('createBoard', 'AppsController\BoardController@createBoard')->name('board.createBoard');

    Route::group(['prefix' => 'wikiView'], function(){
        Route::get('{fkBoard}', 'AppsController\BoardWikiController@execute')->name('wiki.view');
        Route::get('{fkBoard}/viewChapter/{fkChapter}', 'AppsController\BoardWikiController@viewChapter')->name('wiki.viewChapter');
        Route::post('addChapter', 'AppsController\BoardWikiController@addChapter')->name('wiki.addChapter');
        Route::post('addNote', 'AppsController\BoardWikiController@addNote')->name('wiki.addNote');
        Route::post('updateNote', 'AppsController\BoardWikiController@updateNote')->name('wiki.updateNote');
        Route::post('getNoteContent', 'AppsController\BoardWikiController@getNoteContent')->name('wiki.getNoteContent');
        Route::get('deleteNote/{fkNote}', 'AppsController\BoardWikiController@deleteNote')->name('wiki.deleteNote');
    });


    Route::get('kabanView/{fkBoard}', 'AppsController\BoardKabanController@execute')->name('kaban.view');
    Route::get('IssuesView/{fkBoard}', 'AppsController\BoardIssuesController@execute')->name('issues.view');

    Route::group(['prefix' => 'ChatView'], function(){
        Route::get('{fkBoard}', 'AppsController\BoardChatController@execute')->name('chat.view');
        Route::post('postMessage', 'AppsController\BoardChatController@postMessage')->name('chat.postMessage');
        Route::post('replyMessage', 'AppsController\BoardChatController@replyMessage')->name('chat.replyMessage');
        Route::post('likePost', 'AppsController\BoardChatController@likePost')->name('chat.likePost');
        Route::post('likePostReply', 'AppsController\BoardChatController@likePostReply')->name('chat.likePostReply');
    });

    Route::get('LogsView/{fkBoard}', 'AppsController\BoardLogsController@execute')->name('logs.view');

    Route::group(['prefix' => 'BoardParamsView'], function(){
        Route::get('{Tab}/{fkBoard}/{fkTeamProject?}', 'AppsController\BoardParamsController@execute')->name('params.board.view');
        Route::post('updateGeneral', 'AppsController\BoardParamsController@updateGeneral')->name('params.board.updateGeneral');
        Route::post('updateVisibility', 'AppsController\BoardParamsController@updateVisibility')->name('params.board.updateVisibility');
        Route::post('updateHabilitations', 'AppsController\BoardParamsController@updateHabilitations')->name('params.board.updateHabilitations');
    });

    Route::get('StatsView/{fkBoard}', 'AppsController\BoardStatsController@execute')->name('statistiques.view');

    Route::group(['prefix' => 'scrum'], function(){
        Route::get('{fkBoard}', 'AppsController\BoardScrumController@execute')->name('scrum.view');
        Route::post('getLine', 'AppsController\BoardScrumController@getEmptyLine')->name('scrum.projectLine');
        Route::post('getSprint', 'AppsController\BoardScrumController@getEmptySprint')->name('scrum.projectSprint');
    });
});

/* --------------------- Applications Infos -------------------------------------------------------- */
Route::group(['prefix' => 'Application'], function(){
    Route::get('getColors', 'AppsController\AppController@getColors')->name('application.getColors');
    Route::post('searchUser', 'AppsController\AppController@searchUser')->name('application.searchUser');
});

 
