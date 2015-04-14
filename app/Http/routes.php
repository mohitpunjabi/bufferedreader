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
Route::resource('authors', 'AuthorsController');

Route::bind('issues_slug', function($value)
{
    return Issue::where('slug', $value)->firstOrFail();
});

Route::group(['prefix' => '/{issues_slug}'], function()
{
    Route::bind('articles_slug', function($value, $route)
    {
        return $route->issues_slug->articles()->where('slug', $value)->firstOrFail();
    });

    Route::get('/', 'IssuesController@show');
    Route::get('/edit', 'IssuesController@edit');
    Route::patch('/update', 'IssuesController@update');


    Route::get('{articles_slug}', 'ArticlesController@show');
    Route::get('/articles/create', 'ArticlesController@create');
    Route::post('/articles/store', 'ArticlesController@store');

    Route::get('/{articles_slug}/edit', 'ArticlesController@edit');
    Route::patch('/{articles_slug}/update', 'ArticlesController@update');
    Route::get('/{articles_slug}/publish', 'ArticlesController@publish');
});