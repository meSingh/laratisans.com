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

Route::get( '/',         [ 'as' => 'home',      'uses' => 'PagesController@index'       ] );
Route::get( 'hire',      [ 'as' => 'hire',      'uses' => 'PagesController@showHire'    ] );
Route::get( 'contact',   [ 'as' => 'contact',   'uses' => 'PagesController@showContact' ] );
Route::get( 'terms',     [ 'as' => 'terms',     'uses' => 'PagesController@showTerms'   ] );
Route::get( 'privacy',   [ 'as' => 'privacy',   'uses' => 'PagesController@showPrivacy' ] );


/*
|--------------------------------------------------------------------------
| Web Apps Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'web-app'], function()
{
    Route::get('/', [ 'as' => 'webapps', 'uses' => 'AppsController@index']);  

});



/*
|--------------------------------------------------------------------------
| Portfolio Routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'portfolio'], function()
{
    Route::get('/', [ 'as' => 'portfolio', 'uses' => 'PortfolioController@index']);    

});



/*
|--------------------------------------------------------------------------
| Redirecting Routes
|--------------------------------------------------------------------------
*/

Route::get('scripts', [ 'as' => 'scripts', function()
{
    return redirect('http://codecanyon.net/user/meSingh/portfolio?ref=meSingh&utf8=%E2%9C%93&order_by=sales');
}]);


Route::get('support', [ 'as' => 'support', function()
{
    return redirect('mailto:support@websterfolks.com');
}]);


Route::group(['prefix' => 'go'], function()
{

    Route::get('script/{name}', [ 'as' => 'go.script', function($name)
    {
        switch ($name) {
            case 'namester':
                return redirect('http://codecanyon.net/item/namester-php-whois-script/6778494?ref=meSingh');
                break;
            case 'ranknator':
                return redirect('http://codecanyon.net/item/ranknator-a-simple-pagerank-checker/6825737?ref=meSingh');
                break;
            case 'socialstats':
                return redirect('http://codecanyon.net/item/socialstats-php-class-/4074278?ref=meSingh');
                break;
            case 'analyzer':
                return redirect('http://codecanyon.net/item/domain-analyzer-php-class/4377558?ref=meSingh');
                break;
            case 'sniipy':
                return redirect('http://codecanyon.net/item/sniipy-a-super-minimal-snippet-tool/7024301?ref=meSingh');
                break;
            
            default:
                return redirect()->route('home');
                break;
        }
    }]);


    Route::get('client/{name}', [ 'as' => 'go.client', function($name)
    {
        switch ($name) {
            case 'delishows':
                return redirect('http://delishows.to');
                break;
            case 'socialradar':
                return redirect('http://thesocialradar.com');
                break;
            case 'lushclande':
                return redirect('http://lushclande.com');
                break;

            default:
                return redirect()->route('home');
                break;
        }
    }]);


    Route::get('webapp/{name}', [ 'as' => 'go.webapp', function($name)
    {
        switch ($name) {
            case 'namester':
                return redirect('http://www.namesterwhois.com');
                break;
            case 'ranknator':
                return redirect('http://www.ranknator.com');
                break;
            case 'sniipy':
                return redirect('http://www.sniipy.com');
                break;
            case 'uicolors':
                return redirect('http://uicolors.codzi.com');
                break;
            
            default:
                return redirect()->route('home');
                break;
        }
    }]);


});




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
