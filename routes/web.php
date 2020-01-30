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

use App\Http\Controllers\BasesController;

Auth::routes();

Route::group(['middleware'=>'auth'],function(){
		Route::get('/',['as'=>'dashboard','uses'=>'DashboardController@index']);
		Route::get('typography',['as'=>'typography','uses'=>'TypographyController@index']);
		Route::get('helper',['as'=>'helper','uses'=>'HelperController@index']);
		Route::get('widget',['as'=>'widget','uses'=>'WidgetController@index']);
		Route::get('table',['as'=>'table','uses'=>'TableController@index']);
		Route::get('media',['as'=>'media','uses'=>'MediaController@index']);
		Route::get('chart',['as'=>'chart','uses'=>'ChartController@index']);
		Route::get('bases', 'BasesController@index')->name('bases');
		Route::get('get-bases-data', 'BasesController@basesData')->name('datatables.bases');

		Route::get('categories', 'CategoriesController@index')->name('categories');
		Route::get('get-categories-data', 'CategoriesController@categoriesData')->name('datatables.categories');

		Route::post('set_base/{id}', 'BasesController@setBase')->name('change_base');
	});