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


// Route::get('basic1', function () {
//     return 'hello world';
// });
// Route::get('user/{id}/{name?}',function($id, $name = 'sean'){
// 	return 'User-id-'.$id.'-name-'.$name;
// })->where(['id'=>'[0-9]+', 'name'=>'[a-zA-z]+']);
// 
//Route::get('member/{id}', 'MemberController@info');
Route::any('/', 'IndexController@index');
Route::any('/employee/show','EmployeeController@show');
Route::any('/employee/add','EmployeeController@add');
Route::any('/employee/update/{id}','EmployeeController@update');
Route::any('/employee/delete/{id}','EmployeeController@delete');

Route::any('/person/index','PersonController@index');
Route::any('/person/day','PersonController@day');
Route::any('/person/salary','PersonController@salary');
Route::any('/person/add','PersonController@add');
Route::post('/person/getsheet', 'PersonController@getsheet');

Route::any('/storage/index', 'StorageController@index');
Route::any('/storage/add', 'StorageController@add');
Route::any('/storage/show', 'StorageController@show');
Route::any('/storage/update', 'StorageController@update');
Route::any('/storage/updatestorage', 'StorageController@updatestorage');

Route::any('/order/index', 'OrderController@index');
Route::get('/order/detail/{id}', 'OrderController@detail');
Route::get('/order/search', 'OrderController@search');
Route::any('/order/add', 'OrderController@add');
Route::any('/order/delivery', 'OrderController@delivery');

Route::any('/blueprint/index', 'BlueprintController@index');
Route::any('/blueprint/add', 'BlueprintController@add');
Route::any('/blueprint/search', 'BlueprintController@search');
Route::get('/blueprint/update/{id}', 'BlueprintController@update');
Route::get('/blueprint/delete/{id}', 'BlueprintController@delete');

Route::any('/company/index', 'CompanyController@index');
Route::any('/company/add', 'CompanyController@add');
Route::get('/company/detail/{id}', 'CompanyController@detail');

Route::any('/plan/index', 'PlanController@index');
