<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Article;
use App\Issue;

Route::get('/', 'WelcomeController@index');

Route::get('home', 'IssuesController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::resource('issues', 'IssuesController');
Route::resource('articles', 'ArticlesController');

Route::bind('issues_slug', function($value)
{
    return Issue::where('slug', $value)->firstOrFail();
});

Route::bind('articles_slug', function($value)
{
    return Article::where('slug', $value)->firstOrFail();
});

Route::group(['prefix' => '/{issues_slug}'], function()
{
    Route::get('/', 'IssuesController@show');
    Route::get('{articles_slug}', 'ArticlesController@show');
});