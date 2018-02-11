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
Route::group([], function(){

    Route::match(['get','post'], '/', ['uses'=>'IndexController@execute', 'as'=>'home']);
    Route::get('/page/{alias}',['uses'=>'PageController@execute', 'as'=>'page']);

    Route::auth();
});


Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('/', function(){
        if(view()->exists('admin.index')){
            $data = ['title' => 'Панель администратора'];
            return view('admin.index', $data);
        }
    });

    Route::group(['prefix'=>'pages'], function(){

        Route::get('/', ['uses'=>'PagesController@execute', 'as'=>'pages']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PagesAddsController@execute', 'as'=>'pagesAdd']);
        Route::match(['get','post', 'delate'], '/edit/{page}', ['uses'=>'PagesEditController@execute', 'as'=>'pagesEdit']);
    });

    Route::group(['prefix'=>'portfolios'], function(){

        Route::get('/', ['uses'=>'PortfolioController@execute', 'as'=>'portfolio']);
        Route::match(['get', 'post'], '/add', ['uses'=>'PortfolioAddController@execute', 'as'=>'portfolioAdd']);
        Route::match(['get','post', 'delate'], '/edit/{portfolio}', ['uses'=>'PortfolioEditController@execute', 'as'=>'portfolioEdit']);

    });

    Route::group(['prefix'=>'services'], function(){

        Route::get('/', ['uses'=>'ServiceController@execute', 'as'=>'service']);
        Route::match(['get', 'post'], '/add', ['uses'=>'ServiceAddController@execute', 'as'=>'serviceAdd']);
        Route::match(['get','post', 'delate'], '/edit/{portfolio}', ['uses'=>'ServiceEditController@execute', 'as'=>'serviceEdit']);

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
