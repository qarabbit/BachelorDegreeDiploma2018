<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', array('as' => 'home', 'uses' => 'IndexController@getIndex'));
Route::post('sendfeedback', array('as' => 'index.sendfeedback', 'uses' => 'IndexController@postSendfeedback'));
Route::get('feedback', array('as' => 'index.feedback', 'uses' => 'IndexController@getFeedback'));
Route::get('news', array('as' => 'news', 'uses' => 'IndexController@getNews'));
Route::get('termin', array('as' => 'termin', 'uses' => 'IndexController@getTermin'));
Route::get('experiment', array('as' => 'experiment', 'uses' => 'IndexController@getExperiment'));
Route::get('gosts', array('as' => 'gosts', 'uses' => 'IndexController@getGosts'));
Route::get('prices', array('as' => 'prices', 'uses' => 'IndexController@getPrices'));
Route::get('education', array('as' => 'education', 'uses' => 'IndexController@getEducation'));
Route::get('search', array('as' => 'search', 'uses' => 'IndexController@getSearch'));

Route::get('login', array('as' => 'login.index', 'uses' => 'LoginController@getIndex'));
Route::post('login', array('as' => 'login.auth', 'uses' => 'LoginController@login'));
Route::post('reg', array('as' => 'login.reg', 'uses' => 'LoginController@reg'));
Route::get('logout', array('as' => 'login.logout', 'uses' => 'LoginController@logout'));
Route::post('restorepass', array('as' => 'login.restorepass', 'uses' => 'LoginController@restorepass'));

Route::controller('materials', 'MaterialsController');
Route::controller('tests', 'TestsController');
Route::controller('pages', 'PagesController');

Route::group(array('before' => 'check_admin'), function() {
    Route::controller('admin', 'AdminController');
});

Route::group(array('before' => 'check_user'), function() {
    Route::controller('user', 'UserController');
});

Route::filter('check_admin', function()
{
    if (!Auth::guest()) {
        $role = Auth::user()->role;
        if ($role != 'admin') {
            Auth::logout();
            return Redirect::to('/');
        }
    }
    else {
        return Redirect::to('/');
    }
});

Route::filter('check_user', function()
{
    if (!Auth::guest()) {
        $role = Auth::user()->role;
        if (($role != 'user') && ($role != 'admin')) {
            Auth::logout();
            return Redirect::to('/');
        }
    }
    else {
        return Redirect::to('/');
    }
});

Route::filter('check_auth', function()
{
    if (Auth::guest()) {
		Auth::logout();
		return Redirect::to('/');
    }
});