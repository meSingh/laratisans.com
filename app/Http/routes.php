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

Route::get( '/', [ 'as' => 'home', 'uses' => 'PagesController@index' ] );


/*
|--------------------------------------------------------------------------
| Redirecting Routes
|--------------------------------------------------------------------------
*/

Route::get('github', [ 'as' => 'github', function()
{
    return redirect('https://github.com/WebsterFolks/Laratisans');
}]);


/*
|--------------------------------------------------------------------------
| Misc Routes
|--------------------------------------------------------------------------
*/

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
