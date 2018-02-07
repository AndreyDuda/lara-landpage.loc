<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['middleware'=>'web'], function(){

    Route::match(['get','post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}',['uses'=>'PagController@execute', 'as'=>'page']);

    Route::auth();
});

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('/', function(){

    });
    Route::groupe(['prefix'=>'page'], function(){

        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesController@execute', 'as'=>'pagesAdd']);
        Route::match(['get','post', 'delate'], '/edit/{page}', ['uses'=>'PagesController@execute', 'as'=>'pagesEdit']);

    });

    Route::groupe(['prefix'=>'portfolios'], function(){

        Route::get('/', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PortfolioController@execute', 'as'=>'portfolioAdd']);
        Route::match(['get','post', 'delate'], '/edit/{portfolio}', ['uses'=>'PortfolioController@execute', 'as'=>'portfolioEdit']);

    });
    Route::groupe(['prefix'=>'services'], function(){

        Route::get('/', ['uses'=>'ServiceController@execute', 'as'=>'service']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ServiceController@execute', 'as'=>'serviceAdd']);
        Route::match(['get','post', 'delate'], '/edit/{portfolio}', ['uses'=>'ServiceController@execute', 'as'=>'serviceEdit']);

    });
});