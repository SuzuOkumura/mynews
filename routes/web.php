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

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'admin'], function () {
    Route::get('news/create', 'Admin\NewsController@add');
});

//演習 3
/* http://XXXXXX.jp/XXX というアクセスが来たときに、
   AAAControllerのbbbというAction に渡すRoutingの設定
*/
Route::get('xxx', 'Admin\AAAController@bbb');

//演習 4
/* Admin/ProfileController に対して、Action を追加
　 group で作成します。
*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Laravel13 演習
/*group のまとめ
　Routing を admin にまとめ、middleware を使って auth を参照する*/
Route::group(['prefix' => 'admin', 'middleware'=> 'auth'], function () {
    Route::get('news/create', 'Admin\NewsController@add');
    Route::post('news/create', 'Admin\NewsController@create');
    Route::get('profile/create', 'Admin\ProfileController@add');
    Route::post('profile/create', 'Admin\ProfileController@create');
    Route::get('profile/edit', 'Admin\ProfileController@edit');
    Route::post('profile/edit', 'Admin\ProfileController@update');
});
